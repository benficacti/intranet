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
use Rubens\Comercial\Model\usuario;
use Rubens\Comercial\Model\telefone;
use Rubens\Comercial\Model\nome_agenda;
use Rubens\Comercial\Model\agenda;
use Rubens\Comercial\Model\email;
use Rubens\Comercial\Model\telefoneUsuario;
use Rubens\Comercial\Model\setor;
use Rubens\Comercial\Model\comunicacao;



echo '<pre>';
$repositorio  = new PdoRepositorioEmail(CriadorConexao::criarConexao());
$repositorio1 = new PdoRepositorioUsuario(CriadorConexao::criarConexao());
$repositorio2 = new PdoRepositorioComunicacao(CriadorConexao::criarConexao());
$repositorio3 = new PdoRepositorioTelefone(CriadorConexao::criarConexao());
$repositorio4 = new PdoRepositorioAgenda(CriadorConexao::criarConexao());
$repositorio5 = new PdoRepositorioTelefoneUsuario(CriadorConexao::criarConexao());
$repositorio6 = new PdoRepositorioNomeAgenda(CriadorConexao::criarConexao());
$repositorio7 = new PdoRepositorioSetor(CriadorConexao::criarConexao());


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

$data = date('Y-m-d');
$hora = date('H-m-s');
$setor = new setor(null, 'SUPRIMENTO', 'default');
$usuario = new usuario(null, 'José Rubens', 1, 6, 'default');
/*
$comunicacao = new comunicacao(null, 'Teste', '$mensagem_com', $hora,
        $data, $hora, $data, 1, 1, 1, 1, 1, 1, 1, 1, 3, 'default');
*/
//$telefone = new telefone(null, '11972774738', 1, 1, 1, 1, 'default');

//var_dump($repositorio5->salvarTelefoneUsuario($telUsuario));
//var_dump($repositorio5->salvarTelefoneUsuario($telUsuario));
$email = new email(null, 'juridico@benficabbtt.com.br', 'default');
var_dump($repositorio->salvar($email));
var_dump($repositorio->todosEmails());
//var_dump($repositorio2->updateComunicacao($comunicacao));

echo '</pre>';

