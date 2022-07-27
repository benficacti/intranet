<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\InRepositorioMaquina;
use Rubens\Comercial\Model\maquina;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioMaquina
 *
 * @author Rubens
 */
class PdoRepositorioMaquina implements InRepositorioMaquina {

    //put your code here
    private PDO $conexao;

    function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function deleteMaquina(maquina $maquina): bool {
        
    }

    public function readMaquina(maquina $maquina): array {
        $sqlMaquina = 'SELECT * FROM MAQUINA M WHERE M.DESC_MAQUINA =:descMaq;';
        $stmt = $this->conexao->prepare($sqlMaquina);
        $stmt->bindValue(':descMaq', $maquina->getDesc_maquina(), \PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $this->hidrataReadMaquina($stmt);
        } else {
            $inf[] = array(
                "RESULT" => "FALSE",
            );
            return $inf;
        }
    }

    public function salvaMaquina(maquina $maquina): bool {

        if ($maquina->getId_maquina() == null) {
            return $this->createMaquina($maquina);
        }
    }

    public function todosMaquina(): array {
        
    }

    public function updateMaquina(maquina $maquina): bool {
        
    }

    public function hidrataReadMaquina(\PDOStatement $stmt) {
        $listarMaquina = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach ($listarMaquina as $dadosMaquina) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "HASH_ID" => $dadosMaquina->ID_MAQUINA,
                "DESC_MAQUINA" => $dadosMaquina->DESC_MAQUINA,
                "HASH_MAQUINA" => $dadosMaquina->PRIVATE_KEY_MAQUINA
            );
        }
        return $inf;
    }

    public function createMaquina(maquina $maquina): bool {

        $insertMaquina = 'INSERT INTO MAQUINA (DESC_MAQUINA, PRIVATE_KEY_MAQUINA)'
                . 'VALUES(:descMaq, :keyMaq);';
        $stmt = $this->conexao->prepare($insertMaquina);
        $stmt->bindValue(':descMaq', $maquina->getDesc_maquina(), \PDO::PARAM_STR);
        $stmt->bindValue(':keyMaq', $maquina->getPrivate_key_maquina(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {

            $hash_id = $maquina->setId_maquina($this->conexao->lastInsertId());

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'MAQUINA';
            $field_set = 'PRIVATE_KEY_MAQUINA';
            $field_eguals = 'ID_MAQUINA';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $success;
    }

}
