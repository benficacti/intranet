<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\detalheSolicitacao;
use Rubens\Comercial\Dominio\Repositorio\InRepositorioDetalherSolicitacao;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioDetalheSolicitacao
 *
 * @author Rubens
 */
class PdoRepositorioDetalheSolicitacao implements InRepositorioDetalherSolicitacao {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array {
        $insertDetalheSolicitacao = 'INSERT INTO DETALHE_SOLICITACAO (DETALHE, PRIVATE_KEY_DETALHE_SOLICITACAO)VALUES(:det, :hashKey);';
        $stmt = $this->conexao->prepare($insertDetalheSolicitacao);
        $stmt->bindValue(':det', $detalheSolicitacao->getDetalhe(), PDO::PARAM_STR);
        $stmt->bindValue(':hashKey', $detalheSolicitacao->getPrivate_key_detalhe_solicitacao(), PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $detalheSolicitacao->setId_detalhe_solicitacao($this->conexao->lastInsertId());
            $idSolic = $this->conexao->lastInsertId();

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'DETALHE_SOLICITACAO';
            $field_set = 'PRIVATE_KEY_DETALHE_SOLICITACAO';
            $field_eguals = 'ID_DETALHE_SOLICITACAO';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);

            $inf[] = array(
                'ID_SOL' => $idSolic
            );
            return $inf;
        }
    }

    public function deleteDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): bool {
        
    }

    public function readDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array {
        
    }

    public function readIdDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array {
        
    }

    public function salvarDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array {

        if ($detalheSolicitacao->getId_detalhe_solicitacao() == null) {
            return $this->createDetalheSolicitacao($detalheSolicitacao);
        }
    }

    public function updateDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): bool {
        
    }

}
