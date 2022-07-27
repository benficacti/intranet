<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of tipoSolicitacao
 *
 * @author Rubens
 */
class tipoSolicitacao {
    //put your code here
    private ?int $desc_tipo_solicitacao;
    private ?string $private_key_tipo_solicitacao;
    
    public function __construct(?int $desc_tipo_solicitacao, ?string $private_key_tipo_solicitacao) {
        $this->desc_tipo_solicitacao = $desc_tipo_solicitacao;
        $this->private_key_tipo_solicitacao = $private_key_tipo_solicitacao;
    }
    
    public function getDesc_tipo_solicitacao(): ?int {
        return $this->desc_tipo_solicitacao;
    }

    public function getPrivate_key_tipo_solicitacao(): ?string {
        return $this->private_key_tipo_solicitacao;
    }

    public function setDesc_tipo_solicitacao(?int $desc_tipo_solicitacao): void {
        $this->desc_tipo_solicitacao = $desc_tipo_solicitacao;
    }

    public function setPrivate_key_tipo_solicitacao(?string $private_key_tipo_solicitacao): void {
        $this->private_key_tipo_solicitacao = $private_key_tipo_solicitacao;
    }

}
