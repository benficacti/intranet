<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of detalheSolicitacao
 *
 * @author Rubens
 */
class detalheSolicitacao {

    //put your code here

    private ?int $id_detalhe_solicitacao;
    private ?string $detalhe;
    private ?string $private_key_detalhe_solicitacao;

    public function __construct(?int $id_detalhe_solicitacao, ?string $detalhe, ?string $private_key_detalhe_solicitacao) {
        $this->id_detalhe_solicitacao = $id_detalhe_solicitacao;
        $this->detalhe = $detalhe;
        $this->private_key_detalhe_solicitacao = $private_key_detalhe_solicitacao;
    }

    public function getId_detalhe_solicitacao(): ?int {
        return $this->id_detalhe_solicitacao;
    }

    public function getDetalhe(): ?string {
        return $this->detalhe;
    }

    public function getPrivate_key_detalhe_solicitacao(): ?string {
        return $this->private_key_detalhe_solicitacao;
    }

    public function setId_detalhe_solicitacao(?int $id_detalhe_solicitacao): void {
        $this->id_detalhe_solicitacao = $id_detalhe_solicitacao;
    }

    public function setDetalhe(?string $detalhe): void {
        $this->detalhe = $detalhe;
    }

    public function setPrivate_key_detalhe_solicitacao(?string $private_key_detalhe_solicitacao): void {
        $this->private_key_detalhe_solicitacao = $private_key_detalhe_solicitacao;
    }

}
