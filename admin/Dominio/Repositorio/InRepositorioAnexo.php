<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\anexo;
/**
 *
 * @author Rubens
 */
interface InRepositorioAnexo {
    //put your code here
    
    public function salvarAnexo(anexo $anexo):array;
    public function createAnexo(anexo $anexo):array;
    public function updateAnexo(anexo $anexo):array;
    public function todosAnexo():array;
    public function readAnexo(anexo $anexo):array;
    
}
