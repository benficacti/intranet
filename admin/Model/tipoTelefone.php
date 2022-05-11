<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of tipoTelefone
 *
 * @author Rubens
 */
class tipoTelefone {
    //put your code here
    
    private ?int $id_tipo_telefone;
    private string $descricao;
    
    public function __construct(?int $id_tipo_telefone, string $descricao) {
        $this->id_tipo_telefone = $id_tipo_telefone;
        $this->descricao = $descricao;
    }
    
    public function getId_tipo_telefone(): ?int {
        return $this->id_tipo_telefone;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setId_tipo_telefone(?int $id_tipo_telefone): void {
        $this->id_tipo_telefone = $id_tipo_telefone;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    

}
