<?php

require_once './autoload.php';

use Rubens\Comercial\Infraestrutura\Persistencia\CriadorConexao;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioEmail;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioComunicacao;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefone;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioAgenda;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefoneUsuario;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioNomeAgenda;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioSetor;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioUsuario;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioMaquina;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioAlertaMaquina;
use Rubens\Comercial\Model\usuario;
use Rubens\Comercial\Model\telefone;
use Rubens\Comercial\Model\nome_agenda;
use Rubens\Comercial\Model\agenda;
use Rubens\Comercial\Model\email;
use Rubens\Comercial\Model\telefoneUsuario;
use Rubens\Comercial\Model\setor;
use Rubens\Comercial\Model\comunicacao;
use Rubens\Comercial\Model\maquina;
use Rubens\Comercial\Model\alerta_maquina;

$repositorioEmail = new PdoRepositorioEmail(CriadorConexao::criarConexao());
$repositorio1 = new PdoRepositorioUsuario(CriadorConexao::criarConexao());
$repositorioComunicacao = new PdoRepositorioComunicacao(CriadorConexao::criarConexao());
$repositorio3 = new PdoRepositorioTelefone(CriadorConexao::criarConexao());
$repositorio4 = new PdoRepositorioAgenda(CriadorConexao::criarConexao());
$repositorio5 = new PdoRepositorioTelefoneUsuario(CriadorConexao::criarConexao());
$repositorio6 = new PdoRepositorioNomeAgenda(CriadorConexao::criarConexao());
$repositorioSetor = new PdoRepositorioSetor(CriadorConexao::criarConexao());
$repositorioMaquina = new PdoRepositorioMaquina(CriadorConexao::criarConexao());
$repositorioAlertaMaquina = new PdoRepositorioAlertaMaquina(CriadorConexao::criarConexao());

/*
  $telefone = new telefone(null, '1564654984', 1, 1, 1, 1, '$private_key_telefone');
  $nome = new nome_agenda(null, '$nome_agenda', '$private_key_nome_agenda');
  $email = new email(null, 'jose.rubensf@benficabbtt.com.br', '$private_email');
  $agenda  = new agenda(null, 1, 1, 1, 1, 'FFS');
  var_dump($repositorio4->salvarAgenda($agenda, $telefone, $nome, $email));
 */

/*
  $telUsuario = new telefoneUsuario(null, 49, 2, 1);
  $nome_agenda = new nome_agenda(1, 'Jose Rubens F.', 'G$ga54D8sTkdjh*&82');
 */

$data = date('Y/m/d');

$hora = date('H-m-s');
//$setor = new setor(null, 'PLANTÃO', null);
//$usuario = new usuario(null, 'José Rubens', 1, 6, 'default');
/*
  $comunicacao = new comunicacao(null, 'Teste', '$mensagem_com', $hora,
  $data, $hora, $data, 1, 1, 1, 1, 1, 1, 1, 1, 3, 'default');
 */
//$telefone = new telefone(null, '11972774738', 1, 1, 1, 1, 'default');
//var_dump($repositorio5->salvarTelefoneUsuario($telUsuario));
//var_dump($repositorio5->salvarTelefoneUsuario($telUsuario));
/*
  $email = new email(null, 'juridico@benficabbtt.com.br', 'default');
  var_dump($repositorio->salvar($email));
  var_dump($repositorio->todosEmails());
 */
//var_dump($repositorio2->updateComunicacao($comunicacao));
/*
  $desc_setor = 'TRAFEGO';
  $setor = new setor(null, $desc_setor, null);
  $repositorio7->salvarSetor($setor);
 */

  $id_operadora = 2;
  $id_status = 1;
  $id_garagem = 1;
  $id_tipo_telefone = 1;
  $id_setor_telefone = 1;

  $arquivo = 'files/email.csv';
  $handle = fopen($arquivo, "r");
  $header = fgetcsv($handle, 100000, ";");
  while ($row = fgetcsv($handle, 100000, ";")) {
  $nota[] = array_combine($header, $row);
  }
  foreach ($nota as $chave => $valor) {
  echo $carteira[$chave] = $valor['email'].'<br/>';
  $endereco = $valor['email'];
  $email = new email(null, $endereco, null);
  $repositorioEmail->salvar($email);
  }
  //print_r($nota);

  fclose($handle);
 
//var_dump($repositorio->todosEmails());

/* RECONHECER DIAS DA SEMANA
  $data1 = date('D');
  $uteis = array(
  "Sun" => '3',
  "Mon" => '1',
  "Tue" => '1',
  "Wed" => '1',
  "Thu" => '1',
  "Fri" => '1',
  "Sat" => '2',
  );
  $tipo_dia_operacao =  $uteis["$data1"];
  echo $data;
 */


/*
$desc_maquina = filter_input(INPUT_GET, 'hash');

$id_maquina_alerta = '';

$maquina = new maquina(null, $desc_maquina, null);
foreach ($repositorioMaquina->readMaquina($maquina) as $key => $value) {
    if ($value['RESULT'] == 'TRUE') {
        $id_maquina_alerta = $value['HASH_ID'];
    } else {
        $repositorioMaquina->salvaMaquina($maquina);
        foreach ($repositorioMaquina->readMaquina($maquina) as $key => $value) {
            if ($value['RESULT'] == 'TRUE') {
                $id_maquina_alerta = $value['HASH_ID'];
            }
        }
    }
}



foreach ($repositorioComunicacao->alertasComunicacoes() as $key => $value) {
    if ($value['RESULT'] == 'TRUE') {
        $id_comunicacao_alerta = $value['HASH_ID'];
        $alertaMaquina = new alerta_maquina(null, $id_maquina_alerta, $id_comunicacao_alerta, null, null, null);
        foreach ($repositorioAlertaMaquina->readAlertaMaquina($alertaMaquina) as $key2 => $value2) {

            $inff[] = array(
                'ID' => $value['MSN'],
                'STATUS' => $value2 ['RESULT']
            );
        }
    }else{
        $inff[] = array(
                'ID' => '',
                'STATUS' => 'TRUE'
            );
    }
}

 */

//echo json_encode($inff);

