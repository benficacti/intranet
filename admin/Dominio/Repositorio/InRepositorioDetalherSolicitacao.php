<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;

use Rubens\Comercial\Model\detalheSolicitacao;

/**
 *
 * @author Rubens
 */
interface InRepositorioDetalherSolicitacao {

    //put your code here

    public function readIdDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array;
    public function readDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array;
    public function salvarDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array;
    public function createDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): array;
    public function updateDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): bool;
    public function deleteDetalheSolicitacao(detalheSolicitacao $detalheSolicitacao): bool;
}
