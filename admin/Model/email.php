<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of email
 *
 * @author Rubens
 */

//Essa classe segue um padrão chamado Entity
class email {
    //put your code here  Endereco private_email;
    
    private ?int   $id_email; 
    private string $endereco;
    private string $private_email;
    
    public function __construct(?int $id_email, string $endereco, string $private_email) {
        $this->id_email = $id_email;
        $this->endereco = $endereco;
        $this->private_email = $private_email;
    }
    
    public function getId_email(): ?int {
        return $this->id_email;
    }

    public function getEndereco(): string {
        return $this->endereco;
    }

    public function getPrivate_email(): string {
        return $this->private_email;
    }

    public function setId_email(?int $id_email): void {
        $this->id_email = $id_email;
    }

    public function setEndereco(string $endereco): void {
        $this->endereco = $endereco;
    }

    public function setPrivate_email(string $private_email): void {
        $this->private_email = $private_email;
    }


}
