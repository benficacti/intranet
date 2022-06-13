<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\vagasEmprego;

/**
 *
 * @author Rubens
 */
interface RepositorioVagasEmprego {

    //put your code here

    public function salvarVagasEmprego(vagasEmprego $vagas): array;
    public function createVagasEmprego(vagasEmprego $vagas): array;
    public function updateVagasEmprego(vagasEmprego $vagas): bool;
    public function updateVagasEmpregoDetalhe(vagasEmprego $vagas): bool;
    public function todosVagasEmprego():array;
    public function readVagasEmprego():array;
    public function delete(vagasEmprego $vagas):bool;
}
