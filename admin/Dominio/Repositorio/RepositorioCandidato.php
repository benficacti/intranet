<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\candidato;

/**
 *
 * @author Rubens
 */
interface RepositorioCandidato {

    //put your code here


    public function salvarCandidatos(candidato $candidato): bool;
    public function createCandidatos(candidato $candidato): bool;
    public function updateCandidatos(candidato $candidato): bool;
    public function deleteCandidatos(candidato $candidato): bool;
    public function readCandidatos(candidato $candidato): array;
    public function filtrarCandidatos(candidato $candidato): array;
    public function todosCandidatos(): array;
}
