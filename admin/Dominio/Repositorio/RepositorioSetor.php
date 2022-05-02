<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\setor;

/**
 *
 * @author Rubens
 */
interface RepositorioSetor {

    //put your code here
    public function todosSetores(): array;
    public function salvarSetor(setor $setor): bool;
    public function createSetor(setor $setor): bool;
    public function updateSetor(setor $setor): bool;
    public function readSetor(setor $setor): array;
    public function delete(setor $setor): bool;
}
