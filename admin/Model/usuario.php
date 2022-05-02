<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of usuario
 *
 * @author Rubens
 */
class usuario {
    //put your code here
    
    private ?int $id_usuario;
    private string $nome_usuario;
    private int $id_email_usuario;
    private int $id_setor_usuario;
    private string $private_key_usuario;
    
    public function __construct(?int $id_usuario, string $nome_usuario, int $id_email_usuario, int $id_setor_usuario, string $private_key_usuario) {
        $this->id_usuario = $id_usuario;
        $this->nome_usuario = $nome_usuario;
        $this->id_email_usuario = $id_email_usuario;
        $this->id_setor_usuario = $id_setor_usuario;
        $this->private_key_usuario = $private_key_usuario;
    }
    
    public function getId_usuario(): ?int {
        return $this->id_usuario;
    }

    public function getNome_usuario(): string {
        return $this->nome_usuario;
    }

    public function getId_email_usuario(): int {
        return $this->id_email_usuario;
    }

    public function getId_setor_usuario(): int {
        return $this->id_setor_usuario;
    }

    public function getPrivate_key_usuario(): string {
        return $this->private_key_usuario;
    }

    public function setId_usuario(?int $id_usuario): void {
        $this->id_usuario = $id_usuario;
    }

    public function setNome_usuario(string $nome_usuario): void {
        $this->nome_usuario = $nome_usuario;
    }

    public function setId_email_usuario(int $id_email_usuario): void {
        $this->id_email_usuario = $id_email_usuario;
    }

    public function setId_setor_usuario(int $id_setor_usuario): void {
        $this->id_setor_usuario = $id_setor_usuario;
    }

    public function setPrivate_key_usuario(string $private_key_usuario): void {
        $this->private_key_usuario = $private_key_usuario;
    }


}
