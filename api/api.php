<?php


  require_once './autoload.php';

  use Rubens\Comercial\Infraestrutura\Persistencia\CriadorConexao;

  use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefone;
  use Rubens\Comercial\Model\telefone;


  $repositorio44 = new PdoRepositorioTelefone(CriadorConexao::criarConexao());

 
$request = (isset($_POST['request'])) ? $_POST['request'] : null;


if ($request != null && $request == "contato") {
    
    
    $num_telefone = (null != (filter_input(INPUT_POST, 'tel'))) ? filter_input(INPUT_POST, 'tel') : null;
    
    $telefone = new telefone(null, $num_telefone, 1, 1, 1, 1, '$private_key_telefone');
    $repositorio44->salvarTelefone($telefone);
}




