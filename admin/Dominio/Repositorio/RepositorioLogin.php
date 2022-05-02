<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\login;

/**
 *
 * @author Rubens
 */
interface RepositorioLogin {
    //put your code here
    public function salvarLogin(login $login):bool;
    public function createLogin(login $login):bool;
    public function updateLogin(login $login):bool;
    public function deleteLogin(login $login):bool;
}
