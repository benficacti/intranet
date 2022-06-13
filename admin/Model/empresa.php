<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of empresa
 *
 * @author Rubens
 */
class empresa {
    //put your code here
    
    private ?int $id_empresa;
    private ?string $nome_empresa;
    
    public function __construct(?int $id_empresa, ?string $nome_empresa) {
        $this->id_empresa = $id_empresa;
        $this->nome_empresa = $nome_empresa;
    }
    
    public function getId_empresa(): ?int {
        return $this->id_empresa;
    }

    public function getNome_empresa(): ?string {
        return $this->nome_empresa;
    }

    public function setId_empresa(?int $id_empresa): void {
        $this->id_empresa = $id_empresa;
    }

    public function setNome_empresa(?string $nome_empresa): void {
        $this->nome_empresa = $nome_empresa;
    }
}
