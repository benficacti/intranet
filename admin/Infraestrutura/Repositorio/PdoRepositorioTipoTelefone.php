<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioTipoTelefone;
use Rubens\Comercial\Model\tipoTelefone;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTipoTelefone
 *
 * @author Rubens
 */
class PdoRepositorioTipoTelefone implements RepositorioTipoTelefone {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createTipoTelefone(tipoTelefone $tipoTelefone): bool {
        
    }

    public function deleteTipoTelefone(tipoTelefone $tipoTelefone): bool {
        
    }

    public function salvarTipoTelefone(tipoTelefone $tipoTelefone): bool {
        
    }

    public function todosTiposTelefone(): array {
        $sqlTipoTelefone = 'SELECT * FROM tipo_telefone';
        $stmt = $this->conexao->query($sqlTipoTelefone);
        return $this->hidatraTipoTelefone($stmt);
    }

    public function updateTipoTelefone(tipoTelefone $tipoTelefone): bool {
        
    }

    public function hidatraTipoTelefone(\PDOStatement $stmt): array {
        $listaTipoTelefone = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaTipoTelefone as $dadosListaTipo) {
            $inf[] = array
                (
                "ID_TIPO_TELEFONE" => $dadosListaTipo->ID_TIPO_TELEFONE,
                "TIPO_TELEFONE" => $dadosListaTipo->DESCRICAO
            );
        }

        return ($inf);
    }

}
