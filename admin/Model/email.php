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
    private ?string $endereco;
    private ?string $private_email;
    
    function __construct(?int $id_email, ?string $endereco, ?string $private_email) {
        $this->id_email = $id_email;
        $this->endereco = $endereco;
        $this->private_email = $private_email;
    }
    
    function getId_email(): ?int {
        return $this->id_email;
    }

    function getEndereco(): ?string {
        return $this->endereco;
    }

    function getPrivate_email(): ?string {
        return $this->private_email;
    }

    function setId_email(?int $id_email): void {
        $this->id_email = $id_email;
    }

    function setEndereco(?string $endereco): void {
        $this->endereco = $endereco;
    }

    function setPrivate_email(?string $private_email): void {
        $this->private_email = $private_email;
    }

}
