<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\operadora;

/**
 *
 * @author Rubens
 */
interface RepositorioOperadora {

    //put your code here

    public function todasOperadoras(): array;
    public function salvarOperadora(operadora $operadora): bool;
    public function createOperadora(operadora $operadora): bool;
    public function updateOperadora(operadora $operadora): bool;
    public function deleteOperadora(operadora $operadora): bool;
    public function readOperadora(operadora $operadora): array;
    public function returnIdOperadora(operadora $operadora);
}
