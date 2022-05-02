<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

/**
 *
 * @author Rubens
 * TEM A FINALIDADE DE ATUALIZAR QUALQUER TABELA AUTOMATICAMENTE
 * FUNÇÃO => ATUALIZAR CHAVE HASH NAS TABELAS.
 */
interface RepositorioGeneratorHash {
    //put your code here
    
    public function generatorPrivateKeyHash($valor, $valor2, $valor3, $valor4, $valor5): bool;
}
