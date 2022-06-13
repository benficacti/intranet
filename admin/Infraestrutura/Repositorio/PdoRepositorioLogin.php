<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\login;
use Rubens\Comercial\Dominio\Repositorio\RepositorioLogin;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioLogin
 *
 * @author Rubens
 */
class PdoRepositorioLogin implements RepositorioLogin {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createLogin(login $login): bool {
        $sqlInsert = 'INSERT INTO LOGIN (NOME, SENHA, ID_USUARIO, ID_STATUS_LOGIN, PRIVATE_KEY_LOGIN)'
                . 'VALUES(:nome, :senha, :id_usu, :id_status_login, :priv_key_login);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':nome', $login->getNome_login(), \PDO::PARAM_STR);
        $stmt->bindValue(':senha', $login->getSenha_login(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_usu', $login->getId_login(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_status_login', $login->getId_status_login(), \PDO::PARAM_INT);
        $stmt->bindValue(':priv_key_login', $login->getPrivate_key_login(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function deleteLogin(login $login): bool {
        $sqlUpdate = 'UPDATE LOGIN SET ID_STATUS_LOGIN = :id_status_login WHERE ID_LOGIN = :id;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':id_status_login', $login->getNome_login(), \PDO::PARAM_STR);
        $stmt->bindValue(':id', $login->getNome_login(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function salvarLogin(login $login): bool {
        if ($login->getId_login() === null) {
            return $this->createLogin($login);
        }
        return $this->updateLogin($login);
    }

    public function updateLogin(login $login): bool {
        $sqlUpdate = 'UPDATE LOGIN SET NOME = :nome, SENHA = :senha, '
                . 'ID_USUARIO_LOGIN = :id_login, PRIVATE_KEY_LOGIN = :priv_key_login ;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':nome', $login->getNome_login(), \PDO::PARAM_STR);
        $stmt->bindValue(':senha', $login->getSenha_login(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_login', $login->getId_login(), \PDO::PARAM_INT);
        $stmt->bindValue(':priv_key_login', $login->getPrivate_key_login(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function readLogin(login $login): array {
        $password = $login->getSenha_login();
        $sqlReadUsuario = 'SELECT 
                            S.nome_usuario N_USUARIO,
                            ST.DESC_SETOR D_SETOR,
                            L.SENHA D_SENHA,
                            L.ID_LOGIN HASH_ID_LOGIN,
                            L.PRIVATE_KEY_LOGIN HASH_LOGIN,
                            L.ID_PERFIL_LOGIN PERFIL
                            FROM USUARIO S 
                            INNER JOIN LOGIN L ON L.ID_USUARIO_LOGIN = S.id_usuario
                            INNER JOIN SETOR ST ON ST.ID_SETOR = S.id_setor_usuario
                            WHERE L.NOME =:nUser';
        $stmt = $this->conexao->prepare($sqlReadUsuario);
        $stmt->bindValue(':nUser', $login->getNome_login(), PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $this->hidrataUsuario($stmt, $password);
        } else {
            $inf[] = array('RESULT' => 'FALSE');
            return $inf;
        }
    }

    public function todosLogin(): array {
        
    }

    public function hidrataUsuario(\PDOStatement $stmt, $password): array {
        session_start();
        $listarUsuario = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($listarUsuario as $dadosUsuario) {
            if ($dadosUsuario->D_SENHA == $password) {
                $_SESSION['id_login'] = $dadosUsuario->HASH_ID_LOGIN;
                $_SESSION['id_perfil'] = $dadosUsuario->PERFIL;
                $inf[] = array(
                    "RESULT" => 'TRUE',
                    "N_USUARIO" => $dadosUsuario->N_USUARIO,
                    "D_SETOR" => $dadosUsuario->D_SETOR,
                    "PERFIL" => $dadosUsuario->PERFIL,
                    "D_SENHA" => $dadosUsuario->D_SENHA,
                    "HASH_ID_LOGIN" => $dadosUsuario->HASH_ID_LOGIN,
                    "HASH_LOGIN" => $dadosUsuario->HASH_LOGIN
                );
            }
        }
        return $inf;
    }

}
