<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\usuario;

/**
 *
 * @author Rubens
 */
interface RepositorioUsuario {

    //put your code here
    public function todosUsuario(): array;
    public function readUsuario(usuario $usuario): array;
    public function salvarUsuario(usuario $usuario):bool;
    public function createUsuario(usuario $usuario):bool;
    public function updateUsuario(usuario $usuario):bool;
    public function deleteUsuario(usuario $usuario):bool;
}
