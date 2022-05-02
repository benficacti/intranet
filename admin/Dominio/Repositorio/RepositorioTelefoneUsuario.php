<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\telefoneUsuario;


/**
 *
 * @author Rubens
 */
interface RepositorioTelefoneUsuario {
    //put your code here
    
    public function todosTelefoneUsuario():array;
    public function createTelefoneUsuario(telefoneUsuario $telUsuario):bool;
    public function salvarTelefoneUsuario(telefoneUsuario $telUsuario):bool;
    public function updateTelefoneUsuario(telefoneUsuario $telUsuario):bool;    
    public function readTelefoneUsuario(telefoneUsuario $telUsuario):array;
}
