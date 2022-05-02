<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

spl_autoload_register(
        function (string $nomeCompletoDaClasse) { //função anônima
            $caminhoCompleto = str_replace('Rubens\\Comercial','admin', $nomeCompletoDaClasse);
            $caminhoArquivo  = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
            $caminhoArquivo .= '.php';
            if(file_exists($caminhoArquivo)){
                require_once $caminhoArquivo;
                
            }
            
        }
);
