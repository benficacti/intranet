<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioEmailEnviados;
use Rubens\Comercial\Model\emailEnviados;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioEmailEnviado
 *
 * @author Rubens
 */
class PdoRepositorioEmailEnviado implements RepositorioEmailEnviados {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createEmailEnviados(emailEnviados $emailEnviados): bool {
        $sqlInsert = 'INSERT INTO EMAIL_ENVIADOS (MENSAGENS, ID_CANDIDATOS_EMAIL, PRIVATE_KEY_EMAIL_ENVIADOS)'
                . 'VALUES(:msn, :idCand, :hash);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':msn', $emailEnviados->getMensagens(), \PDO::PARAM_STR);
        $stmt->bindValue(':idCand', $emailEnviados->getId_candidatos(), \PDO::PARAM_INT);
        $stmt->bindValue(':hash', $emailEnviados->getPrivate_key_email_enviados(), \PDO::PARAM_STR);

        $success = $stmt->execute();

        if ($success) {
            $emailEnviados->setId_email_enviados($this->conexao->lastInsertId());
        }
        return $success;
    }

    public function readEmailEnviados(): array {
        
    }

    public function salvarEmailEnviados(emailEnviados $emailEnviados): bool {
        if($emailEnviados->getId_email_enviados() === null){
            return $this->createEmailEnviados($emailEnviados);
        }
    }

    public function todosEmailEnviados(): array {
        
    }

}
