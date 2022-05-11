<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of telefone
 *
 * @author Rubens
 */
class telefone {
    //put your code here
    
    private ?int $id_telefone;
    private string $num_telefone;
    private ?int $id_operadora;
    private ?int $id_status;
    private ?int $id_garagem;
    private ?int $id_tipo_telefone;
    private ?string $private_key_telefone;
    
    public function __construct(?int $id_telefone, string $num_telefone, ?int $id_operadora, ?int $id_status, ?int $id_garagem, ?int $id_tipo_telefone, ?string $private_key_telefone) {
        $this->id_telefone = $id_telefone;
        $this->num_telefone = $num_telefone;
        $this->id_operadora = $id_operadora;
        $this->id_status = $id_status;
        $this->id_garagem = $id_garagem;
        $this->id_tipo_telefone = $id_tipo_telefone;
        $this->private_key_telefone = $private_key_telefone;
    }
    
    public function getId_telefone(): ?int {
        return $this->id_telefone;
    }

    public function getNum_telefone(): string {
        return $this->num_telefone;
    }

    public function getId_operadora(): ?int {
        return $this->id_operadora;
    }

    public function getId_status(): ?int {
        return $this->id_status;
    }

    public function getId_garagem(): ?int {
        return $this->id_garagem;
    }

    public function getId_tipo_telefone(): ?int {
        return $this->id_tipo_telefone;
    }

    public function getPrivate_key_telefone(): ?string {
        return $this->private_key_telefone;
    }

    public function setId_telefone(?int $id_telefone): void {
        $this->id_telefone = $id_telefone;
    }

    public function setNum_telefone(string $num_telefone): void {
        $this->num_telefone = $num_telefone;
    }

    public function setId_operadora(?int $id_operadora): void {
        $this->id_operadora = $id_operadora;
    }

    public function setId_status(?int $id_status): void {
        $this->id_status = $id_status;
    }

    public function setId_garagem(?int $id_garagem): void {
        $this->id_garagem = $id_garagem;
    }

    public function setId_tipo_telefone(?int $id_tipo_telefone): void {
        $this->id_tipo_telefone = $id_tipo_telefone;
    }

    public function setPrivate_key_telefone(?string $private_key_telefone): void {
        $this->private_key_telefone = $private_key_telefone;
    }


}
