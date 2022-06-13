<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;
use Rubens\Comercial\Model\usuario;
use Rubens\Comercial\Dominio\Repositorio\RepositorioUsuario;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioUsuario
 *
 * @author Rubens
 */
class PdoRepositorioUsuario  implements RepositorioUsuario{
    //put your code here
    private PDO $conexao;
    
    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createUsuario(usuario $usuario): bool {
        $sqlInsert = 'INSERT INTO USUARIO (NOME_USUARIO, ID_EMAIL_USUARIO, ID_SETOR_USUARIO, PRIVATE_KEY_USUARIO)'
                . ' VALUES (:nome_usu, :id_email, :id_setor, :priv_key_usu);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':nome_usu', $usuario->getNome_usuario(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_email', $usuario->getId_email_usuario(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_setor', $usuario->getId_setor_usuario(), \PDO::PARAM_INT);
        $stmt->bindValue(':priv_key_usu', $usuario->getPrivate_key_usuario(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if($success){
            
            //CRIAR HASH AUTOMATICAMENTE
            $table = 'USUARIO';
            $field_set = 'PRIVATE_KEY_USUARIO';
            $field_eguals = 'ID_USUARIO';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        return $success;
        
    }

    public function deleteUsuario(usuario $usuario): bool {
        
    }

    public function readUsuario(usuario $usuario): array {
        
    }

    public function salvarUsuario(usuario $usuario): bool {
        if($usuario->getId_usuario() === null){
            return $this->createUsuario($usuario);
        }
        return $this->updateUsuario($usuario);
    }

    public function todosUsuario(): array {
        $sqlQuery = 'SELECT U.NOME_USUARIO NOME, U.PRIVATE_KEY_USUARIO HASH_USUARIO FROM USUARIO U;';
        $stmt = $this->conexao->query($sqlQuery);
        return $this->listaUsuarios($stmt);
    }

    public function updateUsuario(usuario $usuario): bool {
        $sqlUpdate = 'UPDATE USUARIO SET NOME_USUARIO = :nome_usu , '
                . 'ID_EMAIL_USUARIO = :id_email, ID_SETOR_USUARIO = :id_setor, '
                . 'PRIVATE_KEY_USUARIO = :priv_key_usuario;';
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':nome_usu', $usuario->getNome_usuario(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_email', $usuario->getId_email_usuario(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_setor', $usuario->getId_setor_usuario(), \PDO::PARAM_INT);
        $stmt->bindValue(':priv_key_usuario', $usuario->getPrivate_key_usuario(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if($success){
            $this->conexao->lastInsertId();
        }
        return $success;
    }

    public function listaUsuarios(\PDOStatement $stmt) {
        $listaDadosUsuario = $stmt->fetchAll(\PDO::FETCH_OBJ);
        
        foreach ($listaDadosUsuario as $dados){
            $inf[]= array(
                "NOME" => $dados->NOME,
                "HASH_USUARIO" => $dados->HASH_USUARIO
                    );
        }
        return $inf;
    }

}
