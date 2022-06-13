<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioNomeAgenda;
use Rubens\Comercial\Model\nome_agenda;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioNomeAgenda
 *
 * @author Rubens
 */
class PdoRepositorioNomeAgenda implements RepositorioNomeAgenda {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createNomeAgenda(nome_agenda $nome_agenda): bool {
        $sqlQuery = 'INSERT INTO NOME_AGENDA (NOME_AGENDA, PRIVATE_KEY_NOME_AGENDA)VALUES(:nome_ag, :private_key_nome);';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':nome_ag', $nome_agenda->getNome_agenda(), \PDO::PARAM_STR);
        $stmt->bindValue(':private_key_nome', $nome_agenda->getPrivate_key_nome_agenda(), \PDO::PARAM_STR);
        $sucess = $stmt->execute();
        if ($sucess) {
            $nome_agenda->setId_nome_agenda($this->conexao->lastInsertId());
            
            //CRIAR HASH AUTOMATICAMENTE
            $table = 'NOME_AGENDA';
            $field_set = 'PRIVATE_KEY_NOME_AGENDA';
            $field_eguals = 'ID_NOME_AGENDA';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $sucess;
    }

    public function deleteNomeAgenda(nome_agenda $nome_agenda): bool {
        
    }

    public function readNomeAgenda(nome_agenda $nome_agenda): array {
        $sqlNomeAgenda = 'SELECT * FROM NOME_AGENDA WHERE NOME_AGENDA LIKE :NomeAgenda;';
        $stmt = $this->conexao->prepare($sqlNomeAgenda);
        $stmt->bindValue(':NomeAgenda',"%".$nome_agenda->getNome_agenda()."%", PDO:: PARAM_STR);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row < 1) {
            $inf[] = array(
                "RESULT" => "FALSE");
            return $inf;
        } else {
            return $this->hidrataNomeAgenda($stmt);
        }
    }

    public function salvarNomeAgenda(nome_agenda $nome_agenda): bool {
        if ($nome_agenda->getId_nome_agenda() === null) {
            return $this->createNomeAgenda($nome_agenda);
        }
        return $this->updateNomeAgenda($nome_agenda);
    }

    public function todosNomeAgenda(): array {
        $sqlTodosNomes = 'SELECT * FROM NOME_AGENDA';
        $stmt = $this->conexao->query($sqlTodosNomes);
        $stmt->execute();
        
        return $this->hidrataNomeAgenda($stmt);
    }

    public function updateNomeAgenda(nome_agenda $nome_agenda): bool {
        $sqlUpdate = 'UPDATE NOME_AGENDA SET NOME_AGENDA = :nome_ag, PRIVATE_KEY_NOME_AGENDA = :priv_key_agenda '
                . 'WHERE ID_NOME_AGENDA = :id;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':nome_ag', $nome_agenda->getNome_agenda(), \PDO::PARAM_STR);
        $stmt->bindValue(':priv_key_agenda', $nome_agenda->getPrivate_key_nome_agenda(), \PDO::PARAM_STR);
        $stmt->bindValue(':id', $nome_agenda->getId_nome_agenda(), \PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function hidrataNomeAgenda(\PDOStatement $stmt): array {
        $listaNomeagenda = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listaNomeagenda as $dados) {
            $inf [] = array(
                "RESULT" => "TRUE",
                "ID_NOME_AGENDA" => $dados->ID_NOME_AGENDA,
                "NOME_AGENDA" => $dados->NOME_AGENDA,
                "HASH_PRIVATE_NOME" => $dados->PRIVATE_KEY_NOME_AGENDA
            );
        }
        return $inf;
    }

}
