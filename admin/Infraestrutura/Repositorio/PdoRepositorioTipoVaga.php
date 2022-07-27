<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioTipoVaga;
use Rubens\Comercial\Model\tipoVaga;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTipoVaga
 *
 * @author Rubens
 */
class PdoRepositorioTipoVaga implements RepositorioTipoVaga {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createTipoVaga(tipoVaga $tipoVaga): bool {
        $insertTipoVaga = 'INSERT INTO TIPO_VAGA (DESC_TIPO_VAGA) VALUES (:descTipovaga);';
        $stmt = $this->conexao->prepare($insertTipoVaga);
        $stmt->bindValue(':descTipovaga', $tipoVaga->getDesc_tipo_vaga(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        return $success;
    }

    public function salvarTipoVaga(tipoVaga $tipoVaga): bool {
        if ($tipoVaga->getId_tipo_vaga() == null) {
            return $this->createTipoVaga($tipoVaga);
        }
        return $this->updateTipoVaga($tipoVaga);
    }

    public function todosTiposVaga(): array {
        $sqlTipoVaga = 'SELECT * FROM TIPO_VAGA';
        $stmt = $this->conexao->query($sqlTipoVaga);
        $stmt->execute();

        return $this->hidrataTiposVaga($stmt);
    }

    public function updateTipoVaga(tipoVaga $tipoVaga): bool {
        $updateTipoVaga = 'UPDATE TIPO_VAGA SET DESC_TIPO_VAGA =:desVaga WHERE ID_TIPO_VAGA =:hash_id;';
        $stmt = $this->conexao->prepare($updateTipoVaga);
        $stmt->bindValue(':desVaga', $tipoVaga->getDesc_tipo_vaga(), \PDO::PARAM_STR);
        $stmt->bindValue(':hash_id', $tipoVaga->getId_tipo_vaga(), \PDO::PARAM_INT);
        $success = $stmt->execute();
        return $success;
    }

    public function hidrataTiposVaga(\PDOStatement $stmt) {

        $listarTipoVaga = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listarTipoVaga as $dadosTipoVaga) {
            $inf[] = array(
                "DESC_VAGA" => $dadosTipoVaga->DESC_TIPO_VAGA,
                "HASH_ID" => $dadosTipoVaga->ID_TIPO_VAGA);
        }

        return $inf;
    }

    public function readTipoVaga(tipoVaga $tipoVaga): array {

        $sqlTipoVaga = 'SELECT * FROM TIPO_VAGA WHERE DESC_TIPO_VAGA LIKE "%' . $tipoVaga->getDesc_tipo_vaga() . '%"';
        $stmt = $this->conexao->query($sqlTipoVaga);
        $stmt->execute();

        return $this->hidrataTiposVaga($stmt);
    }

}
