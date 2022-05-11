<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of nome_agenda
 *
 * @author Rubens
 */
class nome_agenda {
    //put your code here
    
    private ?int $id_nome_agenda;
    private ?string $nome_agenda;
    private ?string $private_key_nome_agenda;
 
    public function __construct(?int $id_nome_agenda, ?string $nome_agenda, ?string $private_key_nome_agenda) {
        $this->id_nome_agenda = $id_nome_agenda;
        $this->nome_agenda = $nome_agenda;
        $this->private_key_nome_agenda = $private_key_nome_agenda;
    }
    
    public function getId_nome_agenda(): ?int {
        return $this->id_nome_agenda;
    }

    public function getNome_agenda(): ?string {
        return $this->nome_agenda;
    }

    public function getPrivate_key_nome_agenda(): ?string {
        return $this->private_key_nome_agenda;
    }

    public function setId_nome_agenda(?int $id_nome_agenda): void {
        $this->id_nome_agenda = $id_nome_agenda;
    }

    public function setNome_agenda(?string $nome_agenda): void {
        $this->nome_agenda = $nome_agenda;
    }

    public function setPrivate_key_nome_agenda(?string $private_key_nome_agenda): void {
        $this->private_key_nome_agenda = $private_key_nome_agenda;
    }

}
