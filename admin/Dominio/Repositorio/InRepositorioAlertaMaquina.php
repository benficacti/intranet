<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\alerta_maquina;
/**
 *
 * @author Rubens
 */
interface InRepositorioAlertaMaquina {
    //put your code here
    
    public function todosAlertaMaquina():array;
    public function readAlertaMaquina(alerta_maquina $alertaMaquina):array;
    public function salvarAlertaMaquina(alerta_maquina $alertaMaquina):bool;
    public function createAlertaMaquina(alerta_maquina $alertaMaquina):bool;
    public function updateAlertaMaquina(alerta_maquina $alertaMaquina):bool;
    public function deleteAlertaMaquina(alerta_maquina $alertaMaquina):bool;
}
