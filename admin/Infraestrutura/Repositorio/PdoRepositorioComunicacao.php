<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

//use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioGeneretor;
use Rubens\Comercial\Model\comunicacao;
use Rubens\Comercial\Dominio\Repositorio\RepositorioComunicacao;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioComunicacao
 *
 * @author Rubens
 */
class PdoRepositorioComunicacao implements RepositorioComunicacao {

    //put your code here


    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function deleteComunicacao(comunicacao $comunicacao): bool {

        $slqUpdate = "UPDATE comunicacao SET ID_STATUS_COM = :id WHERE ID_COMUNICACAO = :id;";
        $stmt = $this->conexao->prepare($slqUpdate);
        $stmt->bindValue(':id', $comunicacao->getId_comunicacao(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function readComunicaco(comunicacao $comunicacao): array {
        $sqlConsulta = 'SELECT 
                        c.ID_COMUNICACAO HASH_ID,
                        c.TITULO_COM TITULO,
                        TV.DESC_TIPO_VAGA VAGA,
                        P.DESC_PERIODO PERIODO,
                        S.DESC_SETOR SETOR,
                        E.NOME_EMPRESA EMPRESA,
                        c.HORA_CRIACAO_COM HORA_CRIACAO,
                        c.DATA_CRIACAO_COM DATA_CRIACAO,
                        c.HORA_EXPIRAR_COM HORA_EXPIRAR,
                        c.DATA_EXPIRAR_COM DATA_EXPIRAR,
                        c.PRIVATE_KEY_COMUNICACAO HASH_COMUNICACAO,
                        v.DETALHE DESCRICAO,
                        v.ID_VAGAS_EMPREGO HASH_ID_VAGAS
                        FROM COMUNICACAO C 
                        INNER JOIN VAGAS_EMPREGO V ON v.ID_VAGAS_EMPREGO = c.ID_VAGAS_EMPREGO
                        INNER JOIN TIPO_VAGA T ON t.ID_TIPO_VAGA = c.ID_TIPO_COM
                        INNER JOIN SETOR S ON S.ID_SETOR = V.ID_SETOR
                        INNER JOIN PERIODO_TRABALHO P ON P.ID_PERIODO_TRABALHO =  V.ID_PERIODO_TRABALHO
                        INNER JOIN TIPO_VAGA TV ON TV.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                        INNER JOIN EMPRESA E ON E.ID_EMPRESA = C.ID_EMPRESA_COM
                        WHERE c.PRIVATE_KEY_COMUNICACAO =:hash_id';
        $stmt = $this->conexao->prepare($sqlConsulta);
        $stmt->bindValue(':hash_id', $comunicacao->getPrivate_key_comunicacao(), \PDO::PARAM_STR);
        $stmt->execute();
        return $this->hidrataComunicacaoVaga($stmt);
    }

    public function salvar(comunicacao $comunicacao): bool {

        if ($comunicacao->getId_comunicacao() === null) {
            $this->createComunicacao($comunicacao);
        }
        return $this->updateComunicacao($comunicacao);
    }

    public function createComunicacao(comunicacao $comunicacao): bool {

        try {
            $ind = 1;
            $cod_increment = $this->cod_increment($ind);

            if ($cod_increment < 1 or $cod_increment == null) {
                $cod_increment = 1;
            } else {
                $cod_increment = $cod_increment + 1;
            }

            $sqlInsert = "INSERT INTO comunicacao (TITULO_COM, MENSAGEM_COM, HORA_CRIACAO_COM,"
                    . "DATA_CRIACAO_COM, HORA_EXPIRAR_COM, DATA_EXPIRAR_COM, ID_LOGIN_COM, "
                    . "ID_TIPO_COM, ID_NIVEL_PRIORIDADE_COM, ID_URL_TOP_COM, ID_URL_BOTTOM_COM, "
                    . "ID_ANEXO_COM, ID_EMPRESA_COM, ID_STATUS_COM, ID_VAGAS_EMPREGO, CODIGO_COM, PRIVATE_KEY_COMUNICACAO)"
                    . " VALUES (:titulo, :mensagem, CURTIME(), CURDATE(), CURTIME(), CURDATE(),"
                    . " :ID_LOGIN_COM, :ID_TIPO_COM, :ID_NIVEL_PRIORIDADE_COM, :ID_URL_TOP_COM, :ID_URL_BOTTOM_COM,"
                    . " :ID_ANEXO_COM, :ID_EMPRESA_COM, :ID_STATUS_COM, :ID_VAGAS_EMPREGO, :CODIGO_COM, :PRIVATE_KEY_COMUNICACAO);";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(':titulo', $comunicacao->getTitulo_com(), PDO::PARAM_STR);
            $stmt->bindValue(':mensagem', $comunicacao->getMensagem_com(), PDO::PARAM_STR);
            $stmt->bindValue(':ID_LOGIN_COM', $comunicacao->getId_login_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_TIPO_COM', $comunicacao->getId_tipo_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_NIVEL_PRIORIDADE_COM', $comunicacao->getId_nivel_prioridade_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_URL_TOP_COM', $comunicacao->getId_url_top_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_URL_BOTTOM_COM', $comunicacao->getId_url_bottom_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_EMPRESA_COM', $comunicacao->getId_empresa_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_ANEXO_COM', $comunicacao->getId_anexo_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_STATUS_COM', $comunicacao->getId_status_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_VAGAS_EMPREGO', $comunicacao->getId_vagas_emprego(), PDO::PARAM_INT);
            $stmt->bindValue(':CODIGO_COM', $cod_increment, PDO::PARAM_INT);
            $stmt->bindValue(':PRIVATE_KEY_COMUNICACAO', $comunicacao->getPrivate_key_comunicacao(), PDO::PARAM_STR);
            $success = $stmt->execute();

            if ($success) {

                //CRIAR HASH AUTOMATICAMENTE
                $table = 'COMUNICACAO';
                $field_set = 'PRIVATE_KEY_COMUNICACAO';
                $field_eguals = 'ID_COMUNICACAO';
                $key = $this->conexao->lastInsertId();
                $keyHash = password_hash($key, PASSWORD_BCRYPT);

                $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
                $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
            }

            return $success;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString() . ' Falha ao criar comunicacao';
        }
    }

    public function todasComunicacoes(): array {
        $sqlConsulta = 'SELECT 
                        c.ID_COMUNICACAO HASH_ID,
                        c.TITULO_COM TITULO,
                        TV.DESC_TIPO_VAGA VAGA,
                        P.DESC_PERIODO PERIODO,
                        S.DESC_SETOR SETOR,
                        E.NOME_EMPRESA EMPRESA,
                        c.HORA_CRIACAO_COM HORA_CRIACAO,
                        c.DATA_CRIACAO_COM DATA_CRIACAO,
                        c.HORA_EXPIRAR_COM HORA_EXPIRAR,
                        c.DATA_EXPIRAR_COM DATA_EXPIRAR,
                        c.PRIVATE_KEY_COMUNICACAO HASH,
                        v.DETALHE DESCRICAO
                        FROM COMUNICACAO C 
                        INNER JOIN VAGAS_EMPREGO V ON v.ID_VAGAS_EMPREGO = c.ID_VAGAS_EMPREGO
                        INNER JOIN TIPO_VAGA T ON t.ID_TIPO_VAGA = c.ID_TIPO_COM
                        INNER JOIN SETOR S ON S.ID_SETOR = V.ID_SETOR
                        INNER JOIN PERIODO_TRABALHO P ON P.ID_PERIODO_TRABALHO =  V.ID_PERIODO_TRABALHO
                        INNER JOIN TIPO_VAGA TV ON TV.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                        INNER JOIN EMPRESA E ON E.ID_EMPRESA = C.ID_EMPRESA_COM';
        $stmt = $this->conexao->query($sqlConsulta);
        return $this->hidrataComunicacao($stmt);
    }

    public function updateComunicacao(comunicacao $comunicacao): bool {
        $slqUpdate = "UPDATE comunicacao SET TITULO_COM = :tit, MENSAGEM_COM = :msn, HORA_CRIACAO_COM = :hor_cr,"
                . "DATA_CRIACAO_COM = :dat_cr, HORA_EXPIRAR_COM = :hor_exp, DATA_EXPIRAR_COM = :data_exp WHERE  CODIGO_COM = :cod AND PRIVATE_KEY_COMUNICACAO = :keyHash;";
        $stmt = $this->conexao->prepare($slqUpdate);
        $stmt->bindValue(':tit', $comunicacao->getTitulo_com(), PDO::PARAM_STR);
        $stmt->bindValue(':msn', $comunicacao->getMensagem_com(), PDO::PARAM_STR);
        $stmt->bindValue(':hor_cr', $comunicacao->getHora_criacao_com(), PDO::PARAM_STR);
        $stmt->bindValue(':dat_cr', $comunicacao->getData_criacao_com(), PDO::PARAM_STR);
        $stmt->bindValue(':hor_exp', $comunicacao->getHora_expirar_com(), PDO::PARAM_STR);
        $stmt->bindValue(':data_exp', $comunicacao->getData_expirar_com(), PDO::PARAM_STR);
        $stmt->bindValue(':cod', $comunicacao->getCodigo_comunicacao(), PDO::PARAM_INT);
        $stmt->bindValue(':keyHash', $comunicacao->getPrivate_key_comunicacao(), PDO::PARAM_STR);

        return $stmt->execute();
    }

    public function hidrataComunicacao(\PDOStatement $stmt): array {

        $listaDadosComunicacao = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaDadosComunicacao as $dadosComunicao) {
            $inf[] = array(
                "VAGA" => $dadosComunicao->VAGA,
                "PERIODO" => $dadosComunicao->PERIODO,
                "SETOR" => $dadosComunicao->SETOR,
                "EMPRESA" => $dadosComunicao->EMPRESA,
                "HASH" => $dadosComunicao->HASH,
                "HASH_ID" => $dadosComunicao->HASH_ID,
                "DESCRICAO" => $dadosComunicao->DESCRICAO
            );
        }
        return $inf;
    }
    
    public function hidrataComunicacaoVaga(\PDOStatement $stmt): array {

        $listaDadosComunicacao = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaDadosComunicacao as $dadosComunicao) {
            $inf[] = array(
                "VAGA" => $dadosComunicao->VAGA,
                "PERIODO" => $dadosComunicao->PERIODO,
                "SETOR" => $dadosComunicao->SETOR,
                "EMPRESA" => $dadosComunicao->EMPRESA,
                "DESCRICAO" => $dadosComunicao->DESCRICAO,
                "HASH_COMUNICACAO" => $dadosComunicao->HASH_COMUNICACAO,
                "HASH_ID" => $dadosComunicao->HASH_ID,
                "HASH_ID_VAGAS" => $dadosComunicao->HASH_ID_VAGAS
            );
        }
        return $inf;
    }

    public function cod_increment() {

        $sqlQuery = 'SELECT CODIGO_COM FROM COMUNICACAO  ORDER BY CODIGO_COM DESC LIMIT 1;';
        $stmt = $this->conexao->query($sqlQuery);
        $stmt->execute();
        $dataList = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($dataList as $dataHash) {
            return $dataHash->CODIGO_COM;
        }
    }

    public function listSetor($ind) {
        $sqlQuery = 'SELECT DESC_SETOR FROM SETOR WHERE ID_SETOR =:ids';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':ids', $ind);
        $stmt->execute();
        $dataList = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($dataList as $dataHash) {
            return $dataHash->DESC_SETOR;
        }
    }

}
