<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of alerta_maquina
 *
 * @author Rubens
 */
class alerta_maquina {
    //put your code here
    private ?int $id_alerta_maquina;
    private ?int $id_maquina_alerta;
    private ?int $id_comunicacao_alerta;
    private ?string $hora;
    private ?string $data;
    private ?string $private_key_alerta_maquina;
    
    function __construct(?int $id_alerta_maquina, ?int $id_maquina_alerta, ?int $id_comunicacao_alerta, ?string $hora, ?string $data, ?string $private_key_alerta_maquina) {
        $this->id_alerta_maquina = $id_alerta_maquina;
        $this->id_maquina_alerta = $id_maquina_alerta;
        $this->id_comunicacao_alerta = $id_comunicacao_alerta;
        $this->hora = $hora;
        $this->data = $data;
        $this->private_key_alerta_maquina = $private_key_alerta_maquina;
    }
    
    function getId_alerta_maquina(): ?int {
        return $this->id_alerta_maquina;
    }

    function getId_maquina_alerta(): ?int {
        return $this->id_maquina_alerta;
    }

    function getId_comunicacao_alerta(): ?int {
        return $this->id_comunicacao_alerta;
    }

    function getHora(): ?string {
        return $this->hora;
    }

    function getData(): ?string {
        return $this->data;
    }

    function getPrivate_key_alerta_maquina(): ?string {
        return $this->private_key_alerta_maquina;
    }

    function setId_alerta_maquina(?int $id_alerta_maquina): void {
        $this->id_alerta_maquina = $id_alerta_maquina;
    }

    function setId_maquina_alerta(?int $id_maquina_alerta): void {
        $this->id_maquina_alerta = $id_maquina_alerta;
    }

    function setId_comunicacao_alerta(?int $id_comunicacao_alerta): void {
        $this->id_comunicacao_alerta = $id_comunicacao_alerta;
    }

    function setHora(?string $hora): void {
        $this->hora = $hora;
    }

    function setData(?string $data): void {
        $this->data = $data;
    }

    function setPrivate_key_alerta_maquina(?string $private_key_alerta_maquina): void {
        $this->private_key_alerta_maquina = $private_key_alerta_maquina;
    }
}
