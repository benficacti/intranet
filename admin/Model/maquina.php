<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of maquina
 *
 * @author Rubens
 */
class maquina {
    //put your code here
    private ?int $id_maquina;
    private ?string $desc_maquina;
    private ?string $private_key_maquina;
    
    function __construct(?int $id_maquina, ?string $desc_maquina, ?string $private_key_maquina) {
        $this->id_maquina = $id_maquina;
        $this->desc_maquina = $desc_maquina;
        $this->private_key_maquina = $private_key_maquina;
    }
    function getId_maquina(): ?int {
        return $this->id_maquina;
    }

    function getDesc_maquina(): ?string {
        return $this->desc_maquina;
    }

    function getPrivate_key_maquina(): ?string {
        return $this->private_key_maquina;
    }

    function setId_maquina(?int $id_maquina): void {
        $this->id_maquina = $id_maquina;
    }

    function setDesc_maquina(?string $desc_maquina): void {
        $this->desc_maquina = $desc_maquina;
    }

    function setPrivate_key_maquina(?string $private_key_maquina): void {
        $this->private_key_maquina = $private_key_maquina;
    }
}
