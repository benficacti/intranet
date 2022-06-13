<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\periodo;
use Rubens\Comercial\Dominio\Repositorio\RepositorioPeriodo;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioPeriodo
 *
 * @author Rubens
 */
class PdoRepositorioPeriodo implements RepositorioPeriodo {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createPeriodo(periodo $periodo): bool {
        
    }

    public function salvarPeriodo(periodo $periodo): bool {
        
    }

    public function todosPeriodo(): array {
        $sqlPeriodo = 'SELECT * FROM PERIODO_TRABALHO';
        $stmt = $this->conexao->query($sqlPeriodo);
        $stmt->execute();
        return $this->listaPeriodo($stmt);
    }

    public function listaPeriodo(\PDOStatement $stmt) {
        $listaPeriodo = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaPeriodo as $dadosPeriodo) {
            $inf[] = array(
                "DESC_PERIODO" => $dadosPeriodo->DESC_PERIODO,
                "HASH_ID" => $dadosPeriodo->ID_PERIODO_TRABALHO
            );
        }
        return $inf;
    }

}
