<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace models;

/**
 * Description of menu
 *
 * @author Rubens
 */
class menu {
    //put your code here
    
    private $desc_menu;
    private $titulo_menu;
    private $sub_titulo_menu;
    private $id_url_menu;
    private $private_key_menu;
    
    
    public function __construct($desc_menu, $titulo_menu, $sub_titulo_menu, $id_url_menu, $private_key_menu) {
        $this->desc_menu = $desc_menu;
        $this->titulo_menu = $titulo_menu;
        $this->sub_titulo_menu = $sub_titulo_menu;
        $this->id_url_menu = $id_url_menu;
        $this->private_key_menu = $private_key_menu;
    }
    
    public function getDesc_menu() {
        return $this->desc_menu;
    }

    public function getTitulo_menu() {
        return $this->titulo_menu;
    }

    public function getSub_titulo_menu() {
        return $this->sub_titulo_menu;
    }

    public function getId_url_menu() {
        return $this->id_url_menu;
    }

    public function getPrivate_key_menu() {
        return $this->private_key_menu;
    }

    public function setDesc_menu($desc_menu): void {
        $this->desc_menu = $desc_menu;
    }

    public function setTitulo_menu($titulo_menu): void {
        $this->titulo_menu = $titulo_menu;
    }

    public function setSub_titulo_menu($sub_titulo_menu): void {
        $this->sub_titulo_menu = $sub_titulo_menu;
    }

    public function setId_url_menu($id_url_menu): void {
        $this->id_url_menu = $id_url_menu;
    }

    public function setPrivate_key_menu($private_key_menu): void {
        $this->private_key_menu = $private_key_menu;
    }

    
}
