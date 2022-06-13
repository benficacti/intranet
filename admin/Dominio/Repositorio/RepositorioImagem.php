<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\imagem;
/**
 *
 * @author Rubens
 */
interface RepositorioImagem {
    //put your code here
    
    public function salvarImagem(imagem $imagem):array;
    public function createImagem(imagem $imagem):bool;
    public function updateImagem(imagem $imagem):bool;
    public function todosImagem():array;
    public function readImagem():array;
}
