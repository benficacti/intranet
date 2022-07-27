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
                . ' ID_STATUS_VISUALIZACAO, ID_EMAIL, ID_SETOR, PRIVATE_KEY_AGENDA) '
                . 'VALUES (:tel, :nome, :status, :email, :setor, :hash)';
        $stmt = $this->conexao->prepare($sqlInsertAgenda);
        $stmt->bindValue(':tel', $agenda->getId_telefone_usuario(), PDO::PARAM_INT);
        $stmt->bindValue(':nome', $agenda->getId_nome_agenda(), PDO::PARAM_INT);
        $stmt->bindValue(':status', $agenda->getId_status_visualizacao(), PDO::PARAM_INT);
        $stmt->bindValue(':email', $agenda->getId_email(), PDO::PARAM_INT);
        $stmt->bindValue(':setor', $agenda->getId_setor(), PDO::PARAM_INT);
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
                T.NUM_TELEFONE N_TELEFONE,
                (SELECT 
                         Ts.NUM_TELEFONE 
                         FROM telefone Ts 
                         WHERE Ts.ID_TELEFONE = TU.ID_TELEFONE_RAMAL
                 ) NUM_RAMAL,
                T.PRIVATE_KEY_TELEFONE HASH_PRIVATE_TELEFONE,
                S.DESC_SETOR D_SETOR,
                S.PRIVATE_KEY_SETOR HASH_PRIVATE_SETOR
                FROM AGENDA A 
                RIGHT JOIN TELEFONE_USUARIO TU ON TU.ID_TELEFONE_USUARIO = A.ID_TELEFONE_USUARIO
                LEFT JOIN EMAIL E ON E.ID_EMAIL =  A.ID_EMAIL
                INNER JOIN TELEFONE T ON T.ID_TELEFONE = TU.ID_TELEFONE AND TU.ID_STATUS_VISUALIZACAO  = 1
                INNER JOIN NOME_AGENDA N ON N.ID_NOME_AGENDA = A.ID_NOME_AGENDA
                LEFT JOIN SETOR S ON S.ID_SETOR = A.ID_SETOR
                WHERE N.ID_NOME_AGENDA =  :idNome ';
        $stmt = $this->conexao->prepare($sqlReadAgenda);
        $stmt->bindValue(':idNome', $agenda->getId_nome_agenda(), PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $this->histradaReadAgenda($stmt);
        } else {
            $inf[] = array("RESULT" => "FALSE");
            return $inf;
        }
    }

    public function salvarAgenda(agenda $agenda): bool {

        if ($agenda->getId_agenda() == null) {

            $verifica = $this->verificarAgenda($agenda);
            if ($verifica) {
                return $this->updateAgenda($agenda);
            }


            return $this->createAgenda($agenda);
        }
    }

    public function todosAgenda(): array {
        $sqlAgenda = 'SELECT 
                        N.NOME_AGENDA NOME_FUNC,
                        E.ENDERECO END_EMAIL,
                        T.NUM_TELEFONE NUM_TELEFONE,
                        (SELECT 
                         Ts.NUM_TELEFONE 
                         FROM telefone Ts 
                         WHERE Ts.ID_TELEFONE = TU.ID_TELEFONE_RAMAL
                        ) NUM_RAMAL,
                        s.DESC_SETOR D_SETOR
                        FROM AGENDA A 
                        INNER JOIN NOME_AGENDA N ON A.ID_NOME_AGENDA = N.ID_NOME_AGENDA
                        LEFT JOIN EMAIL E ON E.ID_EMAIL = A.ID_EMAIL
                        INNER JOIN TELEFONE_USUARIO TU ON TU.ID_TELEFONE_USUARIO =  A.ID_TELEFONE_USUARIO
                        LEFT JOIN TELEFONE T ON T.ID_TELEFONE =  TU.ID_TELEFONE
                        LEFT JOIN SETOR S ON S.ID_SETOR = A.ID_SETOR
                        WHERE A.ID_STATUS_VISUALIZACAO = 1';

        $stmt = $this->conexao->query($sqlAgenda);
        $stmt->execute();
        return $this->histradaTodosAgenda($stmt);
    }

    public function updateAgenda(agenda $agenda): bool {
        $id_email = '';
        if ($agenda->getId_email() == '') {
            $id_email = null;
        } else {
            $id_email = $agenda->getId_email();
        };
        $sqlAgenda = "UPDATE AGENDA SET ID_STATUS_VISUALIZACAO = '" . $agenda->getId_status_visualizacao() . "', ID_EMAIL = '" . $id_email . "' WHERE ID_NOME_AGENDA = '" . $agenda->getId_nome_agenda() . "';";
        $stmt = $this->conexao->prepare($sqlAgenda);
        $sucesso = $stmt->execute();

        return $sucesso;
    }

    public function histradaReadAgenda(\PDOStatement $stmt): array {
        $listaReadAgenda = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listaReadAgenda as $dados) {
            $inf [] = array(
                "RESULT" => "TRUE",
                "N_TELEFONE" => $dados->N_TELEFONE,
                "NUM_RAMAL" => $dados->NUM_RAMAL,
                "HASH_PRIVATE_TELEFONE" => $dados->HASH_PRIVATE_TELEFONE,
                "D_EMAIL" => $dados->D_EMAIL,
                "D_SETOR" => $dados->D_SETOR,
                "HASH_PRIVATE_SETOR" => $dados->HASH_PRIVATE_SETOR
            );
        }
        return $inf;
    }

    public function verificarAgenda(agenda $agenda) {


        $sqlQuery = 'SELECT A.ID_AGENDA AGEND FROM AGENDA A WHERE A.ID_TELEFONE_USUARIO = :id_tel_usuario and A.ID_NOME_AGENDA = :id_nome_agenda;';
        $stmt = $this->conexao->prepare($sqlQuery);
        $stmt->bindValue(':id_tel_usuario', $agenda->getId_telefone_usuario(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_nome_agenda', $agenda->getId_nome_agenda(), \PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function histradaTodosAgenda(\PDOStatement $stmt) {

        $listarTodosAgenda = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listarTodosAgenda as $dadosTodosAgenda) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "NOME_FUNC" => $dadosTodosAgenda->NOME_FUNC,
                "ENDER_EMAIL" => $dadosTodosAgenda->END_EMAIL,
                "NUM_TELEFONE" => $dadosTodosAgenda->NUM_TELEFONE,
                "NUM_RAMAL" => $dadosTodosAgenda->NUM_RAMAL,
                "NUM_RAMAL" => $dadosTodosAgenda->NUM_RAMAL,
                "D_SETOR" => $dadosTodosAgenda->D_SETOR
            );
        }
        return $inf;
    }

    public function readSearchAgenda($agenda): array {

        $sqlAgenda = 'SELECT 
                        N.NOME_AGENDA NOME_FUNC,
                        E.ENDERECO END_EMAIL,
                        T.NUM_TELEFONE NUM_TELEFONE,
                        (SELECT 
                         Ts.NUM_TELEFONE 
                         FROM telefone Ts 
                         WHERE Ts.ID_TELEFONE = TU.ID_TELEFONE_RAMAL
                        ) NUM_RAMAL,
                        s.DESC_SETOR D_SETOR
                        FROM AGENDA A 
                        INNER JOIN NOME_AGENDA N ON A.ID_NOME_AGENDA = N.ID_NOME_AGENDA
                        LEFT JOIN EMAIL E ON E.ID_EMAIL = A.ID_EMAIL
                        LEFT JOIN TELEFONE_USUARIO TU ON TU.ID_TELEFONE_USUARIO =  A.ID_TELEFONE_USUARIO
                        LEFT JOIN TELEFONE T ON T.ID_TELEFONE =  TU.ID_TELEFONE
                        LEFT JOIN SETOR S ON S.ID_SETOR = A.ID_SETOR
                        WHERE N.NOME_AGENDA LIKE "%' . $agenda . '%" '
                . 'OR E.ENDERECO LIKE "%' . $agenda . '%" '
                . 'OR T.NUM_TELEFONE LIKE "%' . $agenda . '%" '
                . 'OR S.DESC_SETOR LIKE "%' . $agenda . '%" '
                . 'AND A.ID_STATUS_VISUALIZACAO = 1';

        $stmt = $this->conexao->query($sqlAgenda);
        $stmt->execute();
        return $this->histradaTodosAgenda($stmt);
    }

}
