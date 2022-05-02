<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioAgenda;
use Rubens\Comercial\Model\agenda;
use Rubens\Comercial\Model\telefone;
use Rubens\Comercial\Model\nome_agenda;
use Rubens\Comercial\Model\email;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioAgenda
 *
 * @author Rubens
 */
class PdoRepositorioAgenda implements RepositorioAgenda {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createAgenda(agenda $agenda, telefone $telefone, nome_agenda $nome, email $email): bool {

        $id_telefone = $this->insertReturnIdTelefone($telefone);
        $id_nome_agenda = $this->insertReturnIdNome($nome);
        $id_email = $this->insertReturnIdEmail($email);
        $id_status_visualizacao = 1; //STATUS ATIVO
        $private_key_agenda = 'hgGghg2356Fgsa/gy%1v*';

        $sqlInsert = "INSERT INTO AGENDA (ID_TELEFONE, ID_NOME_AGENDA, ID_STATUS_VISUALIZACAO, ID_EMAIL, PRIVATE_KEY_AGENDA)"
                . "VALUES (:ID_TELEFONE, :ID_NOME_AGENDA, :ID_STATUS_VISUALIZACAO, :ID_EMAIL, :PRIVATE_KEY_AGENDA);";
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':ID_TELEFONE', $id_telefone, PDO::PARAM_INT);
        $stmt->bindValue(':ID_NOME_AGENDA', $id_nome_agenda, PDO::PARAM_INT);
        $stmt->bindValue(':ID_STATUS_VISUALIZACAO', $id_status_visualizacao, PDO::PARAM_INT);
        $stmt->bindValue(':ID_EMAIL', $id_email, PDO::PARAM_INT);
        $stmt->bindValue(':PRIVATE_KEY_AGENDA', $private_key_agenda, PDO::PARAM_STR);
        $sucesso = $stmt->execute();
        return $sucesso;
    }

    public function deleteAgenda(agenda $agenda): bool {
        
    }

    public function readAgenda(agenda $agenda): array {
        
    }

    public function salvarAgenda(
            agenda $agenda,
            telefone $telefone,
            nome_agenda $nome, email $email): bool {


        if ($agenda->getId_agenda() === null) {
            return $this->createAgenda($agenda, $telefone, $nome, $email);
        }
    }

    public function todosAgenda(agenda $agenda): array {
        
    }

    public function updateAgenda(agenda $agenda): bool {
        
    }

    public function insertReturnIdTelefone(telefone $telefone) {
        $sqlInsert = 'INSERT INTO TELEFONE (NUM_TELEFONE, ID_OPERADORA, ID_STATUS, ID_GARAGEM, ID_TIPO_TELEFONE, PRIVATE_KEY_TELEFONE) '
                . 'VALUES (:NUM_TELEFONE, :ID_OPERADORA, :ID_STATUS, :ID_GARAGEM, :ID_TIPO_TELEFONE, :PRIVATE_KEY_TELEFONE);';
        $stmt = $this->conexao->prepare($sqlInsert);

        $stmt->bindValue(':NUM_TELEFONE', $telefone->getNum_telefone(), PDO::PARAM_STR);
        $stmt->bindValue(":ID_OPERADORA", $telefone->getId_operadora(), PDO::PARAM_INT);
        $stmt->bindValue(":ID_STATUS", $telefone->getId_status(), PDO::PARAM_INT);
        $stmt->bindValue(":ID_GARAGEM", $telefone->getId_garagem(), PDO::PARAM_INT);
        $stmt->bindValue(":ID_TIPO_TELEFONE", $telefone->getId_tipo_telefone(), PDO::PARAM_INT);
        $stmt->bindValue(":PRIVATE_KEY_TELEFONE", $telefone->getPrivate_key_telefone(), PDO::PARAM_STR);
        $sucesso = $stmt->execute();
        if ($sucesso) {
            return $this->conexao->lastInsertId();
        }
    }

    public function insertReturnIdNome(nome_agenda $nome) {

        $sqlInsert = 'INSERT INTO NOME_AGENDA (NOME_AGENDA, PRIVATE_KEY_NOME_AGENDA) '
                . 'VALUES (:NOME_AGENDA, :PRIVATE_KEY_NOME_AGENDA);';
        $stmt = $this->conexao->prepare($sqlInsert);

        $stmt->bindValue(':NOME_AGENDA', $nome->getNome_agenda(), \PDO::PARAM_STR);
        $stmt->bindValue(':PRIVATE_KEY_NOME_AGENDA', $nome->getPrivate_key_nome_agenda(), \PDO::PARAM_STR);
        $sucesso = $stmt->execute();
        if ($sucesso) {
            return $this->conexao->lastInsertId();
        }
    }

    public function insertReturnIdEmail($email) {

        $sqlInsert = "INSERT INTO EMAIL (ENDERECO, PRIVATE_EMAIL) VALUES (:nome, :token);";
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':nome', $email->getEndereco(), PDO::PARAM_STR);
        $stmt->bindValue(':token', $email->getPrivate_email(), PDO::PARAM_STR);
        $sucesso = $stmt->execute();
        if ($sucesso) {
            return $this->conexao->lastInsertId();
        }
    }

}
