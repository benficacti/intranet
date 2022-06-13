<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of candidato
 *
 * @author Rubens
 */
class candidato {
    //put your code here
    
    private ?int $id_candidato;
    private ?string $nome;
    private ?string $chapa;
    private ?string $email;
    private ?int $setor_atual;
    private ?int $id_vaga;
    private ?int $id_status_candidato;
    private ?string $private_key_candidato;
    
    public function __construct(?int $id_candidato, ?string $nome, ?string $chapa, ?string $email, ?int $setor_atual, ?int $id_vaga, ?int $id_status_candidato, ?string $private_key_candidato) {
        $this->id_candidato = $id_candidato;
        $this->nome = $nome;
        $this->chapa = $chapa;
        $this->email = $email;
        $this->setor_atual = $setor_atual;
        $this->id_vaga = $id_vaga;
        $this->id_status_candidato = $id_status_candidato;
        $this->private_key_candidato = $private_key_candidato;
    }
    
    public function getId_candidato(): ?int {
        return $this->id_candidato;
    }

    public function getNome(): ?string {
        return $this->nome;
    }

    public function getChapa(): ?string {
        return $this->chapa;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getSetor_atual(): ?int {
        return $this->setor_atual;
    }

    public function getId_vaga(): ?int {
        return $this->id_vaga;
    }

    public function getId_status_candidato(): ?int {
        return $this->id_status_candidato;
    }

    public function getPrivate_key_candidato(): ?string {
        return $this->private_key_candidato;
    }

    public function setId_candidato(?int $id_candidato): void {
        $this->id_candidato = $id_candidato;
    }

    public function setNome(?string $nome): void {
        $this->nome = $nome;
    }

    public function setChapa(?string $chapa): void {
        $this->chapa = $chapa;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setSetor_atual(?int $setor_atual): void {
        $this->setor_atual = $setor_atual;
    }

    public function setId_vaga(?int $id_vaga): void {
        $this->id_vaga = $id_vaga;
    }

    public function setId_status_candidato(?int $id_status_candidato): void {
        $this->id_status_candidato = $id_status_candidato;
    }

    public function setPrivate_key_candidato(?string $private_key_candidato): void {
        $this->private_key_candidato = $private_key_candidato;
    }

}
