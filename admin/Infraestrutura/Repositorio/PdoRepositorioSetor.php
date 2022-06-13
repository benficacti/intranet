<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\setor;
use Rubens\Comercial\Dominio\Repositorio\RepositorioSetor;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioSetor
 *
 * @author Rubens
 */
class PdoRepositorioSetor implements RepositorioSetor {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createSetor(setor $setor): bool {
        $sqlInsert = 'INSERT INTO SETOR (DESC_SETOR, PRIVATE_KEY_SETOR)VALUES(:desc_setor, :priv_key_setor);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':desc_setor', $setor->getDesc_setor(), \PDO::PARAM_STR);
        $stmt->bindValue(':priv_key_setor', $setor->getPrivate_key_setor(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'SETOR';
            $field_set = 'PRIVATE_KEY_SETOR';
            $field_eguals = 'ID_SETOR';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $success;
    }

    public function delete(setor $setor): bool {
        
    }

    public function readSetor(setor $setor): array {
        $sqlSetor = 'SELECT * FROM SETOR WHERE PRIVATE_KEY_SETOR = "' . $setor->getPrivate_key_setor() . '"';
        $stmt = $this->conexao->query($sqlSetor);
        $stmt->execute();
        return $this->buscaSetores($stmt);
    }

    public function salvarSetor(setor $setor): bool {
        if ($setor->getId_setor() === null) {
            return $this->createSetor($setor);
        }
        return $this->updateSetor($setor);
    }

    public function todosSetores(): array {
        $sqlQuery = 'SELECT * FROM SETOR';
        $stmt = $this->conexao->query($sqlQuery);
        return $this->listaSetores($stmt);
    }

    public function updateSetor(setor $setor): bool {
        $sqlUpdate = 'UPDATE SETOR SET DESC_SETOR = :desc_setor, PRIVATE_KEY_SETOR = :priv_key_setor;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':desc_setor', $setor->getDesc_setor(), \PDO::PARAM_STR);
        $stmt->bindValue(':priv_key_setor', $setor->getPrivate_key_setor(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function listaSetores(\PDOStatement $stmt): array {
        $listaDadosSetores = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach ($listaDadosSetores as $dadosSetores) {
            $inf [] = array(
                "SETOR" => $dadosSetores->DESC_SETOR,
                "HASH_PRIVATE_SETOR" => $dadosSetores->PRIVATE_KEY_SETOR,
                "HASH_ID" => $dadosSetores->ID_SETOR
            );
        }
        return $inf;
    }

    public function buscaSetores(\PDOStatement $stmt) {

        $listarSetores = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listarSetores as $dadosSetores) {
            $inf [] = array(
                "RESULT" => "TRUE",
                "SETOR" => $dadosSetores->DESC_SETOR,
                "HASH_PRIVATE_SETOR" => $dadosSetores->PRIVATE_KEY_SETOR,
                "HASH_ID" => $dadosSetores->ID_SETOR
            );
        }
        return $inf;
    }

    public function seachReadSetor(setor $setor): array {
        $sqlQuery = 'SELECT * FROM SETOR WHERE DESC_SETOR LIKE :hashSetor;';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':hashSetor', "%" . $setor->getDesc_setor() . "%", \PDO::PARAM_STR);
        $stmt->execute();
        return $this->listaSetores($stmt);
    }

}
