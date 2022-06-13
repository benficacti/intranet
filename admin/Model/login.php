<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of login
 *
 * @author Rubens
 */
class login {
    //put your code here
    
    private ?int $id_login;
    private ?string $nome_login;
    private ?string $senha_login;
    private ?int $id_usuario_login;
    private ?int $id_status_login;
    private ?int $id_perfil_login;
    private ?string $private_key_login; 
    
    function __construct(?int $id_login, ?string $nome_login, ?string $senha_login, ?int $id_usuario_login, ?int $id_status_login, ?int $id_perfil_login, ?string $private_key_login) {
        $this->id_login = $id_login;
        $this->nome_login = $nome_login;
        $this->senha_login = $senha_login;
        $this->id_usuario_login = $id_usuario_login;
        $this->id_status_login = $id_status_login;
        $this->id_perfil_login = $id_perfil_login;
        $this->private_key_login = $private_key_login;
    }
    
    function getId_login(): ?int {
        return $this->id_login;
    }

    function getNome_login(): ?string {
        return $this->nome_login;
    }

    function getSenha_login(): ?string {
        return $this->senha_login;
    }

    function getId_usuario_login(): ?int {
        return $this->id_usuario_login;
    }

    function getId_status_login(): ?int {
        return $this->id_status_login;
    }

    function getId_perfil_login(): ?int {
        return $this->id_perfil_login;
    }

    function getPrivate_key_login(): ?string {
        return $this->private_key_login;
    }

    function setId_login(?int $id_login): void {
        $this->id_login = $id_login;
    }

    function setNome_login(?string $nome_login): void {
        $this->nome_login = $nome_login;
    }

    function setSenha_login(?string $senha_login): void {
        $this->senha_login = $senha_login;
    }

    function setId_usuario_login(?int $id_usuario_login): void {
        $this->id_usuario_login = $id_usuario_login;
    }

    function setId_status_login(?int $id_status_login): void {
        $this->id_status_login = $id_status_login;
    }

    function setId_perfil_login(?int $id_perfil_login): void {
        $this->id_perfil_login = $id_perfil_login;
    }

    function setPrivate_key_login(?string $private_key_login): void {
        $this->private_key_login = $private_key_login;
    }
}
