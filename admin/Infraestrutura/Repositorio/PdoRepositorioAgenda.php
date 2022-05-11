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

    public function createAgenda(agenda $agenda): bool {

        $sqlInsertAgenda = 'INSERT INTO AGENDA(ID_TELEFONE_USUARIO, ID_NOME_AGENDA,'
                . ' ID_STATUS_VISUALIZACAO, ID_EMAIL, PRIVATE_KEY_AGENDA) '
                . 'VALUES (:tel, :nome, :status, :email, :hash)';
        $stmt = $this->conexao->prepare($sqlInsertAgenda);
        $stmt->bindValue(':tel', $agenda->getId_telefone_usuario(), PDO::PARAM_INT);
        $stmt->bindValue(':nome', $agenda->getId_nome_agenda(), PDO::PARAM_INT);
        $stmt->bindValue(':status', $agenda->getId_status_visualizacao(), PDO::PARAM_INT);
        $stmt->bindValue(':email', $agenda->getId_email(), PDO::PARAM_INT);
        $stmt->bindValue(':hash', $agenda->getPrivate_key_agenda(), PDO::PARAM_STR);
        $sucesso = $stmt->execute();

        if ($sucesso) {
            $agenda->setId_agenda($this->conexao->lastInsertId());
            
            //CRIAR HASH AUTOMATICAMENTE
            $table = 'AGENDA';
            $field_set = 'PRIVATE_KEY_AGENDA';
            $field_eguals = 'ID_AGENDA';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }

        return $sucesso;
    }

    public function deleteAgenda(agenda $agenda): bool {
        
    }

    public function readAgenda(agenda $agenda): array {
        
        $sqlReadAgenda = '
            SELECT 
                E.ENDERECO D_EMAIL,
                T.NUM_TELEFONE N_TELEFONE
                FROM AGENDA A 
                RIGHT JOIN TELEFONE_USUARIO TU ON TU.ID_TELEFONE_USUARIO = A.ID_TELEFONE_USUARIO
                INNER JOIN EMAIL E ON E.ID_EMAIL =  A.ID_EMAIL
                INNER JOIN TELEFONE T ON T.ID_TELEFONE = TU.ID_TELEFONE AND TU.ID_STATUS_VISUALIZACAO  = 1
                INNER JOIN NOME_AGENDA N ON N.ID_NOME_AGENDA = A.ID_NOME_AGENDA
                WHERE N.NOME_AGENDA = Jose';
        $stmt = $this->conexao->query($sqlReadAgenda);
        
    }

    public function salvarAgenda(agenda $agenda): bool {

        if ($agenda->getId_agenda() == null) {
            return $this->createAgenda($agenda);
        }

        return $this->updateAgenda($agenda);
    }

    public function todosAgenda(agenda $agenda): array {
        
    }

    public function updateAgenda(agenda $agenda): bool {
        
    }

}
