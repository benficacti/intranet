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
                        v.ID_VAGAS_EMPREGO HASH_ID_VAGAS,
                        im.URL_IMAGEM URL
                        FROM COMUNICACAO C 
                        INNER JOIN VAGAS_EMPREGO V ON v.ID_VAGAS_EMPREGO = c.ID_VAGAS_EMPREGO
                        INNER JOIN TIPO_VAGA T ON t.ID_TIPO_VAGA = c.ID_TIPO_COM
                        INNER JOIN SETOR S ON S.ID_SETOR = V.ID_SETOR
                        INNER JOIN PERIODO_TRABALHO P ON P.ID_PERIODO_TRABALHO =  V.ID_PERIODO_TRABALHO
                        INNER JOIN TIPO_VAGA TV ON TV.ID_TIPO_VAGA = V.ID_TIPO_VAGA
                        LEFT JOIN IMAGEM IM ON IM.ID_IMAGEM = v.URL_ANEXO
                        INNER JOIN EMPRESA E ON E.ID_EMPRESA = C.ID_EMPRESA_COM
                        WHERE c.PRIVATE_KEY_COMUNICACAO =:hash_id';
        $stmt = $this->conexao->prepare($sqlConsulta);
        $stmt->bindValue(':hash_id', $comunicacao->getPrivate_key_comunicacao(), \PDO::PARAM_STR);
        $stmt->execute();
        return $this->hidrataComunicacaoVaga($stmt);
    }

    public function salvar(comunicacao $comunicacao): array {

        if ($comunicacao->getId_comunicacao() === null) {
            return $this->createComunicacao($comunicacao);
        }
        return $this->updateComunicacao($comunicacao);
    }

    public function createComunicacao(comunicacao $comunicacao): array {

        try {
            $success = false;
            $ind = 1;
            $cod_increment = $this->cod_increment($ind);

            if ($cod_increment < 1 or $cod_increment == null) {
                $cod_increment = 1;
            } else {
                $cod_increment = $cod_increment + 1;
            }

            if ($comunicacao->getId_vagas_emprego() !== null) {
                $sqlInsert = "INSERT INTO comunicacao (TITULO_COM, MENSAGEM_COM, HORA_CRIACAO_COM,"
                        . "DATA_CRIACAO_COM, HORA_EXPIRAR_COM, DATA_EXPIRAR_COM, ID_LOGIN_COM, "
                        . "ID_TIPO_COM, ID_NIVEL_PRIORIDADE_COM, ID_URL_TOP_COM, ID_URL_BOTTOM_COM, "
                        . "ID_ANEXO_COM, ID_EMPRESA_COM, ID_STATUS_COM, ID_VAGAS_EMPREGO, CODIGO_COM, PRIVATE_KEY_COMUNICACAO)"
                        . " VALUES (:titulo, :mensagem, CURTIME(), CURDATE(), :HORA_EXPIRAR_COM, :DATA_EXPIRAR_COM,"
                        . " :ID_LOGIN_COM, :ID_TIPO_COM, :ID_NIVEL_PRIORIDADE_COM, :ID_URL_TOP_COM, :ID_URL_BOTTOM_COM,"
                        . " :ID_ANEXO_COM, :ID_EMPRESA_COM, :ID_STATUS_COM, :ID_VAGAS_EMPREGO, :CODIGO_COM, :PRIVATE_KEY_COMUNICACAO);";
                $stmt = $this->conexao->prepare($sqlInsert);
                $stmt->bindValue(':titulo', $comunicacao->getTitulo_com(), PDO::PARAM_STR);
                $stmt->bindValue(':mensagem', $comunicacao->getMensagem_com(), PDO::PARAM_STR);
                $stmt->bindValue(':HORA_EXPIRAR_COM', $comunicacao->getHora_expirar_com(), PDO::PARAM_STR);
                $stmt->bindValue(':DATA_EXPIRAR_COM', $comunicacao->getData_expirar_com(), PDO::PARAM_STR);
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
            } else {
                $sqlInsert = "INSERT INTO comunicacao (TITULO_COM, MENSAGEM_COM, HORA_CRIACAO_COM,"
                        . "DATA_CRIACAO_COM, HORA_EXPIRAR_COM, DATA_EXPIRAR_COM, ID_LOGIN_COM, "
                        . "ID_TIPO_COM, ID_NIVEL_PRIORIDADE_COM, ID_URL_TOP_COM, ID_URL_BOTTOM_COM, "
                        . "ID_ANEXO_COM, ID_EMPRESA_COM, ID_STATUS_COM, ID_VAGAS_EMPREGO, CODIGO_COM, PRIVATE_KEY_COMUNICACAO)"
                        . " VALUES (:titulo, :mensagem, CURTIME(), CURDATE(), :HORA_EXPIRAR_COM, :DATA_EXPIRAR_COM,"
                        . " :ID_LOGIN_COM, :ID_TIPO_COM, :ID_NIVEL_PRIORIDADE_COM, :ID_URL_TOP_COM, :ID_URL_BOTTOM_COM,"
                        . " :ID_ANEXO_COM, :ID_EMPRESA_COM, :ID_STATUS_COM, :ID_VAGAS_EMPREGO, :CODIGO_COM, :PRIVATE_KEY_COMUNICACAO);";
                $stmt = $this->conexao->prepare($sqlInsert);
                $stmt->bindValue(':titulo', $comunicacao->getTitulo_com(), PDO::PARAM_STR);
                $stmt->bindValue(':mensagem', $comunicacao->getMensagem_com(), PDO::PARAM_STR);
                $stmt->bindValue(':HORA_EXPIRAR_COM', $comunicacao->getHora_expirar_com(), PDO::PARAM_STR);
                $stmt->bindValue(':DATA_EXPIRAR_COM', $comunicacao->getData_expirar_com(), PDO::PARAM_STR);
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
            }


            $comunicacao->setId_comunicacao($this->conexao->lastInsertId());
            //CRIAR HASH AUTOMATICAMENTE
            $table = 'COMUNICACAO';
            $field_set = 'PRIVATE_KEY_COMUNICACAO';
            $field_eguals = 'ID_COMUNICACAO';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);

            $inf[] = array(
                "RESULT" => "TRUE",
                "HASH_ID" => $this->conexao->lastInsertId());
            return $inf;
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

    public function updateComunicacao(comunicacao $comunicacao): array {
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

        $inf[] = array(
            'RESULT' => 'TRUE'
        );
        return $inf;
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
                "HASH_ID_VAGAS" => $dadosComunicao->HASH_ID_VAGAS,
                "URL" => $dadosComunicao->URL
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

    public function alertasComunicacoes(): array {

        $sqlAlertaComunicacao = 'SELECT 
                                    C.MENSAGEM_COM MSN,
                                    C.TITULO_COM ASSUNTO,
                                    S.DESC_SETOR SETOR,
                                    C.DATA_CRIACAO_COM D_CRIADO,
                                    C.HORA_CRIACAO_COM H_CRIADO,
                                    C.ID_STATUS_COM STATUS_C,
                                    C.CODIGO_COM COD,
                                    C.ID_TIPO_COM TIPO_COMUNICACAO,
                                    C.ID_COMUNICACAO HASH_ID,
                                    C.PRIVATE_KEY_COMUNICACAO HASH_COMUNICACAO,
                                    a.URL_ANEXO URL_ARQUIVO
                                    FROM COMUNICACAO C 
                                    INNER JOIN LOGIN L ON L.ID_LOGIN = C.ID_LOGIN_COM
                                    INNER JOIN USUARIO U ON U.id_usuario = L.ID_USUARIO_LOGIN
                                    INNER JOIN SETOR S ON S.ID_SETOR = U.id_setor_usuario
                                    LEFT JOIN ANEXO A ON A.ID_ANEXO = C.ID_ANEXO_COM
                                    WHERE C.ID_STATUS_COM = 1 AND MENSAGEM_COM IS NOT NULL';
        $stmt = $this->conexao->query($sqlAlertaComunicacao);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $this->hidrataAlertaComunicacao($stmt);
        } else {
            $inf[] = array('RESULT' => 'FALSE');
            return $inf;
        }
    }

    public function hidrataAlertaComunicacao(\PDOStatement $stmt) {
        $listarAlertaComunicacao = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listarAlertaComunicacao as $dadosAletaComunicacao) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "ASSUNTO" => $dadosAletaComunicacao->ASSUNTO,
                "MSN" => $dadosAletaComunicacao->MSN, //substr($dadosAletaComunicacao->MSN, 0, 64),
                "SETOR" => strtolower($dadosAletaComunicacao->SETOR),
                "D_CRIADO" => $dadosAletaComunicacao->D_CRIADO,
                "H_CRIADO" => $dadosAletaComunicacao->H_CRIADO,
                "STATUS_C" => $dadosAletaComunicacao->STATUS_C,
                "TIPO_COMUNICACAO" => $dadosAletaComunicacao->TIPO_COMUNICACAO,
                "COD" => $dadosAletaComunicacao->COD,
                "HASH_ID" => $dadosAletaComunicacao->HASH_ID,
                "HASH_COMUNICACAO" => $dadosAletaComunicacao->HASH_COMUNICACAO,
                "URL_ARQUIVO" => $dadosAletaComunicacao->URL_ARQUIVO,
            );
        }
        return $inf;
    }

    public function updateComunicacaoAnexo(comunicacao $comunicacao): bool {

        $slqUpdate = "UPDATE comunicacao SET ID_ANEXO_COM = :hashId WHERE ID_COMUNICACAO = :idCm;";
        $stmt = $this->conexao->prepare($slqUpdate);
        $stmt->bindValue(':idCm', $comunicacao->getId_comunicacao(), \PDO::PARAM_INT);
        $stmt->bindValue(':hashId', $comunicacao->getId_anexo_com(), \PDO::PARAM_INT);

        return $stmt->execute();
    }

}
