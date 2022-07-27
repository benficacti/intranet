<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of solicitacaoMarketing
 *
 * @author Rubens
 */
class solicitacaoMarketing {
    //put your code here
    
    private ?int $id_solicitacao_marketing;
    private ?string $nome_solicitante;
    private ?int $id_telefone_solicitacao;
    private ?int $id_email_solicitacao;
    private ?int $id_anexo_env_solicitante;
    private ?int $id_anexo_env_por_mark;
    private ?int $id_detalhe_solicitacao;
    private ?int $id_tipo_solicitacao;
    private ?int $id_setor_solicitante;
    private ?int $id_status_solicitacao;
    private ?string $codigo_solicitacao;
    private ?string $private_key_solicitacao;
    
    public function __construct(?int $id_solicitacao_marketing, ?string $nome_solicitante, ?int $id_telefone_solicitacao, ?int $id_email_solicitacao, ?int $id_anexo_env_solicitante, ?int $id_anexo_env_por_mark, ?int $id_detalhe_solicitacao, ?int $id_tipo_solicitacao, ?int $id_setor_solicitante, ?int $id_status_solicitacao, ?string $codigo_solicitacao, ?string $private_key_solicitacao) {
        $this->id_solicitacao_marketing = $id_solicitacao_marketing;
        $this->nome_solicitante = $nome_solicitante;
        $this->id_telefone_solicitacao = $id_telefone_solicitacao;
        $this->id_email_solicitacao = $id_email_solicitacao;
        $this->id_anexo_env_solicitante = $id_anexo_env_solicitante;
        $this->id_anexo_env_por_mark = $id_anexo_env_por_mark;
        $this->id_detalhe_solicitacao = $id_detalhe_solicitacao;
        $this->id_tipo_solicitacao = $id_tipo_solicitacao;
        $this->id_setor_solicitante = $id_setor_solicitante;
        $this->id_status_solicitacao = $id_status_solicitacao;
        $this->codigo_solicitacao = $codigo_solicitacao;
        $this->private_key_solicitacao = $private_key_solicitacao;
    }

    public function getId_solicitacao_marketing(): ?int {
        return $this->id_solicitacao_marketing;
    }

    public function getNome_solicitante(): ?string {
        return $this->nome_solicitante;
    }

    public function getId_telefone_solicitacao(): ?int {
        return $this->id_telefone_solicitacao;
    }

    public function getId_email_solicitacao(): ?int {
        return $this->id_email_solicitacao;
    }

    public function getId_anexo_env_solicitante(): ?int {
        return $this->id_anexo_env_solicitante;
    }

    public function getId_anexo_env_por_mark(): ?int {
        return $this->id_anexo_env_por_mark;
    }

    public function getId_detalhe_solicitacao(): ?int {
        return $this->id_detalhe_solicitacao;
    }

    public function getId_tipo_solicitacao(): ?int {
        return $this->id_tipo_solicitacao;
    }

    public function getId_setor_solicitante(): ?int {
        return $this->id_setor_solicitante;
    }

    public function getId_status_solicitacao(): ?int {
        return $this->id_status_solicitacao;
    }

    public function getCodigo_solicitacao(): ?string {
        return $this->codigo_solicitacao;
    }

    public function getPrivate_key_solicitacao(): ?string {
        return $this->private_key_solicitacao;
    }

    public function setId_solicitacao_marketing(?int $id_solicitacao_marketing): void {
        $this->id_solicitacao_marketing = $id_solicitacao_marketing;
    }

    public function setNome_solicitante(?string $nome_solicitante): void {
        $this->nome_solicitante = $nome_solicitante;
    }

    public function setId_telefone_solicitacao(?int $id_telefone_solicitacao): void {
        $this->id_telefone_solicitacao = $id_telefone_solicitacao;
    }

    public function setId_email_solicitacao(?int $id_email_solicitacao): void {
        $this->id_email_solicitacao = $id_email_solicitacao;
    }

    public function setId_anexo_env_solicitante(?int $id_anexo_env_solicitante): void {
        $this->id_anexo_env_solicitante = $id_anexo_env_solicitante;
    }

    public function setId_anexo_env_por_mark(?int $id_anexo_env_por_mark): void {
        $this->id_anexo_env_por_mark = $id_anexo_env_por_mark;
    }

    public function setId_detalhe_solicitacao(?int $id_detalhe_solicitacao): void {
        $this->id_detalhe_solicitacao = $id_detalhe_solicitacao;
    }

    public function setId_tipo_solicitacao(?int $id_tipo_solicitacao): void {
        $this->id_tipo_solicitacao = $id_tipo_solicitacao;
    }

    public function setId_setor_solicitante(?int $id_setor_solicitante): void {
        $this->id_setor_solicitante = $id_setor_solicitante;
    }

    public function setId_status_solicitacao(?int $id_status_solicitacao): void {
        $this->id_status_solicitacao = $id_status_solicitacao;
    }

    public function setCodigo_solicitacao(?string $codigo_solicitacao): void {
        $this->codigo_solicitacao = $codigo_solicitacao;
    }

    public function setPrivate_key_solicitacao(?string $private_key_solicitacao): void {
        $this->private_key_solicitacao = $private_key_solicitacao;
    }


}
