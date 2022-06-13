<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of imagem
 *
 * @author Rubens
 */
class imagem {
    //put your code here
    
    private ?int $id_imagem;
    private ?string $url_imagem;
    private ?string $private_key_imagem;
    
    public function __construct(?int $id_imagem, ?string $url_imagem, ?string $private_key_imagem) {
        $this->id_imagem = $id_imagem;
        $this->url_imagem = $url_imagem;
        $this->private_key_imagem = $private_key_imagem;
    }
    
    public function getId_imagem(): ?int {
        return $this->id_imagem;
    }

    public function getUrl_imagem(): ?string {
        return $this->url_imagem;
    }

    public function getPrivate_key_imagem(): ?string {
        return $this->private_key_imagem;
    }

    public function setId_imagem(?int $id_imagem): void {
        $this->id_imagem = $id_imagem;
    }

    public function setUrl_imagem(?string $url_imagem): void {
        $this->url_imagem = $url_imagem;
    }

    public function setPrivate_key_imagem(?string $private_key_imagem): void {
        $this->private_key_imagem = $private_key_imagem;
    }

}
