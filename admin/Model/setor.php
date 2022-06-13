<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of setor
 *
 * @author Rubens
 */
class setor {
    //put your code here
    
    private ?int $id_setor;
    private ?string $desc_setor;
    private ?string $private_key_setor;
    
    
    public function __construct(?int $id_setor, ?string $desc_setor, ?string $private_key_setor) {
        $this->id_setor = $id_setor;
        $this->desc_setor = $desc_setor;
        $this->private_key_setor = $private_key_setor;
    }
    
    public function getId_setor(): ?int {
        return $this->id_setor;
    }

    public function getDesc_setor(): ?string {
        return $this->desc_setor;
    }

    public function getPrivate_key_setor(): ?string {
        return $this->private_key_setor;
    }

    public function setId_setor(?int $id_setor): void {
        $this->id_setor = $id_setor;
    }

    public function setDesc_setor(?string $desc_setor): void {
        $this->desc_setor = $desc_setor;
    }

    public function setPrivate_key_setor(?string $private_key_setor): void {
        $this->private_key_setor = $private_key_setor;
    }

    
}
