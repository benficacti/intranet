<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of tipoComunicacao
 *
 * @author Rubens
 */
class tipoComunicacao {
    //put your code here
    private ?int $id_tipo_comunicacao;
    private ?string $desc_comunicacao;
    
    function __construct(?int $id_tipo_comunicacao, ?string $desc_comunicacao) {
        $this->id_tipo_comunicacao = $id_tipo_comunicacao;
        $this->desc_comunicacao = $desc_comunicacao;
    }
    
    function getId_tipo_comunicacao(): ?int {
        return $this->id_tipo_comunicacao;
    }

    function getDesc_comunicacao(): ?string {
        return $this->desc_comunicacao;
    }

    function setId_tipo_comunicacao(?int $id_tipo_comunicacao): void {
        $this->id_tipo_comunicacao = $id_tipo_comunicacao;
    }

    function setDesc_comunicacao(?string $desc_comunicacao): void {
        $this->desc_comunicacao = $desc_comunicacao;
    }
}
