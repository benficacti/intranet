<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Rubens\Comercial\Infraestrutura\Repositorio;

use Rubens\Comercial\Dominio\Repositorio\InReposistorioTipoComunicacao;
use Rubens\Comercial\Model\tipoComunicacao;
use Rubens\Comercial\Infraestrutura\Persistencia;
use PDO;

/**
 * Description of PdoRepositorioTipoComunicacao
 *
 * @author Rubens
 */
class PdoRepositorioTipoComunicacao implements InReposistorioTipoComunicacao {

    //put your code here
    private PDO $conexao;

    function __construct(PDO $conexao) {
        $this->conexao = $conexao;
    }

    public function readTiposComunicacao(tipoComunicacao $tipoComunicacao): array {
        
    }

    public function todosTiposComunicacao(): array {
        $sqlTiposComunicaco = 'SELECT * FROM TIPO_COMUNICACAO;';
        $stmt = $this->conexao->query($sqlTiposComunicaco);
        $stmt->execute();
        return $this->hidrataTiposComunicacao($stmt);
    }

    public function hidrataTiposComunicacao(\PDOStatement $stmt) {

        $listarTiposComunicacao = $stmt->fetchAll(\PDO::FETCH_OBJ);

        foreach ($listarTiposComunicacao as $dadosTiposComunicacao) {
            $inf[] = array(
                "HASH_ID" => $dadosTiposComunicacao->ID_TIPO_COMUNICACAO,
                "TIPO_COMUNICACAO" => $dadosTiposComunicacao->DESC_COMUNICACAO
            );
        }
        return $inf;
    }

}
