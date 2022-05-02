<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CriadorConexao
 *
 * @author Rubens
 */
namespace Rubens\Comercial\Infraestrutura\Persistencia;

use PDO;
class CriadorConexao {
    //put your code here
    
    //Método criarConexao do tipo PDO
    public static function criarConexao(): PDO {
        
        
        try {
            
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=intranet_db','root','12345');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //set atributo de erros e de excessão caso eles aconteção
            return $pdo; //retorne o objeto do tipo PDO
        } catch (PDOException $ex) {
            echo 'ERRO:' . $ex->getMessage();
        }
    }
}
