<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of anexo
 *
 * @author Rubens
 */
class anexo {
    //put your code here
    private ?int $id_anexo;
    private ?string $url_anexo;
    private ?string $private_key_anexo;
    
    function __construct(?int $id_anexo, ?string $url_anexo, ?string $private_key_anexo) {
        $this->id_anexo = $id_anexo;
        $this->url_anexo = $url_anexo;
        $this->private_key_anexo = $private_key_anexo;
    }
    
    
    function getId_anexo(): ?int {
        return $this->id_anexo;
    }

    function getUrl_anexo(): ?string {
        return $this->url_anexo;
    }

    function getPrivate_key_anexo(): ?string {
        return $this->private_key_anexo;
    }

    function setId_anexo(?int $id_anexo): void {
        $this->id_anexo = $id_anexo;
    }

    function setUrl_anexo(?string $url_anexo): void {
        $this->url_anexo = $url_anexo;
    }

    function setPrivate_key_anexo(?string $private_key_anexo): void {
        $this->private_key_anexo = $private_key_anexo;
    }


}

