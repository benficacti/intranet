<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioGeneratorHash;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;


/**
 * Description of PdoRepositorioGeneretor
 *
 * @author Rubens
 * TEM A FINALIDADE DE ATUALIZAR QUALQUER TABELA AUTOMATICAMENTE
 * FUNÇÃO => ATUALIZAR CHAVE HASH NAS TABELAS.
 */
class PdoRepositorioGeneretor implements RepositorioGeneratorHash {
   
    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }
        
    public function generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash): bool {
        
        $slqUpdate = "UPDATE ".$table." SET ".$field_set." = :hash WHERE ".$field_eguals." = :id;";
        $stmt = $this->conexao->prepare($slqUpdate);
        $stmt->bindValue(':hash', $keyHash, PDO::PARAM_STR);
        $stmt->bindValue(':id', $key, PDO::PARAM_INT);

        return $stmt->execute();
    }

}
