<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\solicitacaoMarketing;
use Rubens\Comercial\Dominio\Repositorio\InRepositorioSolicitacaoMarketing;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioSolicitacaoMarketing
 *
 * @author Rubens
 */
class PdoRepositorioSolicitacaoMarketing implements InRepositorioSolicitacaoMarketing {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createSolicitacaoMk(solicitacaoMarketing $solitacaoMk): array {
        
    }

    public function deleteSolicitacaoMk(solicitacaoMarketing $solitacaoMk): bool {
        
    }

    public function readIdSolicitacaoMk(solicitacaoMarketing $solicitacaoMk): array {
        
    }

    public function salvarSolicitacaoMk(solicitacaoMarketing $solitacaoMk): array {


        $arr = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789@#$!');
        shuffle($arr);
        $arr = array_slice($arr, 0, 8);
        $TOKEN = implode('', $arr);
        $_SESSION['token_solicitante'] = $TOKEN;
        $STATUS = 1; // EM ANALISE

        $insertSolicitacaoMk = 'INSERT INTO SOLICITACAO_MARKETING (NOME_SOLICITANTE,'
                . 'ID_TELEFONE_SOLICITACAO, ID_EMAIL_SOLICITACAO,'
                . 'ID_DETALHE_SOLICITACAO, ID_TIPO_SOLICITACAO, ID_SETOR_SOLICITANTE, ID_STATUS_SOLICITACAO, CODIGO_SOLICITACAO, PRIVATE_KEY_SOLICITACAO) '
                . 'VALUES(:nSolit, :idTel, :idEmail, :idDet, :idTip, :idSet, :idStat,  :cod, :hashKey);';

        $stmt = $this->conexao->prepare($insertSolicitacaoMk);
        $stmt->bindValue(':nSolit', $solitacaoMk->getNome_solicitante(), PDO::PARAM_STR);
        $stmt->bindValue(':idTel', $solitacaoMk->getId_telefone_solicitacao(), PDO::PARAM_INT);
        $stmt->bindValue(':idEmail', $solitacaoMk->getId_email_solicitacao(), PDO::PARAM_INT);
        $stmt->bindValue(':idDet', $solitacaoMk->getId_detalhe_solicitacao(), PDO::PARAM_INT);
        $stmt->bindValue(':idTip', $solitacaoMk->getId_tipo_solicitacao(), PDO::PARAM_INT);
        $stmt->bindValue(':idSet', $solitacaoMk->getId_setor_solicitante(), PDO::PARAM_INT);
        $stmt->bindValue(':idStat', $STATUS, PDO::PARAM_INT);
        $stmt->bindValue(':cod', $TOKEN, PDO::PARAM_STR);
        $stmt->bindValue(':hashKey', $solitacaoMk->getPrivate_key_solicitacao(), PDO::PARAM_STR);

        $success = $stmt->execute();

        if ($success) {
            $solitacaoMk->setId_solicitacao_marketing($this->conexao->lastInsertId());

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'SOLICITACAO_MARKETING';
            $field_set = 'PRIVATE_KEY_SOLICITACAO';
            $field_eguals = 'ID_SOLICITACAO_MARKETING';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);

            $inf[] = array(
                "RESULT" => "TRUE",
                "ID_SOL" => $this->conexao->lastInsertId(),
                "TOKEN" => $TOKEN,
                "EMAIL" => $_SESSION['email_solicitante'],
            );

            return $inf;
        }
    }

    public function todosSolicitacaoMk(): array {
        
    }

    public function updateSolicitacaoMk(solicitacaoMarketing $solitacaoMk): bool {
        $update = 'UPDATE solicitacao_marketing SET ID_ANEXO_ENV_SOLICITANTE = :idAnx WHERE ID_SOLICITACAO_MARKETING =:idSol ;';
        $stmt = $this->conexao->prepare($update);
        $stmt->bindValue(':idAnx', $solitacaoMk->getId_anexo_env_solicitante(), PDO::PARAM_INT);
        $stmt->bindValue(':idSol', $solitacaoMk->getId_solicitacao_marketing(), PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            return $success;
        }
    }

    public function readSolicitacaoMk(solicitacaoMarketing $solicitacaoMk): array {
        $sqlSolicitacao = 'SELECT 
                            s.NOME_SOLICITANTE NOME,
                            s.CODIGO_SOLICITACAO TOKEN,
                            s.ID_SOLICITACAO_MARKETING HASH_ID,
                            (SELECT t.DESC_TIPO_SOLICITACAO FROM tipo_solicitacao t WHERE t.ID_TIPO_SOLICITACAO = 									s.ID_TIPO_SOLICITACAO LIMIT 1
                            )TIPO,
                            d.DETALHE DETAIL,
                            s.ID_STATUS_SOLICITACAO STATUS_SOLICITACAO,
                            tf.NUM_TELEFONE N_TELEFONE,
                            e.ENDERECO END_EMAIL,
                            a.ID_ANEXO ANEXO_SOLIC
                            FROM solicitacao_marketing s 
                            INNER JOIN DETALHE_SOLICITACAO d ON d.ID_DETALHE_SOLICITACAO = s.ID_DETALHE_SOLICITACAO
                            LEFT JOIN telefone tf ON tf.ID_TELEFONE = s.ID_TELEFONE_SOLICITACAO
                            LEFT JOIN email e ON e.ID_EMAIL = s.ID_EMAIL_SOLICITACAO
                            LEFT JOIN anexo a ON a.ID_ANEXO = s.ID_ANEXO_ENV_SOLICITANTE
                            WHERE s.CODIGO_SOLICITACAO =:token';
        $stmt = $this->conexao->prepare($sqlSolicitacao);
        $stmt->bindValue(':token', $solicitacaoMk->getCodigo_solicitacao(), PDO::PARAM_STR);
        $stmt->execute();

        return $this->hidrataSolicitacao($stmt);
    }

    public function hidrataSolicitacao(\PDOStatement $stmt) {
        $listarSolicitacao = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listarSolicitacao as $dadosSolicitacao) {
            $inf[] = array(
                "NOME" => $dadosSolicitacao->NOME,
                "TOKEN" => $dadosSolicitacao->TOKEN,
                "HASH_ID" => $dadosSolicitacao->HASH_ID,
                "TIPO" => $dadosSolicitacao->TIPO,
                "DETALHE" => $dadosSolicitacao->DETAIL,
                "STATUS_SOLICITACAO" => $dadosSolicitacao->STATUS_SOLICITACAO,
                "N_TELEFONE" => $dadosSolicitacao->N_TELEFONE,
                "END_EMAIL" => $dadosSolicitacao->END_EMAIL,
                "ANEXO_SOLIC" => $dadosSolicitacao->ANEXO_SOLIC,
            );
        }
        return $inf;
    }

    public function readAlertSolicitacaoMk(): array {

        $sqlSolicitacao = 'SELECT 
                            s.NOME_SOLICITANTE NOME,
                            s.CODIGO_SOLICITACAO TOKEN,
                            s.ID_SOLICITACAO_MARKETING HASH_ID,
                            (SELECT t.DESC_TIPO_SOLICITACAO FROM tipo_solicitacao t WHERE t.ID_TIPO_SOLICITACAO = 									s.ID_TIPO_SOLICITACAO LIMIT 1
                            )TIPO,
                            d.DETALHE DETAIL,
                            s.ID_STATUS_SOLICITACAO STATUS_SOLICITACAO,
                            tf.NUM_TELEFONE N_TELEFONE,
                            e.ENDERECO END_EMAIL,
                            a.ID_ANEXO ANEXO_SOLIC
                            FROM solicitacao_marketing s 
                            INNER JOIN DETALHE_SOLICITACAO d ON d.ID_DETALHE_SOLICITACAO = s.ID_DETALHE_SOLICITACAO
                            LEFT JOIN telefone tf ON tf.ID_TELEFONE = s.ID_TELEFONE_SOLICITACAO
                            LEFT JOIN email e ON e.ID_EMAIL = s.ID_EMAIL_SOLICITACAO
                            LEFT JOIN anexo a ON a.ID_ANEXO = s.ID_ANEXO_ENV_SOLICITANTE
                           WHERE s.ID_STATUS_SOLICITACAO  < 3';
        $stmt = $this->conexao->prepare($sqlSolicitacao);
        $stmt->execute();

        return $this->hidrataSolicitacao($stmt);
    }

    public function updateRetornoSolicitacaoMk(solicitacaoMarketing $solitacaoMk): bool {

        $update = 'UPDATE solicitacao_marketing SET ID_STATUS_SOLICITACAO = :idStat WHERE CODIGO_SOLICITACAO =:hash_cod ;';
        $stmt = $this->conexao->prepare($update);
        $stmt->bindValue(':idStat', $solitacaoMk->getId_status_solicitacao(), PDO::PARAM_INT);
        $stmt->bindValue(':hash_cod', $solitacaoMk->getCodigo_solicitacao(), PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            return $success;
        }
    }

}
