<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\tipoSolicitacao;

/**
 *
 * @author Rubens
 */
interface InRepositorioTipoSolicitacao {

    //put your code here
    public function todosTiposSolicitacao(): array;
    public function readTiposSolicitacao(): array;
    public function readIdTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): array;
    public function salvarTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): bool;
    public function createTiposSolicitacao(tipoSolicitacao $tipoSolicitacao): bool;
}
