<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of telefoneUsuario
 *
 * @author Rubens
 */
class telefoneUsuario {
    //put your code here
    private ?int $id_telefone_usuario;
    private ?int $id_telefone;
    private ?int $id_telefone_ramal;
    private ?int $id_status_visualizacao;
    private ?int $id_nome_agenda;
    
    public function __construct(?int $id_telefone_usuario, ?int $id_telefone, ?int $id_telefone_ramal, ?int $id_status_visualizacao, ?int $id_nome_agenda) {
        $this->id_telefone_usuario = $id_telefone_usuario;
        $this->id_telefone = $id_telefone;
        $this->id_telefone_ramal = $id_telefone_ramal;
        $this->id_status_visualizacao = $id_status_visualizacao;
        $this->id_nome_agenda = $id_nome_agenda;
    }
    
    public function getId_telefone_usuario(): ?int {
        return $this->id_telefone_usuario;
    }

    public function getId_telefone(): ?int {
        return $this->id_telefone;
    }

    public function getId_telefone_ramal(): ?int {
        return $this->id_telefone_ramal;
    }

    public function getId_status_visualizacao(): ?int {
        return $this->id_status_visualizacao;
    }

    public function getId_nome_agenda(): ?int {
        return $this->id_nome_agenda;
    }

    public function setId_telefone_usuario(?int $id_telefone_usuario): void {
        $this->id_telefone_usuario = $id_telefone_usuario;
    }

    public function setId_telefone(?int $id_telefone): void {
        $this->id_telefone = $id_telefone;
    }

    public function setId_telefone_ramal(?int $id_telefone_ramal): void {
        $this->id_telefone_ramal = $id_telefone_ramal;
    }

    public function setId_status_visualizacao(?int $id_status_visualizacao): void {
        $this->id_status_visualizacao = $id_status_visualizacao;
    }

    public function setId_nome_agenda(?int $id_nome_agenda): void {
        $this->id_nome_agenda = $id_nome_agenda;
    }

}
