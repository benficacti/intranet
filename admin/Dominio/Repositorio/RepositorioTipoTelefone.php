<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\tipoTelefone;

/**
 *
 * @author Rubens
 */
interface RepositorioTipoTelefone {
    //put your code here
    
    public function todosTiposTelefone():array;
    public function salvarTipoTelefone(tipoTelefone $tipoTelefone):bool;
    public function createTipoTelefone(tipoTelefone $tipoTelefone):bool;
    public function updateTipoTelefone(tipoTelefone $tipoTelefone):bool;
    public function deleteTipoTelefone(tipoTelefone $tipoTelefone):bool;
    
}
