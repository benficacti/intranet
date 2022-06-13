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
        
    }

    public function salvarTipoVaga(tipoVaga $tipoVaga): bool {
        
    }

    public function todosTiposVaga(): array {
        $sqlTipoVaga = 'SELECT * FROM TIPO_VAGA';
        $stmt = $this->conexao->query($sqlTipoVaga);
        $stmt->execute();

        return $this->hidrataTiposVaga($stmt);
    }

    public function updateTipoVaga(tipoVaga $tipoVaga): bool {
        
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

        $sqlTipoVaga = 'SELECT * FROM TIPO_VAGA WHERE DESC_TIPO_VAGA LIKE "%'.$tipoVaga->getDesc_tipo_vaga().'%"';
        $stmt = $this->conexao->query($sqlTipoVaga);
        $stmt->execute();

        return $this->hidrataTiposVaga($stmt);
    }

}
