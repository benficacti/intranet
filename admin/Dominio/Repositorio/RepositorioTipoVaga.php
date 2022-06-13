<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\tipoVaga;


/**
 *
 * @author Rubens
 */
interface RepositorioTipoVaga {
    //put your code here
    
    public function salvarTipoVaga(tipoVaga $tipoVaga):bool;
    public function createTipoVaga(tipoVaga $tipoVaga):bool;
    public function updateTipoVaga(tipoVaga $tipoVaga):bool;
    public function todosTiposVaga():array;
    public function readTipoVaga(tipoVaga $tipoVaga):array;
}
