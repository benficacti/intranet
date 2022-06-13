<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\imagem;
use Rubens\Comercial\Dominio\Repositorio\RepositorioImagem;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioImagem
 *
 * @author Rubens
 */
class PdoRepositorioImagem implements RepositorioImagem {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createImagem(imagem $imagem): bool {
        
    }

    public function readImagem(): array {
        
    }

    public function salvarImagem(imagem $imagem): array {
        $inserImagem = 'INSERT INTO IMAGEM (URL_IMAGEM, PRIVATE_KEY_IMAGEM) VALUES (:url, :keyHash)';
        $stmt = $this->conexao->prepare($inserImagem);
        $stmt->bindValue(':url', $imagem->getUrl_imagem(), PDO::PARAM_STR);
        $stmt->bindValue(':keyHash', $imagem->getPrivate_key_imagem(), PDO::PARAM_STR);
        $success = $stmt->execute();

        $inf[] = array("HASH" => $this->conexao->lastInsertId());
        return $inf;
    }

    public function todosImagem(): array {
        
    }

    public function updateImagem(imagem $imagem): bool {
        
    }

}
