<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;
/**
 * Description of agenda
 *
 * @author Rubens
 */
class agenda {
    //put your code here
    
    private ?int $id_agenda;
    private int $id_telefone;
    private int $id_nome_agenda;
    private int $id_status_visualizacao;
    private int $id_email;
    private string $private_key_agenda;
    
    public function __construct(?int $id_agenda, int $id_telefone, int $id_nome_agenda, int $id_status_visualizacao, int $id_email, string $private_key_agenda) {
        $this->id_agenda = $id_agenda;
        $this->id_telefone = $id_telefone;
        $this->id_nome_agenda = $id_nome_agenda;
        $this->id_status_visualizacao = $id_status_visualizacao;
        $this->id_email = $id_email;
        $this->private_key_agenda = $private_key_agenda;
    }
    
    public function getId_agenda(): ?int {
        return $this->id_agenda;
    }

    public function getId_telefone(): int {
        return $this->id_telefone;
    }

    public function getId_nome_agenda(): int {
        return $this->id_nome_agenda;
    }

    public function getId_status_visualizacao(): int {
        return $this->id_status_visualizacao;
    }

    public function getId_email(): int {
        return $this->id_email;
    }

    public function getPrivate_key_agenda(): string {
        return $this->private_key_agenda;
    }

    public function setId_agenda(?int $id_agenda): void {
        $this->id_agenda = $id_agenda;
    }

    public function setId_telefone(int $id_telefone): void {
        $this->id_telefone = $id_telefone;
    }

    public function setId_nome_agenda(int $id_nome_agenda): void {
        $this->id_nome_agenda = $id_nome_agenda;
    }

    public function setId_status_visualizacao(int $id_status_visualizacao): void {
        $this->id_status_visualizacao = $id_status_visualizacao;
    }

    public function setId_email(int $id_email): void {
        $this->id_email = $id_email;
    }

    public function setPrivate_key_agenda(string $private_key_agenda): void {
        $this->private_key_agenda = $private_key_agenda;
    }


}
