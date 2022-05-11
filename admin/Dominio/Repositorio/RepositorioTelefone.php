<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\telefone;

/**
 *
 * @author Rubens
 */
interface RepositorioTelefone {

    //put your code here

    public function todosTelefones(): array;
    public function listarNaoAssociadosTelefone(): array;
    public function salvarTelefone(telefone $telefone): bool;
    public function createTelefone(telefone $telefone): bool;
    public function readTelefone(telefone $telefone): array;
    public function updateTelefone(telefone $telefone): bool;
    public function deleteTelefone(telefone $telefone): bool;
}
