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

}
