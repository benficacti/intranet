<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;
/**
 * Description of garagem
 *
 * @author Rubens
 */
class garagem {
    //put your code here
    
    private ?int $id_garagem;
    private string $descricao;
    private int $id_empresa;
    private string $private_key_garagem;

  
    public function __construct(?int $id_garagem, string $descricao, int $id_empresa, string $private_key_garagem) {
        $this->id_garagem = $id_garagem;
        $this->descricao = $descricao;
        $this->id_empresa = $id_empresa;
        $this->private_key_garagem = $private_key_garagem;
    }

    public function getId_garagem(): ?int {
        return $this->id_garagem;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getId_empresa(): int {
        return $this->id_empresa;
    }

    public function getPrivate_key_garagem(): string {
        return $this->private_key_garagem;
    }

    public function setId_garagem(?int $id_garagem): void {
        $this->id_garagem = $id_garagem;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function setId_empresa(int $id_empresa): void {
        $this->id_empresa = $id_empresa;
    }

    public function setPrivate_key_garagem(string $private_key_garagem): void {
        $this->private_key_garagem = $private_key_garagem;
    }


}



