<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\empresa;
/**
 *
 * @author Rubens
 */
interface RepositorioEmpresa {
    //put your code here
    
    public function todosEmpresa():array;
    public function readEmpresa():array;
}
