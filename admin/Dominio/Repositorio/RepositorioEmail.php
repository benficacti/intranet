<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Rubens
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\email;

//obs: quem implementar essa interface, será obrigado a implementar todos os métodos abaixo.
/*
  Essa interface representará todos os métodos utilizados no repositório
 *  */
interface RepositorioEmail {

    //put your code here

    public function todosEmails(): array;
    public function salvar(email $email): bool;
    public function createEmail(email $email): bool;
    public function readEmail(email $email): array;
    public function readEmailSearch(email $email): array;
    public function readHashEmailSearch(email $email): array;
    public function updateEmail(email $email): bool;
    public function deleteEmail(email $email): bool;
}
