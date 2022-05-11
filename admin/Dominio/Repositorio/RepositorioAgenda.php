<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\nome_agenda;
use Rubens\Comercial\Model\telefone;
use Rubens\Comercial\Model\agenda;
use Rubens\Comercial\Model\email;

/**
 *
 * @author Rubens
 */
interface RepositorioAgenda {

    //put your code here

    public function todosAgenda(agenda $agenda): array;
    public function createAgenda(agenda $agenda): bool;
    public function deleteAgenda(agenda $agenda): bool;
    public function salvarAgenda(agenda $agenda): bool;
    public function readAgenda(agenda $agenda): array;
    public function updateAgenda(agenda $agenda): bool;
}
