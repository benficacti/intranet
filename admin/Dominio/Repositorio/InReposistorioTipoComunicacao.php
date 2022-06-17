<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\tipoComunicacao;
/**
 *
 * @author Rubens
 */
interface InReposistorioTipoComunicacao {
    //put your code here
    
    public function todosTiposComunicacao():array;
    public function readTiposComunicacao(tipoComunicacao $tipoComunicacao):array;
}
