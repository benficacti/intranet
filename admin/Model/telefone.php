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
    private ?string $num_telefone;
    private ?int $id_operadora;
    private ?int $id_status;
    private ?int $id_garagem;
    private ?int $id_tipo_telefone;
    private ?int $id_setor_telefone;
    private ?string $private_key_telefone;
    
    function __construct(?int $id_telefone, ?string $num_telefone, ?int $id_operadora, ?int $id_status, ?int $id_garagem, ?int $id_tipo_telefone, ?int $id_setor_telefone, ?string $private_key_telefone) {
        $this->id_telefone = $id_telefone;
        $this->num_telefone = $num_telefone;
        $this->id_operadora = $id_operadora;
        $this->id_status = $id_status;
        $this->id_garagem = $id_garagem;
        $this->id_tipo_telefone = $id_tipo_telefone;
        $this->id_setor_telefone = $id_setor_telefone;
        $this->private_key_telefone = $private_key_telefone;
    }
    
    function getId_telefone(): ?int {
        return $this->id_telefone;
    }

    function getNum_telefone(): ?string {
        return $this->num_telefone;
    }

    function getId_operadora(): ?int {
        return $this->id_operadora;
    }

    function getId_status(): ?int {
        return $this->id_status;
    }

    function getId_garagem(): ?int {
        return $this->id_garagem;
    }

    function getId_tipo_telefone(): ?int {
        return $this->id_tipo_telefone;
    }

    function getId_setor_telefone(): ?int {
        return $this->id_setor_telefone;
    }

    function getPrivate_key_telefone(): ?string {
        return $this->private_key_telefone;
    }

    function setId_telefone(?int $id_telefone): void {
        $this->id_telefone = $id_telefone;
    }

    function setNum_telefone(?string $num_telefone): void {
        $this->num_telefone = $num_telefone;
    }

    function setId_operadora(?int $id_operadora): void {
        $this->id_operadora = $id_operadora;
    }

    function setId_status(?int $id_status): void {
        $this->id_status = $id_status;
    }

    function setId_garagem(?int $id_garagem): void {
        $this->id_garagem = $id_garagem;
    }

    function setId_tipo_telefone(?int $id_tipo_telefone): void {
        $this->id_tipo_telefone = $id_tipo_telefone;
    }

    function setId_setor_telefone(?int $id_setor_telefone): void {
        $this->id_setor_telefone = $id_setor_telefone;
    }

    function setPrivate_key_telefone(?string $private_key_telefone): void {
        $this->private_key_telefone = $private_key_telefone;
    }
}
