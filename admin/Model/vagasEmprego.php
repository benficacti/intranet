<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of vagasEmprego
 *
 * @author Rubens
 */
class vagasEmprego {
    //put your code here
    
    private ?int $id_vagas_emprego;
    private ?int $id_periodo_trabalho;
    private ?int $id_setor;
    private ?int $id_tipo_vaga;
    private ?string $detalhe;
    private ?int $url_anexo;
    
    public function __construct(?int $id_vagas_emprego, ?int $id_periodo_trabalho, ?int $id_setor, ?int $id_tipo_vaga, ?string $detalhe, ?int $url_anexo) {
        $this->id_vagas_emprego = $id_vagas_emprego;
        $this->id_periodo_trabalho = $id_periodo_trabalho;
        $this->id_setor = $id_setor;
        $this->id_tipo_vaga = $id_tipo_vaga;
        $this->detalhe = $detalhe;
        $this->url_anexo = $url_anexo;
    }
    
    public function getId_vagas_emprego(): ?int {
        return $this->id_vagas_emprego;
    }

    public function getId_periodo_trabalho(): ?int {
        return $this->id_periodo_trabalho;
    }

    public function getId_setor(): ?int {
        return $this->id_setor;
    }

    public function getId_tipo_vaga(): ?int {
        return $this->id_tipo_vaga;
    }

    public function getDetalhe(): ?string {
        return $this->detalhe;
    }

    public function getUrl_anexo(): ?int {
        return $this->url_anexo;
    }

    public function setId_vagas_emprego(?int $id_vagas_emprego): void {
        $this->id_vagas_emprego = $id_vagas_emprego;
    }

    public function setId_periodo_trabalho(?int $id_periodo_trabalho): void {
        $this->id_periodo_trabalho = $id_periodo_trabalho;
    }

    public function setId_setor(?int $id_setor): void {
        $this->id_setor = $id_setor;
    }

    public function setId_tipo_vaga(?int $id_tipo_vaga): void {
        $this->id_tipo_vaga = $id_tipo_vaga;
    }

    public function setDetalhe(?string $detalhe): void {
        $this->detalhe = $detalhe;
    }

    public function setUrl_anexo(?int $url_anexo): void {
        $this->url_anexo = $url_anexo;
    }
    

}
