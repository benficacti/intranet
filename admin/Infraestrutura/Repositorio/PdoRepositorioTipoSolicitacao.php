<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\tipoSolicitacao;
use Rubens\Comercial\Dominio\Repositorio\InRepositorioTipoSolicitacao;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTipoSolicitacao
 *
 * @author Rubens
 */
class PdoRepositorioTipoSolicitacao implements InRepositorioTipoSolicitacao {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): bool {
        
    }

    public function readTiposSolicitacao(): array {
        
    }

    public function salvarTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): bool {
        
    }

    public function todosTiposSolicitacao(): array {
        $sqlTipoSolicitacao = 'SELECT * FROM TIPO_SOLICITACAO';
        $stmt = $this->conexao->prepare($sqlTipoSolicitacao);
        $stmt->execute();

        return $this->hitrataTipoSolicitacao($stmt);
    }

    public function hitrataTipoSolicitacao(\PDOStatement $stmt) {
        $listarTipoSolicitacao = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($listarTipoSolicitacao as $dadosTipoSolicitacao) {
            $inf[] = array(
                "SOLICITACAO" => $dadosTipoSolicitacao->DESC_TIPO_SOLICITACAO,
                "HASH_SOLICITACAO" => $dadosTipoSolicitacao->PRIVATE_KEY_TIPO_SOLICITACAO,
                "HASH_ID" => $dadosTipoSolicitacao->ID_TIPO_SOLICITACAO
            );
        }
        return $inf;
    }

    public function readIdTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): array {
        $sqlTipoSolicitacao = 'SELECT * FROM tipo_solicitacao t WHERE t.PRIVATE_KEY_TIPO_SOLICITACAO = :hashKey;';
        $stmt = $this->conexao->prepare($sqlTipoSolicitacao);
        $stmt->bindValue(':hashKey', $tipoSolicitacao->getPrivate_key_tipo_solicitacao(), PDO::PARAM_STR);
        $stmt->execute();
        return $this->hitrataTipoSolicitacao($stmt);
    }

}
