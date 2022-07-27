<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\InRepositorioAlertaMaquina;
use Rubens\Comercial\Model\alerta_maquina;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioAlertaMaquina
 *
 * @author Rubens
 */
class PdoRepositorioAlertaMaquina implements InRepositorioAlertaMaquina {

    //put your code here
    private PDO $conexao;

    function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createAlertaMaquina(alerta_maquina $alertaMaquina): bool {
        $insertAlertMaq = 'INSERT INTO ALERTA_MAQUINA '
                . '(ID_MAQUINA_ALERTA, ID_COMUNICACAO_ALERTA, '
                . 'HORA, DATA, PRIVATE_KEY_ALERTA_MAQUINA)'
                . 'VALUES(:ID_MAQUINA_ALERTA, :ID_COMUNICACAO_ALERTA,'
                . ' CURTIME(), CURDATE(), :PRIVATE_KEY_ALERTA_MAQUINA);';
        $stmt = $this->conexao->prepare($insertAlertMaq);
        $stmt->bindValue(':ID_MAQUINA_ALERTA', $alertaMaquina->getId_maquina_alerta(), PDO::PARAM_INT);
        $stmt->bindValue(':ID_COMUNICACAO_ALERTA', $alertaMaquina->getId_comunicacao_alerta(), PDO::PARAM_INT);
        $stmt->bindValue(':PRIVATE_KEY_ALERTA_MAQUINA', $alertaMaquina->getPrivate_key_alerta_maquina(), PDO::PARAM_STR);
        $success = $stmt->execute();

        if ($success) {
            $alertaMaquina->setId_alerta_maquina($this->conexao->lastInsertId());

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'ALERTA_MAQUINA';
            $field_set = 'PRIVATE_KEY_ALERTA_MAQUINA';
            $field_eguals = 'ID_ALERTA_MAQUINA';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $success;
    }

    public function deleteAlertaMaquina(alerta_maquina $alertaMaquina): bool {
        
    }

    public function readAlertaMaquina(alerta_maquina $alertaMaquina): array {
        $sqlReadAlertMaquina = 'SELECT * FROM ALERTA_MAQUINA A '
                . 'WHERE A.ID_MAQUINA_ALERTA =:idMaq and A.ID_COMUNICACAO_ALERTA =:idCom;';
        $stmt = $this->conexao->prepare($sqlReadAlertMaquina);
        $stmt->bindValue(':idMaq', $alertaMaquina->getId_maquina_alerta(), PDO::PARAM_INT);
        $stmt->bindValue(':idCom', $alertaMaquina->getId_comunicacao_alerta(), PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $inf[] = array(
                "RESULT" => "TRUE"
            );
            return $inf;
        } else {
            $repositorioAlertaMaquina = new PdoRepositorioAlertaMaquina(Persistencia\CriadorConexao::criarConexao());
            $repositorioAlertaMaquina->salvarAlertaMaquina($alertaMaquina);
            $inf[] = array(
                "RESULT" => "FALSE"
            );
            return $inf;
        }
    }

    public function salvarAlertaMaquina(alerta_maquina $alertaMaquina): bool {
        if($alertaMaquina->getId_alerta_maquina() == null){
            return $this->createAlertaMaquina($alertaMaquina);
        }
    }

    public function todosAlertaMaquina(): array {
        
    }

    public function updateAlertaMaquina(alerta_maquina $alertaMaquina): bool {
        
    }

}
