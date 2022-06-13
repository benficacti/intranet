<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\RepositorioVagasEmprego;
use Rubens\Comercial\Model\vagasEmprego;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioVagas
 *
 * @author Rubens
 */
class PdoRepositorioVagas implements RepositorioVagasEmprego {

    //put your code here
    private PDO $conexao;

    public function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function createVagasEmprego(vagasEmprego $vagas): array {
        $insertVagas = 'INSERT INTO VAGAS_EMPREGO(ID_PERIODO_TRABALHO, ID_SETOR, ID_TIPO_VAGA, DETALHE) '
                . 'VALUES(:idPerido, :idSetor, :idTipoVaga, :detalhe)';
        $stmt = $this->conexao->prepare($insertVagas);
        $stmt->bindValue(':idPerido', $vagas->getId_periodo_trabalho(), PDO::PARAM_INT);
        $stmt->bindValue(':idSetor', $vagas->getId_setor(), PDO::PARAM_INT);
        $stmt->bindValue(':idTipoVaga', $vagas->getId_tipo_vaga(), PDO::PARAM_INT);
        $stmt->bindValue(':detalhe', $vagas->getDetalhe(), PDO::PARAM_STR);
        $sucess = $stmt->execute();

        if ($sucess) {
            $vagas->setId_vagas_emprego($this->conexao->lastInsertId());
        }
        $inf [] = array(
            "RESULT" => "TRUE",
            "HASH_ID" => $this->conexao->lastInsertId());
        return $inf;
    }

    public function delete(vagasEmprego $vagas): bool {
        
    }

    public function readVagasEmprego(): array {
        
    }

    public function salvarVagasEmprego(vagasEmprego $vagas): array {

        if ($vagas->getId_vagas_emprego() == null) {
            return $this->createVagasEmprego($vagas);
        }
        return $this->updateVagasEmprego($vagas);
    }

    public function todosVagasEmprego(): array {

        $sqlVagasEmprego = 'SELECT * FROM VAGAS_EMPREGO';
        $stmt = $this->conexao->prepare($sqlVagasEmprego);
        $stmt->execute();

        return $this->hidrataVagasEmprego($stmt);
    }

    public function updateVagasEmprego(vagasEmprego $vagas): bool {
        $updateVagasEmprego = 'UPDATE VAGAS_EMPREGO  SET URL_ANEXO = :url_hash WHERE ID_VAGAS_EMPREGO = :idVagas;';
        $stmt = $this->conexao->prepare($updateVagasEmprego);
        $stmt->bindValue(':url_hash', $vagas->getUrl_anexo(), PDO::PARAM_INT);
        $stmt->bindValue(':idVagas', $vagas->getId_vagas_emprego(), PDO::PARAM_INT);
        $sucesso = $stmt->execute();
        return $sucesso;
    }

    public function hidrataVagasEmprego(\PDOStatement $stmt) {
        $listraHidratavagasEmprego = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach ($listraHidratavagasEmprego as $dadosVagas) {
            $inf[] = array(
                "PERIODO" => $dadosVagas->PERIODO,
                "FUNCAO" => $dadosVagas->FUNCAO,
                "SETOR" => $dadosVagas->SETOR,
                "DESC_VAGA" => $dadosVagas->DESC_VAGA
            );
        }
        return $inf;
    }

    public function updateVagasEmpregoDetalhe(vagasEmprego $vagas): bool {
        $updateVagasEmprego = 'UPDATE VAGAS_EMPREGO  SET DETALHE = :detail WHERE ID_VAGAS_EMPREGO = :idVagas;';
        $stmt = $this->conexao->prepare($updateVagasEmprego);
        $stmt->bindValue(':detail', $vagas->getDetalhe(), PDO::PARAM_STR);
        $stmt->bindValue(':idVagas', $vagas->getId_vagas_emprego(), PDO::PARAM_INT);
        $sucesso = $stmt->execute();
        return $sucesso;
    }

}
