<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioCandidato;
use Rubens\Comercial\Model\candidato;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioCandidato
 *
 * @author Rubens
 */
class PdoRepositorioCandidato implements RepositorioCandidato {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createCandidatos(candidato $candidato): bool {
        $insertCandidato = 'INSERT INTO CANDIDATO (NOME, CHAPA, EMAIL, ID_SETOR_ATUAL, ID_VAGA, ID_STATUS_CANDIDATO, PRIVATE_KEY_CANDIDATO)'
                . 'VALUES (:nome, :chapa, :email, :setor, :idVaga, :idStatus, :hash)';
        $stmt = $this->conexao->prepare($insertCandidato);
        $stmt->bindValue(':nome', $candidato->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(':chapa', $candidato->getChapa(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $candidato->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':setor', $candidato->getSetor_atual(), PDO::PARAM_STR);
        $stmt->bindValue(':idVaga', $candidato->getId_vaga(), PDO::PARAM_INT);
        $stmt->bindValue(':idStatus', $candidato->getId_status_candidato(), PDO::PARAM_INT);
        $stmt->bindValue(':hash', $candidato->getPrivate_key_candidato(), PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $candidato->setId_candidato($this->conexao->lastInsertId());

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'CANDIDATO';
            $field_set = 'PRIVATE_KEY_CANDIDATO';
            $field_eguals = 'ID_CANDIDATO';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $success;
    }

    public function deleteCandidatos(candidato $candidato): bool {
        
    }

    public function readCandidatos(candidato $candidato): array {
        $sqlQuery = 'SELECT 
                        C.NOME NOME_CAND,
                        C.CHAPA CHAPA_CAND,
                        C.EMAIL EMAIL_CAND,
                        T.DESC_TIPO_VAGA VAGA_CAND,
                        C.ID_STATUS_CANDIDATO STATUS_CAND,
                        C.ID_CANDIDATO HASH_ID,
                        E.MENSAGENS MSN
                        FROM CANDIDATO C 
                        INNER JOIN VAGAS_EMPREGO V ON V.ID_VAGAS_EMPREGO = C.ID_VAGA
                        INNER JOIN TIPO_VAGA T ON T.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                        LEFT JOIN EMAIL_ENVIADOS E ON E.ID_CANDIDATOS_EMAIL = C.ID_CANDIDATO
                        WHERE C.PRIVATE_KEY_CANDIDATO = :hash_id';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':hash_id', $candidato->getPrivate_key_candidato(), \PDO::PARAM_STR);
        $stmt->execute();

        return $this->hidrataReadCandidato($stmt);
    }

    public function salvarCandidatos(candidato $candidato): bool {
        if ($candidato->getId_candidato() == null) {
            return $this->createCandidatos($candidato);
        }
    }

    public function todosCandidatos(): array {
        $sqlCandidatos = 'SELECT 
                            C.NOME NOME,
                            C.CHAPA CHAPA,
                            C.EMAIL EMAIL,
                            S.DESC_SETOR SETOR,
                            T.DESC_TIPO_VAGA VAGA,
                            SV.IDSTATUS   ID_STATUS,
                            C.PRIVATE_KEY_CANDIDATO HASH
                            FROM CANDIDATO C 
                            INNER JOIN SETOR S ON S.ID_SETOR = C.ID_SETOR_ATUAL
                            INNER JOIN VAGAS_EMPREGO V ON  V.ID_VAGAS_EMPREGO = C.ID_VAGA
                            INNER JOIN TIPO_VAGA T ON T.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                            INNER JOIN STATUS SV ON SV.IDSTATUS = C.ID_STATUS_CANDIDATO
                            ORDER BY VAGA, ID_STATUS, CHAPA ASC';
        $stmt = $this->conexao->query($sqlCandidatos);
        $stmt->execute();

        return $this->hidrataCandidato($stmt);
    }

    public function updateCandidatos(candidato $candidato): bool {
        $sqlUpdate = 'UPDATE CANDIDATO SET ID_STATUS_CANDIDATO =:idStatusCand WHERE ID_CANDIDATO =:idCand ;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':idStatusCand', $candidato->getId_status_candidato(), \PDO::PARAM_INT);
        $stmt->bindValue(':idCand', $candidato->getId_candidato(), \PDO::PARAM_INT);
        $success = $stmt->execute();
        return $success;
    }

    public function hidrataCandidato(\PDOStatement $stmt) {
        $listarCandidato = $stmt->fetchAll(PDO::FETCH_OBJ);

        $situacao = '';
        foreach ($listarCandidato as $dados) {
            switch ($dados->ID_STATUS) {
                case 1:
                    $situacao = '<font color="#000099">EM ANÁLISE</font>';
                    break;
                case 2:
                    $situacao = '<font color="red">INTERROMPIDO</font>';
                    break;
                case 3:
                    $situacao = '<font color="green">AGUARDANDO CANDIDATO</font>';
                    break;
                default :
            }

            $inf[] = array
                (
                "NOME" => $dados->NOME,
                "CHAPA" => $dados->CHAPA,
                "EMAIL" => $dados->EMAIL,
                "SETOR" => $dados->SETOR,
                "VAGA" => $dados->VAGA,
                "STATUS" => $situacao,
                "HASH" => $dados->HASH
            );
        }
        return $inf;
    }

    public function hidrataReadCandidato(\PDOStatement $stmt) {
        $listaReadCandidato = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listaReadCandidato as $dadosCandidatos) {
            $inf[] = array(
                "NOME" => $dadosCandidatos->NOME_CAND,
                "EMAIL" => $dadosCandidatos->EMAIL_CAND,
                "STATUS_CAND" => $dadosCandidatos->STATUS_CAND,
                "HASH_ID" => $dadosCandidatos->HASH_ID,
                "MSN" => $dadosCandidatos->MSN
            );
        }

        return $inf;
    }

    public function filtrarCandidatos(candidato $candidato): array {

        $parametro = '';
        switch ($candidato->getId_candidato()) {
            case 1:
                $parametro = 'VAGA';
                break;
            case 2:
                $parametro = 'NOME';
                break;
            case 3:
                $parametro = 'CHAPA';
                break;
            case 4:
                $parametro = 'EMAIL';
                break;
            case 5:
                $parametro = 'SETOR';
                break;
            case 6:
                $parametro = 'DESC_STATUS';
                break;
        }

        $sqlCandidatos = 'SELECT 
                            C.NOME NOME,
                            C.CHAPA CHAPA,
                            C.EMAIL EMAIL,
                            S.DESC_SETOR SETOR,
                            T.DESC_TIPO_VAGA VAGA,
                            SV.IDSTATUS   ID_STATUS,
                            SV.DESC_STATUS DESC_STATUS,
                            C.PRIVATE_KEY_CANDIDATO HASH
                            FROM CANDIDATO C 
                            INNER JOIN SETOR S ON S.ID_SETOR = C.ID_SETOR_ATUAL
                            INNER JOIN VAGAS_EMPREGO V ON  V.ID_VAGAS_EMPREGO = C.ID_VAGA
                            INNER JOIN TIPO_VAGA T ON T.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                            INNER JOIN STATUS SV ON SV.IDSTATUS = C.ID_STATUS_CANDIDATO
                            ORDER BY '.$parametro.' ASC';
        $stmt = $this->conexao->query($sqlCandidatos);
        $stmt->execute();
        return $this->filterCandidato($stmt);
    }

    public function filterCandidato($stmt) {

        $listarCandidato = $stmt->fetchAll(PDO::FETCH_OBJ);

        $situacao = '';
        foreach ($listarCandidato as $dados) {
            switch ($dados->ID_STATUS) {
                case 1:
                    $situacao = '<font color="#000099">EM ANÁLISE</font>';
                    break;
                case 2:
                    $situacao = '<font color="red">INTERROMPIDO</font>';
                    break;
                case 3:
                    $situacao = '<font color="green">AGUARDANDO CANDIDATO</font>';
                    break;
                default :
            }

            $inf[] = array
                (
                "NOME" => $dados->NOME,
                "CHAPA" => $dados->CHAPA,
                "EMAIL" => $dados->EMAIL,
                "SETOR" => $dados->SETOR,
                "VAGA" => $dados->VAGA,
                "STATUS" => $situacao,
                "HASH" => $dados->HASH
            );
        }
        return $inf;
    }

}
