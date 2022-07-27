<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace Rubens\Comercial\Dominio\Repositorio;
use Rubens\Comercial\Model\solicitacaoMarketing;
/**
 *
 * @author Rubens
 */
interface InRepositorioSolicitacaoMarketing {
    //put your code here
    
    public function todosSolicitacaoMk():array;
    public function readIdSolicitacaoMk(solicitacaoMarketing $solicitacaoMk):array;
    public function readSolicitacaoMk(solicitacaoMarketing $solicitacaoMk):array;
    public function readAlertSolicitacaoMk():array;
    public function salvarSolicitacaoMk(solicitacaoMarketing $solitacaoMk):array;
    public function createSolicitacaoMk(solicitacaoMarketing $solitacaoMk):array;
    public function updateSolicitacaoMk(solicitacaoMarketing $solitacaoMk):bool;
    public function updateRetornoSolicitacaoMk(solicitacaoMarketing $solitacaoMk):bool;
    public function deleteSolicitacaoMk(solicitacaoMarketing $solitacaoMk):bool;
    
}
