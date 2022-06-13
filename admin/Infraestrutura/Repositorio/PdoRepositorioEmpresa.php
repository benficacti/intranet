<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\empresa;
use Rubens\Comercial\Dominio\Repositorio\RepositorioEmpresa;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioEmpresa
 *
 * @author Rubens
 */
class PdoRepositorioEmpresa implements RepositorioEmpresa {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function readEmpresa(): array {
        
    }

    public function todosEmpresa(): array {
        $sqlEmpresa = 'SELECT * FROM EMPRESA';
        $stmt = $this->conexao->prepare($sqlEmpresa);
        $stmt->execute();

        return $this->hidrataEmpresa($stmt);
    }

    public function hidrataEmpresa(\PDOStatement $stmt) {
        $listaEmpresa = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaEmpresa as $dadosEmpresa) {
            $inf[] = array(
                "EMPRESA" => $dadosEmpresa->NOME_EMPRESA,
                "HASH_ID" => $dadosEmpresa->ID_EMPRESA
            );
        }
        return $inf;
    }

}
