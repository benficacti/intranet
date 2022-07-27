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
        $num = $telefone->getNum_telefone();
        $sqlTelefone = 'SELECT 
                        t.ID_TELEFONE ID_TELEFONE,
                        t.NUM_TELEFONE TELEFONE,
                        g.DESCRICAO GARAGEM,
                        tt.DESCRICAO TIPO_TELEFONE,
                        o.NOME OPERADORA,
                        s.DESC_SETOR D_SETOR,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE
                        FROM telefone t 
                        INNER JOIN operadora o ON o.ID_OPERADORA = t.ID_OPERADORA
                        INNER JOIN garagem g ON g.ID_GARAGEM = t.ID_GARAGEM
                        INNER JOIN tipo_telefone tt ON tt.ID_TIPO_TELEFONE = t.ID_TIPO_TELEFONE
                        LEFT JOIN setor s ON s.ID_SETOR = t.ID_SETOR_TELEFONE 
                        WHERE t.NUM_TELEFONE LIKE "%' . $num . '%" OR s.DESC_SETOR LIKE "%' .$num.'%" ';
        $stmt = $this->conexao->query($sqlTelefone);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row < 1) {
            $inf[] = array(
                "RESULT" => "FALSE");
            return $inf;
        } else {
            return $this->hidrataReadTelefone($stmt);
        }
    }

    public function todosTelefones(): array {
        $sqlConsulta = 'SELECT 
                        t.NUM_TELEFONE TELEFONE,
                        g.DESCRICAO GARAGEM,
                        tt.DESCRICAO TIPO_TELEFONE,
                        o.NOME OPERADORA,
                        s.DESC_SETOR D_SETOR,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE
                        FROM telefone t 
                        INNER JOIN operadora o ON o.ID_OPERADORA = t.ID_OPERADORA
                        INNER JOIN garagem g ON g.ID_GARAGEM = t.ID_GARAGEM
                        INNER JOIN tipo_telefone tt ON tt.ID_TIPO_TELEFONE = t.ID_TIPO_TELEFONE
                        LEFT JOIN setor s ON s.ID_SETOR = t.ID_SETOR_TELEFONE';
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
                . ' ID_GARAGEM, ID_TIPO_TELEFONE, ID_SETOR_TELEFONE, PRIVATE_KEY_TELEFONE) VALUES(:num_tel,'
                . ' :id_op, :id_status, :id_gar, :id_tipo_tel, :id_set_tel, :privat);';
        $stmt = $this->conexao->prepare($sqlInsert);
        $stmt->bindValue(':num_tel', $telefone->getNum_telefone(), \PDO::PARAM_STR);
        $stmt->bindValue(':id_op', $telefone->getId_operadora(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_status', $telefone->getId_status(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_gar', $telefone->getId_garagem(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_tipo_tel', $telefone->getId_tipo_telefone(), \PDO::PARAM_INT);
        $stmt->bindValue(':id_set_tel', $telefone->getId_setor_telefone(), \PDO::PARAM_INT);
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

        foreach ($listaDadosTelefone as $dadosTelefone) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "TELEFONE" => $dadosTelefone->TELEFONE,
                "GARAGEM" => $dadosTelefone->GARAGEM,
                "TIPO_TELEFONE" => $dadosTelefone->TIPO_TELEFONE,
                "OPERADORA" => $dadosTelefone->OPERADORA,
                "D_SETOR" => $dadosTelefone->D_SETOR,
                "HASH_PRIVATE_TELEFONE" => $dadosTelefone->HASH_TELEFONE
            );
        }
        return $inf;
    }

    public function hidrataReadTelefone(\PDOStatement $stmt): array {
        $listaReadTelefone = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listaReadTelefone as $dadosReadTelefone) {
            $inf[] = array(
                "RESULT" => "TRUE",
                "ID_TELEFONE" => $dadosReadTelefone->ID_TELEFONE,
                "TELEFONE" => $dadosReadTelefone->TELEFONE,
                "OPERADORA" => $dadosReadTelefone->OPERADORA,
                "D_SETOR" => $dadosReadTelefone->D_SETOR,
                "GARAGEM" => $dadosReadTelefone->GARAGEM,
                "TIPO_TELEFONE" => $dadosReadTelefone->TIPO_TELEFONE,
                "HASH_PRIVATE_TELEFONE" => $dadosReadTelefone->HASH_TELEFONE
            );
        }
        return $inf;
    }

    public function listarNaoAssociadosTelefone(): array {

        $sqlConsulta = 'SELECT 
                        t.NUM_TELEFONE TELEFONE,
                        g.DESCRICAO GARAGEM,
                        tt.DESCRICAO TIPO_TELEFONE,
                        o.NOME OPERADORA,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE,
                        tu.ID_STATUS_VISUALIZACAO,
                        s.DESC_SETOR D_SETOR
                        FROM telefone t 
                        INNER JOIN operadora o ON o.ID_OPERADORA = t.ID_OPERADORA
                        INNER JOIN garagem g ON g.ID_GARAGEM = t.ID_GARAGEM
                        INNER JOIN tipo_telefone tt ON tt.ID_TIPO_TELEFONE = t.ID_TIPO_TELEFONE
                        LEFT JOIN telefone_usuario tu ON tu.ID_TELEFONE = t.ID_TELEFONE or tu.ID_TELEFONE_RAMAL = t.ID_TELEFONE
                        LEFT JOIN setor s ON s.ID_SETOR = t.ID_SETOR_TELEFONE
                        WHERE tu.ID_STATUS_VISUALIZACAO = 3 OR tu.ID_STATUS_VISUALIZACAO IS null';
        $stmt = $this->conexao->query($sqlConsulta);
        if ($stmt->rowCount() > 0) {
            return $this->hidratarListaTelefone($stmt);
        } else {
            $inf[] = array("RESULT" => "FALSE");
            return $inf;
        }
    }

    public function readSearchTelefone(telefone $telefone): array {
            
        $sqlTelefone = 'SELECT 
                        t.ID_TELEFONE ID_TELEFONE,
                        t.NUM_TELEFONE TELEFONE,
                        g.DESCRICAO GARAGEM,
                        tt.DESCRICAO TIPO_TELEFONE,
                        o.NOME OPERADORA,
                        s.DESC_SETOR D_SETOR,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE
                        FROM telefone t 
                        INNER JOIN operadora o ON o.ID_OPERADORA = t.ID_OPERADORA
                        INNER JOIN garagem g ON g.ID_GARAGEM = t.ID_GARAGEM
                        INNER JOIN tipo_telefone tt ON tt.ID_TIPO_TELEFONE = t.ID_TIPO_TELEFONE
                        LEFT JOIN setor s ON s.ID_SETOR = t.ID_SETOR_TELEFONE 
                        WHERE t.PRIVATE_KEY_TELEFONE LIKE :hasTel';
        $stmt = $this->conexao->prepare($sqlTelefone);
        $stmt->bindValue(':hasTel', $telefone->getPrivate_key_telefone(), \PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row < 1) {
            $inf[] = array(
                "RESULT" => "FALSE");
            return $inf;
        } else {
            return $this->hidrataReadTelefone($stmt);
        }
    }
    
    
    
    public function readSearchRamal(telefone $telefone): array {
            
        $sqlTelefone = 'SELECT 
                        t.ID_TELEFONE ID_TELEFONE,
                        t.NUM_TELEFONE TELEFONE,
                        g.DESCRICAO GARAGEM,
                        tt.DESCRICAO TIPO_TELEFONE,
                        o.NOME OPERADORA,
                        s.DESC_SETOR D_SETOR,
                        t.PRIVATE_KEY_TELEFONE HASH_TELEFONE
                        FROM telefone t 
                        INNER JOIN operadora o ON o.ID_OPERADORA = t.ID_OPERADORA
                        INNER JOIN garagem g ON g.ID_GARAGEM = t.ID_GARAGEM
                        INNER JOIN tipo_telefone tt ON tt.ID_TIPO_TELEFONE = t.ID_TIPO_TELEFONE
                        LEFT JOIN setor s ON s.ID_SETOR = t.ID_SETOR_TELEFONE 
                        WHERE t.NUM_TELEFONE = :numRamal ';
        $stmt = $this->conexao->prepare($sqlTelefone);
        $stmt->bindValue(':numRamal', $telefone->getNum_telefone(), \PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->rowCount();
        if ($row < 1) {
            $inf[] = array(
                "RESULT" => "FALSE");
            return $inf;
        } else {
            return $this->hidrataReadTelefone($stmt);
        }
    }

}
