<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Model\telefone;
use Rubens\Comercial\Dominio\Repositorio\RepositorioTelefone;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTelefone
 *
 * @author Rubens
 */
class PdoRepositorioTelefone implements RepositorioTelefone {

    //put your code here

    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function deleteTelefone(telefone $telefone): bool {
        
    }

    public function readTelefone(telefone $telefone): array {
        
    }

    public function todosTelefones(): array {
        $sqlConsulta = 'SELECT 
                        t.NUM_TELEFONE NUMERO,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE,
                        o.NOME OPERADORA
                        FROM telefone T INNER JOIN operadora O ON  t.ID_OPERADORA = o.ID_OPERADORA';
        $stmt = $this->conexao->query($sqlConsulta);
        return $this->hidratarListaTelefone($stmt);
    }

    public function updateTelefone(telefone $telefone): bool {

        $sqlUpdate = 'UPDATE TELEFONE SET NUM_TELEFONE =:NUM ,'
                . ' ID_OPERADORA =:ID_OPE, ID_STATUS =:ID_STATUS ,'
                . ' ID_GARAGEM =:ID_GAR, ID_TIPO_TELEFONE =:ID_TIPO_TEL ,'
                . ' PRIVATE_KEY_TELEFONE =:PRIVATE_KEY_TEL WHERE ID_TELEFONE =:ID';

        $stmt = $this->conexao->prepare($sqlUpdate);
        $stmt->bindValue(':NUM', $telefone->getNum_telefone(), PDO::PARAM_STR);
        $stmt->bindValue(':ID_OPE', $telefone->getId_operadora(), PDO::PARAM_INT);
        $stmt->bindValue(':ID_STATUS', $telefone->getId_status(), PDO::PARAM_INT);
        $stmt->bindValue(':ID_GAR', $telefone->getId_garagem(), PDO::PARAM_INT);
        $stmt->bindValue(':ID_TIPO_TEL', $telefone->getId_tipo_telefone(), PDO::PARAM_INT);
        $stmt->bindValue(':PRIVATE_KEY_TEL', $telefone->getPrivate_key_telefone(), PDO::PARAM_STR);
        $stmt->bindValue(':ID', $telefone->getId_telefone(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function createTelefone(telefone $telefone): bool {
        $sqlInsert = 'INSERT INTO TELEFONE (NUM_TELEFONE, ID_OPERADORA, ID_STATUS,'
                . ' ID_GARAGEM, ID_TIPO_TELEFONE, PRIVATE_KEY_TELEFONE) VALUES(:num_tel,'
                . ' :id_op, :id_status, :id_gar, :id_tipo_tel, :privat);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':num_tel', $telefone->getNum_telefone(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_op', $telefone->getId_operadora(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_status', $telefone->getId_status(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_gar', $telefone->getId_garagem(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_tipo_tel', $telefone->getId_tipo_telefone(), \PDO::PARAM_INT);
        $stmt->bindValue(':privat', $telefone->getPrivate_key_telefone(), \PDO::PARAM_STR);
        $success = $stmt->execute();
        if ($success) {

            //CRIAR HASH AUTOMATICAMENTE
            $table = 'TELEFONE';
            $field_set = 'PRIVATE_KEY_TELEFONE';
            $field_eguals = 'ID_TELEFONE';
            $key = $this->conexao->lastInsertId();
            $keyHash = password_hash($key, PASSWORD_BCRYPT);

            $repositorioGeneretor = new PdoRepositorioGeneretor(Persistencia\CriadorConexao::criarConexao());
            $repositorioGeneretor->generatorPrivateKeyHash($table, $field_set, $field_eguals, $key, $keyHash);
        }

        return $success;
    }

    public function salvarTelefone(telefone $telefone): bool {

        if ($telefone->getId_telefone() === null) {
            return $this->createTelefone($telefone);
        }

        return $this->updateTelefone($telefone);
    }

    public function hidratarListaTelefone(\PDOStatement $stmt) {
        $listaDadosTelefone = $stmt->fetchAll(\PDO::FETCH_OBJ);
        
        foreach ($listaDadosTelefone as $dadosTelefone){
            $inf[] = array(
                "NUMERO" => $dadosTelefone->NUMERO,
                "HASH_TELEFONE" => $dadosTelefone->HASH_TELEFONE
                );
        }
        return $inf;
    }

}
