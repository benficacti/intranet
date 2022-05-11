<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of operadora
 *
 * @author Rubens
 */
class operadora {
    //put your code here
    private ?int $id_operadora;
    private string $nome;
    private string $cnpj;
    
    public function __construct(?int $id_operadora, string $nome, string $cnpj) {
        $this->id_operadora = $id_operadora;
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }
    
    public function getId_operadora(): ?int {
        return $this->id_operadora;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setId_operadora(?int $id_operadora): void {
        $this->id_operadora = $id_operadora;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

}
