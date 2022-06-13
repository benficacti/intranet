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
    private ?int $id_telefone_usuario;
    private ?int $id_nome_agenda;
    private ?int $id_status_visualizacao;
    private ?int $id_email;
    private ?int $id_setor;
    private ?string $private_key_agenda;
    
    public function __construct(?int $id_agenda, ?int $id_telefone_usuario, ?int $id_nome_agenda, ?int $id_status_visualizacao, ?int $id_email, ?int $id_setor, ?string $private_key_agenda) {
        $this->id_agenda = $id_agenda;
        $this->id_telefone_usuario = $id_telefone_usuario;
        $this->id_nome_agenda = $id_nome_agenda;
        $this->id_status_visualizacao = $id_status_visualizacao;
        $this->id_email = $id_email;
        $this->id_setor = $id_setor;
        $this->private_key_agenda = $private_key_agenda;
    }
    
    public function getId_agenda(): ?int {
        return $this->id_agenda;
    }

    public function getId_telefone_usuario(): ?int {
        return $this->id_telefone_usuario;
    }

    public function getId_nome_agenda(): ?int {
        return $this->id_nome_agenda;
    }

    public function getId_status_visualizacao(): ?int {
        return $this->id_status_visualizacao;
    }

    public function getId_email(): ?int {
        return $this->id_email;
    }

    public function getId_setor(): ?int {
        return $this->id_setor;
    }

    public function getPrivate_key_agenda(): ?string {
        return $this->private_key_agenda;
    }

    public function setId_agenda(?int $id_agenda): void {
        $this->id_agenda = $id_agenda;
    }

    public function setId_telefone_usuario(?int $id_telefone_usuario): void {
        $this->id_telefone_usuario = $id_telefone_usuario;
    }

    public function setId_nome_agenda(?int $id_nome_agenda): void {
        $this->id_nome_agenda = $id_nome_agenda;
    }

    public function setId_status_visualizacao(?int $id_status_visualizacao): void {
        $this->id_status_visualizacao = $id_status_visualizacao;
    }

    public function setId_email(?int $id_email): void {
        $this->id_email = $id_email;
    }

    public function setId_setor(?int $id_setor): void {
        $this->id_setor = $id_setor;
    }

    public function setPrivate_key_agenda(?string $private_key_agenda): void {
        $this->private_key_agenda = $private_key_agenda;
    }

}
