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
class PdoRepositorioComunicacao  implements RepositorioComunicacao {
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
            $setor = $this->listSetor($ind);
            $cod_increment = $this->cod_increment($ind);

            if ($cod_increment < 1 or $cod_increment == null) {
                $cod_increment = 1;
            } else {
                $cod_increment = $cod_increment + 1;
            }

            $cod_increment = $cod_increment . $setor;

            $sqlInsert = "INSERT INTO comunicacao (TITULO_COM, MENSAGEM_COM, HORA_CRIACAO_COM,"
                    . "DATA_CRIACAO_COM, HORA_EXPIRAR_COM, DATA_EXPIRAR_COM, ID_LOGIN_COM, "
                    . "ID_TIPO_COM, ID_NIVEL_PRIORIDADE_COM, ID_URL_TOP_COM, ID_URL_BOTTOM_COM, "
                    . "ID_ANEXO_COM, ID_EMPRESA_COM, ID_STATUS_COM, CODIGO_COM, PRIVATE_KEY_COMUNICACAO)"
                    . " VALUES (:titulo, :mensagem, :hora_cricao, :data_criacao, :hora_expirar, :data_expirar,"
                    . " :ID_LOGIN_COM, :ID_TIPO_COM, :ID_NIVEL_PRIORIDADE_COM, :ID_URL_TOP_COM, :ID_URL_BOTTOM_COM,"
                    . " :ID_ANEXO_COM, :ID_EMPRESA_COM, :ID_STATUS_COM, :CODIGO_COM, :PRIVATE_KEY_COMUNICACAO);";
            $stmt = $this->conexao->prepare($sqlInsert);
            $stmt->bindValue(':titulo', $comunicacao->getTitulo_com(), PDO::PARAM_STR);
            $stmt->bindValue(':mensagem', $comunicacao->getMensagem_com(), PDO::PARAM_STR);
            $stmt->bindValue(':hora_cricao', $comunicacao->getHora_criacao_com(), PDO::PARAM_STR);
            $stmt->bindValue(':data_criacao', $comunicacao->getData_criacao_com(), PDO::PARAM_STR);
            $stmt->bindValue(':hora_expirar', $comunicacao->getHora_expirar_com(), PDO::PARAM_STR);
            $stmt->bindValue(':data_expirar', $comunicacao->getData_expirar_com(), PDO::PARAM_STR);
            $stmt->bindValue(':ID_LOGIN_COM', $comunicacao->getId_login_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_TIPO_COM', $comunicacao->getId_tipo_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_NIVEL_PRIORIDADE_COM', $comunicacao->getId_nivel_prioridade_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_URL_TOP_COM', $comunicacao->getId_url_top_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_URL_BOTTOM_COM', $comunicacao->getId_url_bottom_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_EMPRESA_COM', $comunicacao->getId_empresa_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_ANEXO_COM', $comunicacao->getId_anexo_com(), PDO::PARAM_INT);
            $stmt->bindValue(':ID_STATUS_COM', $comunicacao->getId_status_com(), PDO::PARAM_INT);
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
                        c.TITULO_COM,
                        c.MENSAGEM_COM,
                        c.HORA_CRIACAO_COM,
                        c.DATA_CRIACAO_COM,
                        c.HORA_EXPIRAR_COM,
                        c.DATA_EXPIRAR_COM,
                        t.DESC_COMUNICACAO,
                        e.NOME_EMPRESA
                        FROM comunicacao C 
                        INNER JOIN login L ON L.ID_LOGIN = C.ID_LOGIN_COM
                        INNER JOIN tipo_comunicacao T ON T.ID_TIPO_COMUNICACAO = C.ID_TIPO_COM
                        INNER JOIN empresa E ON E.ID_EMPRESA = C.ID_EMPRESA_COM';
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
                "TITULO" => $dadosComunicao->TITULO_COM,
                "MENSAGEM" => $dadosComunicao->MENSAGEM_COM,
                "HORA_CRIACAO" => $dadosComunicao->HORA_CRIACAO_COM,
                "DATA_CRIACAO" => $dadosComunicao->DATA_CRIACAO_COM,
                "HORA_EXPIRAR" => $dadosComunicao->HORA_EXPIRAR_COM,
                "TIPO_COMUNICACAO" => $dadosComunicao->DESC_COMUNICACAO,
                "EMPRESA" => $dadosComunicao->NOME_EMPRESA
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
