<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Infraestrutura\Persistencia;
use Rubens\Comercial\Model\operadora;
use Rubens\Comercial\Dominio\Repositorio\RepositorioOperadora;
use PDO;

/**
 * Description of PdoRepositorioOperadora
 *
 * @author Rubens
 */
class PdoRepositorioOperadora implements RepositorioOperadora {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createOperadora(operadora $operadora): bool {
        
    }

    public function deleteOperadora(operadora $operadora): bool {
        
    }

    public function readOperadora(operadora $operadora): array {
        
    }

    public function salvarOperadora(operadora $operadora): bool {
        
    }

    public function todasOperadoras(): array {
        $sqlQuery = "SELECT * FROM OPERADORA";
        $stmt = $this->conexao->query($sqlQuery);
        return $this->hidrataListaOperadora($stmt);
    }

    public function updateOperadora(operadora $operadora): bool {
        
    }

    public function hidrataListaOperadora(\PDOStatement $stmt): array {
        $listaOperadora = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listaOperadora as $dadosOperadoras) {

            $inf [] = array(
                "ID_OPERADORA" => $dadosOperadoras->ID_OPERADORA,
                "NOME" => $dadosOperadoras->NOME,
                "CNPJ" => $dadosOperadoras->CNPJ
            );
        }

        return $inf;
    }

    public function returnIdOperadora(operadora $operadora) {
        $sqlReturnIdOperadora = 'SELECT * FROM operadora o WHERE o.NOME = "' . $operadora->getNome() . '" ';
        $stmt = $this->conexao->prepare($sqlReturnIdOperadora);
        $stmt->execute();

        return $this->idOperadora($stmt);
    }

    public function idOperadora(\PDOStatement $stmt) {
        $listaIdOperadora = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($listaIdOperadora as $dadosListaIdOperadora) {
            return $dadosListaIdOperadora->ID_OPERADORA;
        }
    }

}
