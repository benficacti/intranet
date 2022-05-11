<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\telefoneUsuario;
use Rubens\Comercial\Dominio\Repositorio\RepositorioTelefoneUsuario;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTelefoneUsuario
 *
 * @author Rubens
 */
class PdoRepositorioTelefoneUsuario implements RepositorioTelefoneUsuario {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createTelefoneUsuario(telefoneUsuario $telUsuario): bool {
        $sqlInsert = 'INSERT INTO TELEFONE_USUARIO (ID_TELEFONE, ID_STATUS_VISUALIZACAO, ID_NOME_AGENDA)'
                . 'VALUES(:id_tel, :id_status_vis, :id_nome);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':id_tel', $telUsuario->getId_telefone(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_status_vis', $telUsuario->getId_status_visualizacao(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_nome', $telUsuario->getId_nome_agenda(), \PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function readTelefoneUsuario(telefoneUsuario $telUsuario): array {

        $sqlTelefoneUsuario = 'SELECT * FROM TELEFONE_USUARIO WHERE ID_TELEFONE = "' . $telUsuario->getId_telefone() . '" AND ID_NOME_AGENDA ="' . $telUsuario->getId_nome_agenda() . '"';
        $stmt = $this->conexao->query($sqlTelefoneUsuario);
        $stmt->execute();

        return $this->hidrataReadTelefoneUsuario($stmt);
    }

    public function salvarTelefoneUsuario(telefoneUsuario $telUsuario): bool {
        if ($telUsuario->getId_telefone_usuario() === null) {
            return $this->createTelefoneUsuario($telUsuario);
        }
        return $this->updateTelefoneUsuario($telUsuario);
    }

    public function todosTelefoneUsuario(): array {
        
    }

    public function updateTelefoneUsuario(telefoneUsuario $telUsuario): bool {
        $sqlUpdate = 'UPDATE TELEFONE_USUARIO SET ID_STATUS_VISUALIZACAO = :ID_STAT,'
                . 'ID_NOME_AGENDA = :ID_NOME_AGENDA WHERE ID_TELEFONE = :ID_TEL;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':ID_STAT', $telUsuario->getId_status_visualizacao(), \PDO::PARAM_INT);
        $stmt->bindValue(':ID_NOME_AGENDA', $telUsuario->getId_nome_agenda(), \PDO::PARAM_INT);
        $stmt->bindValue(':ID_TEL', $telUsuario->getId_telefone(), \PDO::PARAM_INT);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function verificaTelefone(telefoneUsuario $telUsuario) {
        $status = 1;
        $sqlQuery = 'SELECT T.ID_TELEFONE_USUARIO TEL FROM TELEFONE_USUARIO T WHERE T.ID_TELEFONE = :id_tel '
                . 'AND ID_STATUS_VISUALIZACAO = :id_status;';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':id_tel', $telUsuario->getId_telefone(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_status', $status, \PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function hidrataReadTelefoneUsuario(\PDOStatement $stmt) {

        $listagemReadTelefoneUsuario = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listagemReadTelefoneUsuario as $dadosReadTelefone) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "ID_TELEFONE_USUARIO" => $dadosReadTelefone->ID_TELEFONE_USUARIO,
                "ID_TELEFONE" => $dadosReadTelefone->ID_TELEFONE,
                "ID_STATUS_VISUALIZACAO" => $dadosReadTelefone->ID_STATUS_VISUALIZACAO,
                "ID_NOME_AGENDA" => $dadosReadTelefone->ID_NOME_AGENDA
            );
        }

        return $inf;
    }

}
