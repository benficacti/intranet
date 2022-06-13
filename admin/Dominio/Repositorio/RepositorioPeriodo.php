<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\periodo;
/**
 *
 * @author Rubens
 */
interface RepositorioPeriodo {
    //put your code here
    
    public function salvarPeriodo(periodo $periodo):bool;
    public function createPeriodo(periodo $periodo):bool;
    public function todosPeriodo():array;
}
