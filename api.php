<?php
  
    
  require_once './autoload.php';
  use Rubens\Comercial\Infraestrutura\Persistencia\CriadorConexao;
  use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefone;
  use Rubens\Comercial\Model\telefone;
  
  
  $repositorio44 = new PdoRepositorioTelefone(CriadorConexao::criarConexao());
  
  
$request = (isset($_POST['request'])) ? $_POST['request'] : null;


if ($request != null && $request == "cadastro_telefone") {
    
    $num_telefone = (null != (filter_input(INPUT_POST, 'tel'))) ? filter_input(INPUT_POST, 'tel') : null;
    $id_operadora = (null != (filter_input(INPUT_POST, 'operadora'))) ? filter_input(INPUT_POST, 'operadora') : null;
    $id_garagem = (null != (filter_input(INPUT_POST, 'garagem'))) ? filter_input(INPUT_POST, 'garagem') : null;
    $id_tipo_telefone = (null != (filter_input(INPUT_POST, 'tipo_telefone'))) ? filter_input(INPUT_POST, 'tipo_telefone') : null;
    $id_status = 1;
    $telefone = new telefone(null, $num_telefone, $id_operadora, $id_status, $id_garagem, $id_tipo_telefone, '$private_key_telefone');
    $repositorio44->salvarTelefone($telefone);
    
    
}

if($request != null && $request == "teste"){
    $inf[]=array(
        "RESULT"=>"TRUE",
        "NOME"=>"JOSE RUBENS",
        "ID"=>"001"
    );
    echo json_encode($inf);
}



