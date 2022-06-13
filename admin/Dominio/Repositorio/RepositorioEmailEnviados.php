<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\emailEnviados;

/**
 *
 * @author Rubens
 */
interface RepositorioEmailEnviados {

    //put your code here

    public function todosEmailEnviados(): array;

    public function readEmailEnviados(): array;

    public function salvarEmailEnviados(emailEnviados $emailEnviados): bool;

    public function createEmailEnviados(emailEnviados $emailEnviados): bool;
}
