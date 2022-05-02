<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of statusVisualizacao
 * @author Rubens
 */
class statusVisualizacao {
    //put your code here
    
    private ?int $id_status_visualizacao;
    private string $status_visualizacao;
    
    public function __construct(?int $id_status_visualizacao, string $status_visualizacao) {
        $this->id_status_visualizacao = $id_status_visualizacao;
        $this->status_visualizacao = $status_visualizacao;
    }
    
    public function getId_status_visualizacao(): ?int {
        return $this->id_status_visualizacao;
    }

    public function getStatus_visualizacao(): string {
        return $this->status_visualizacao;
    }

    public function setId_status_visualizacao(?int $id_status_visualizacao): void {
        $this->id_status_visualizacao = $id_status_visualizacao;
    }

    public function setStatus_visualizacao(string $status_visualizacao): void {
        $this->status_visualizacao = $status_visualizacao;
    }

}
