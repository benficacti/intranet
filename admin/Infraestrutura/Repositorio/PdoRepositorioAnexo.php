<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\InRepositorioAnexo;
use Rubens\Comercial\Model\anexo;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioAnexo
 *
 * @author Rubens
 */
class PdoRepositorioAnexo implements InRepositorioAnexo {

    //put your code here
    private PDO $conexao;

    function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createAnexo(anexo $anexo): array {
        $insertAnexo = 'INSERT INTO ANEXO (URL_ANEXO, PRIVATE_KEY_ANEXO)'
                . ' VALUES (:urlAnexo, :hashKey);';
        $stmt = $this->conexao->prepare($insertAnexo);
        $stmt->bindValue(':urlAnexo', $anexo->getUrl_anexo(), \PDO::PARAM_STR);
        $stmt->bindValue(':hashKey', $anexo->getPrivate_key_anexo(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        $anexo->setId_anexo($this->conexao->lastInsertId());
        $inf[] = array(
            "RESULT" => "TRUE",
            "HASH_ID" => $this->conexao->lastInsertId()
        );
        return $inf;
    }

    public function readAnexo(anexo $anexo): array {
        
    }

    public function salvarAnexo(anexo $anexo): array {
        if($anexo->getId_anexo() == null){
            return $this->createAnexo($anexo);
        }
    }

    public function todosAnexo(): array {
        
    }

    public function updateAnexo(anexo $anexo): array {
        
    }

}
