<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Model;

/**
 * Description of periodo
 *
 * @author Rubens
 */
class periodo {
    //put your code here
    
    private ?int $período;
    private string $periodo;
    
    public function __construct(?int $período, string $periodo) {
        $this->período = $período;
        $this->periodo = $periodo;
    }
    
    public function getPeríodo(): ?int {
        return $this->período;
    }

    public function getPeriodo(): string {
        return $this->periodo;
    }

    public function setPeríodo(?int $período): void {
        $this->período = $período;
    }

    public function setPeriodo(string $periodo): void {
        $this->periodo = $periodo;
    }
}
