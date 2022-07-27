<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\maquina;
/**
 *
 * @author Rubens
 */
interface InRepositorioMaquina {
    //put your code here
    public function todosMaquina():array;
    public function readMaquina(maquina $maquina):array;
    public function salvaMaquina(maquina $maquina):bool;
    public function createMaquina(maquina $maquina):bool;
    public function updateMaquina(maquina $maquina):bool;
    public function deleteMaquina(maquina $maquina):bool;
}
