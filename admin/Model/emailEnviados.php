<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of emailEnviados
 *
 * @author Rubens
 */
class emailEnviados {

    //put your code here

    private ?int $id_email_enviados;
    private ?string $mensagens;
    private ?int $id_candidatos;
    private ?string $private_key_email_enviados;

    public function __construct(?int $id_email_enviados, ?string $mensagens, ?int $id_candidatos, ?string $private_key_email_enviados) {
        $this->id_email_enviados = $id_email_enviados;
        $this->mensagens = $mensagens;
        $this->id_candidatos = $id_candidatos;
        $this->private_key_email_enviados = $private_key_email_enviados;
    }

    public function getId_email_enviados(): ?int {
        return $this->id_email_enviados;
    }

    public function getMensagens(): ?string {
        return $this->mensagens;
    }

    public function getId_candidatos(): ?int {
        return $this->id_candidatos;
    }

    public function getPrivate_key_email_enviados(): ?string {
        return $this->private_key_email_enviados;
    }

    public function setId_email_enviados(?int $id_email_enviados): void {
        $this->id_email_enviados = $id_email_enviados;
    }

    public function setMensagens(?string $mensagens): void {
        $this->mensagens = $mensagens;
    }

    public function setId_candidatos(?int $id_candidatos): void {
        $this->id_candidatos = $id_candidatos;
    }

    public function setPrivate_key_email_enviados(?string $private_key_email_enviados): void {
        $this->private_key_email_enviados = $private_key_email_enviados;
    }

}
