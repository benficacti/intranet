<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
/**
 * Description of comunicacao
 *
 * @author Rubens
 */
namespace Rubens\Comercial\Model;

class comunicacao {
    //put your code here
    
    private ?int $id_comunicacao;
    private string $titulo_com;
    private string $mensagem_com;
    private string $hora_criacao_com;
    private string $data_criacao_com;
    private string $hora_expirar_com;
    private string $data_expirar_com;
    private int $id_login_com;
    private int $id_tipo_com;
    private int $id_nivel_prioridade_com;
    private int $id_url_top_com;
    private int $id_url_bottom_com;
    private int $id_anexo_com;
    private int $id_empresa_com;
    private int $id_status_com;
    private int $codigo_comunicacao;
    private string $private_key_comunicacao;
    
    public function __construct(?int $id_comunicacao, string $titulo_com, string $mensagem_com, string $hora_criacao_com, string $data_criacao_com, string $hora_expirar_com, string $data_expirar_com, int $id_login_com, int $id_tipo_com, int $id_nivel_prioridade_com, int $id_url_top_com, int $id_url_bottom_com, int $id_anexo_com, int $id_empresa_com, int $id_status_com, int $codigo_comunicacao, string $private_key_comunicacao) {
        $this->id_comunicacao = $id_comunicacao;
        $this->titulo_com = $titulo_com;
        $this->mensagem_com = $mensagem_com;
        $this->hora_criacao_com = $hora_criacao_com;
        $this->data_criacao_com = $data_criacao_com;
        $this->hora_expirar_com = $hora_expirar_com;
        $this->data_expirar_com = $data_expirar_com;
        $this->id_login_com = $id_login_com;
        $this->id_tipo_com = $id_tipo_com;
        $this->id_nivel_prioridade_com = $id_nivel_prioridade_com;
        $this->id_url_top_com = $id_url_top_com;
        $this->id_url_bottom_com = $id_url_bottom_com;
        $this->id_anexo_com = $id_anexo_com;
        $this->id_empresa_com = $id_empresa_com;
        $this->id_status_com = $id_status_com;
        $this->codigo_comunicacao = $codigo_comunicacao;
        $this->private_key_comunicacao = $private_key_comunicacao;
    }

    public function getId_comunicacao(): ?int {
        return $this->id_comunicacao;
    }

    public function getTitulo_com(): string {
        return $this->titulo_com;
    }

    public function getMensagem_com(): string {
        return $this->mensagem_com;
    }

    public function getHora_criacao_com(): string {
        return $this->hora_criacao_com;
    }

    public function getData_criacao_com(): string {
        return $this->data_criacao_com;
    }

    public function getHora_expirar_com(): string {
        return $this->hora_expirar_com;
    }

    public function getData_expirar_com(): string {
        return $this->data_expirar_com;
    }

    public function getId_login_com(): int {
        return $this->id_login_com;
    }

    public function getId_tipo_com(): int {
        return $this->id_tipo_com;
    }

    public function getId_nivel_prioridade_com(): int {
        return $this->id_nivel_prioridade_com;
    }

    public function getId_url_top_com(): int {
        return $this->id_url_top_com;
    }

    public function getId_url_bottom_com(): int {
        return $this->id_url_bottom_com;
    }

    public function getId_anexo_com(): int {
        return $this->id_anexo_com;
    }

    public function getId_empresa_com(): int {
        return $this->id_empresa_com;
    }

    public function getId_status_com(): int {
        return $this->id_status_com;
    }

    public function getCodigo_comunicacao(): int {
        return $this->codigo_comunicacao;
    }

    public function getPrivate_key_comunicacao(): string {
        return $this->private_key_comunicacao;
    }

    public function setId_comunicacao(?int $id_comunicacao): void {
        $this->id_comunicacao = $id_comunicacao;
    }

    public function setTitulo_com(string $titulo_com): void {
        $this->titulo_com = $titulo_com;
    }

    public function setMensagem_com(string $mensagem_com): void {
        $this->mensagem_com = $mensagem_com;
    }

    public function setHora_criacao_com(string $hora_criacao_com): void {
        $this->hora_criacao_com = $hora_criacao_com;
    }

    public function setData_criacao_com(string $data_criacao_com): void {
        $this->data_criacao_com = $data_criacao_com;
    }

    public function setHora_expirar_com(string $hora_expirar_com): void {
        $this->hora_expirar_com = $hora_expirar_com;
    }

    public function setData_expirar_com(string $data_expirar_com): void {
        $this->data_expirar_com = $data_expirar_com;
    }

    public function setId_login_com(int $id_login_com): void {
        $this->id_login_com = $id_login_com;
    }

    public function setId_tipo_com(int $id_tipo_com): void {
        $this->id_tipo_com = $id_tipo_com;
    }

    public function setId_nivel_prioridade_com(int $id_nivel_prioridade_com): void {
        $this->id_nivel_prioridade_com = $id_nivel_prioridade_com;
    }

    public function setId_url_top_com(int $id_url_top_com): void {
        $this->id_url_top_com = $id_url_top_com;
    }

    public function setId_url_bottom_com(int $id_url_bottom_com): void {
        $this->id_url_bottom_com = $id_url_bottom_com;
    }

    public function setId_anexo_com(int $id_anexo_com): void {
        $this->id_anexo_com = $id_anexo_com;
    }

    public function setId_empresa_com(int $id_empresa_com): void {
        $this->id_empresa_com = $id_empresa_com;
    }

    public function setId_status_com(int $id_status_com): void {
        $this->id_status_com = $id_status_com;
    }

    public function setCodigo_comunicacao(int $codigo_comunicacao): void {
        $this->codigo_comunicacao = $codigo_comunicacao;
    }

    public function setPrivate_key_comunicacao(string $private_key_comunicacao): void {
        $this->private_key_comunicacao = $private_key_comunicacao;
    }


}
