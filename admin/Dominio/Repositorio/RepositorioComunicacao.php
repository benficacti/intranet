<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\comunicacao;

/**
 *
 * @author Rubens
 * 
 * //obs: quem implementar essa interface, será obrigado a implementar todos os métodos abaixo.
  /*
  Essa interface representará todos os métodos utilizados no repositório
 *  */
interface RepositorioComunicacao {

    //put your code here

    public function todasComunicacoes(): array;
    public function alertasComunicacoes(): array;
    public function salvar(comunicacao $comunicacao): array;
    public function createComunicacao(comunicacao $comunicacao): array;
    public function readComunicaco(comunicacao $comunicacao): array;
    public function updateComunicacao(comunicacao $comunicacao): array;
    public function updateComunicacaoAnexo(comunicacao $comunicacao): bool;
    public function deleteComunicacao(comunicacao $comunicacao): bool;
}
