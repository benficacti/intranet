<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\nome_agenda;

/**
 *
 * @author Rubens
 */
interface RepositorioNomeAgenda {
    //put your code here
    public function todosNomeAgenda():array;
    public function salvarNomeAgenda(nome_agenda $nome_agenda):bool;
    public function createNomeAgenda(nome_agenda $nome_agenda):bool;
    public function updateNomeAgenda(nome_agenda $nome_agenda):bool;
    public function readNomeAgenda(nome_agenda $nome_agenda):array;
    public function deleteNomeAgenda(nome_agenda $nome_agenda):bool;
    
}
