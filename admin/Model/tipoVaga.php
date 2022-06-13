<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of tipoVaga
 *
 * @author Rubens
 */
class tipoVaga {
    //put your code here
    
    private ?int $id_tipo_vaga;
    private string $desc_tipo_vaga;
    
    public function __construct(?int $id_tipo_vaga, string $desc_tipo_vaga) {
        $this->id_tipo_vaga = $id_tipo_vaga;
        $this->desc_tipo_vaga = $desc_tipo_vaga;
    }
    
    public function getId_tipo_vaga(): ?int {
        return $this->id_tipo_vaga;
    }

    public function getDesc_tipo_vaga(): string {
        return $this->desc_tipo_vaga;
    }

    public function setId_tipo_vaga(?int $id_tipo_vaga): void {
        $this->id_tipo_vaga = $id_tipo_vaga;
    }

    public function setDesc_tipo_vaga(string $desc_tipo_vaga): void {
        $this->desc_tipo_vaga = $desc_tipo_vaga;
    }
}
