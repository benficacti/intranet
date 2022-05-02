<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PdoRepositorioEmail
 *
 * @author Rubens
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\email;
use Rubens\Comercial\Dominio\Repositorio\RepositorioEmail;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

//Classe PdoRepositorioemail está implementando a Interface RepositorioEmail
class PdoRepositorioEmail implements RepositorioEmail {

    //put your code here
    //CRIAR CONEXÃO (atributo privado do tipo PDO)
    private PDO $conexao;

    /* Injeção de código, informando que tem uma dependencia da conexão abaixo, para que todos os métodos abaixo
     * funcionem.  Essa injeção esta acontecendo diretamente no Metódo Construtor
     */

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function todosEmails(): array {
        $sqlConsulta = "SELECT * FROM EMAIL";
        $stmt = $this->conexao->query($sqlConsulta);
        return $this->hidratarListaEmail($stmt);
    }

    public function salvar(email $email): bool {
        if ($email->getId_email() === null) {
            return $this->createEmail($email);
        }

        return $this->updateEmail($email);
    }

    public function createEmail(email $email): bool {
        $sqlInsert = "INSERT INTO EMAIL (ENDERECO, PRIVATE_KEY_EMAIL) VALUES (:nome, :token);";
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':nome', $email->getEndereco(), PDO::PARAM_STR);
        $stmt->bindValue(':token', $email->getPrivate_email(), PDO::PARAM_STR);
        $sucesso = $stmt->execute();

        if ($sucesso) {
            $email->setId_email($this->conexao->lastInsertId());
            
            //CRIAR HASH AUTOMATICAMENTE
            $table = 'EMAIL';
            $field_set = 'PRIVATE_KEY_EMAIL';
            $field_eguals = 'ID_EMAIL';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }
        
        return $sucesso;
    }
    
    public function updateEmail(email $email): bool {
        $sqlUpdate = "UPDATE EMAIL SET ENDERECO = :nome, PRIVATE_KEY_EMAIL = :PRIVATE_KEY_EMAIL WHERE id_email = :id;";
        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':nome', $email->getEndereco(), PDO::PARAM_STR);
        $stmt->bindValue(':PRIVATE_KEY_EMAIL', $email->getPrivate_email(), PDO::PARAM_STR);
        $stmt->bindValue(':id', $email->getId_email(), PDO::PARAM_INT);
        
        return $stmt->execute();
    }

    public function readEmail(email $email): array {
        $sqlConsulta = "SELECT * FROM email WHERE id_email = :id;";
        $stmt = $this->conexao->prepare($sqlConsulta);
        $stmt->bindValue(':id', $email->getId_email(), PDO::PARAM_INT);
        $stmt->execute();

        return $this->hidratarListaEmail($stmt);
    }

    public function deleteEmail(email $email): bool {
        $stmt = $this->conexao->prepare('DELETE FROM email WHERE id_email = ?;');
        $stmt->bindValue(1, $email->getId_email(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function hidratarListaEmail(\PDOStatement $stmt): array {
        $listaDadosEmails = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listaDadosEmails as $dadosEmail) {
            $inf[] = array(
                "ID" => $dadosEmail->ID_EMAIL,
                "ENDERECO" => $dadosEmail->ENDERECO,
                "PRIVATE_EMAIL" => $dadosEmail->PRIVATE_KEY_EMAIL,
            );
        }
        return $inf;
    }

    //HIDRATAR OS DADOS
}
