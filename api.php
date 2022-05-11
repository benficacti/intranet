<?php

require_once './autoload.php';

use Rubens\Comercial\Infraestrutura\Persistencia\CriadorConexao;
//TELEFONE
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefone;
use Rubens\Comercial\Model\telefone;

$repositorio_telefone = new PdoRepositorioTelefone(CriadorConexao::criarConexao());

//EMAIL
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioEmail;
use Rubens\Comercial\Model\email;

$repositorio_email = new PdoRepositorioEmail(CriadorConexao::criarConexao());

//SETOR
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioSetor;
use Rubens\Comercial\Model\setor;
//OPERADORA
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioOperadora;
use Rubens\Comercial\Model\operadora;
//TIPO TELEFONE
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTipoTelefone;
use Rubens\Comercial\Model\tipoTelefone;
//AGENDA
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioAgenda;
use Rubens\Comercial\Model\agenda;

$repositorio_agenda = new PdoRepositorioAgenda(CriadorConexao::criarConexao());

//NOME_AGENDA
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioNomeAgenda;
use Rubens\Comercial\Model\nome_agenda;

$repositorio_nome_agenda = new PdoRepositorioNomeAgenda(CriadorConexao::criarConexao());

//TELEFONE_USUARIO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTelefoneUsuario;
use Rubens\Comercial\Model\telefoneUsuario;

$repositorio_telefone_usuario = new PdoRepositorioTelefoneUsuario(CriadorConexao::criarConexao());

date_default_timezone_set('America/Fortaleza');
$post = file_get_contents('php://input');
/* CONNECTIONS */

/* MODELS */

/* FUNCTIONS CLASS */


if (isset($_SERVER["HTTP_ORIGIN"])) {
    // You can decide if the origin in $_SERVER['HTTP_ORIGIN'] is something you want to allow, or as we do here, just allow all
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
} else {
    //No HTTP_ORIGIN set, so we allow any. You can disallow if needed here
    header("Access-Control-Allow-Origin: *");
}
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 600");    // cache for 10 minutes

if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"])) {
        header("Access-Control-Allow-Methods: POST GET PUT DELETE"); //Make sure you remove those you do not want to support
    }
    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"])) {
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
    exit(0);
}

function isValidJSON($str) {
    json_decode($str);
    return json_last_error() == JSON_ERROR_NONE;
}

$json_params = "[" . json_encode($_POST) . "]";

if (strlen($json_params) > 0 && isValidJSON($json_params)) {

    foreach (json_decode($json_params) as $json) {

        if (isset($json->request) && strlen($json->request) > 0) {
            switch ($json->request) {

                case "teste":
                    $info[] = array(
                        'RESULT' => "TRUE",
                        'NOME' => "JOSÉ RUBENS FERREIRA",
                        'EMAIL' => "jose.rubens@benficabbtt.com.br"
                    );
                    break;

                case "cadastro_telefone":

                    $telefone = new telefone(null, $json->tel, $json->operadora, 1, $json->garagem, $json->tipo_telefone, '$private_key_telefone');
                    $info[] = ( $repositorio_telefone->salvarTelefone($telefone) ) ? array("RESULT" => true) : array("RESULT" => false);

                    break;
                case "search_nome_agenda":
                    $info = $repositorio_nome_agenda->todosNomeAgenda();
                    break;
                case "listar_email":
                    $email = new email(null, $json->nome, '$private_email');
                    $info = $repositorio_email->readEmailSearch($email);
                    break;
                case "cadastrar_email":
                    $email = new email(null, $json->email, '$private_email');
                    $info[] = ( $repositorio_email->createEmail($email) ) ? array("RESULT" => true) : array("RESULT" => false);
                    break;
                case "listar_telefone":
                    /*
                      $telefone = new telefone(null, $json_params, null, null, null,
                      null, '$private_key_telefone');
                     */
                    $info = $repositorio_telefone->todosTelefones();
                    break;
                case "search_setor":
                    $repositorio_setor = new PdoRepositorioSetor(CriadorConexao::criarConexao());
                    $info = $repositorio_setor->todosSetores();
                    break;
                case "search_operadora":
                    $repositorio_operadora = new PdoRepositorioOperadora(CriadorConexao::criarConexao());
                    $info = $repositorio_operadora->todasOperadoras();
                    break;
                case "search_tipo_telefone":
                    $repositorio_tipo_telefone = new PdoRepositorioTipoTelefone(CriadorConexao::criarConexao());
                    $info = $repositorio_tipo_telefone->todosTiposTelefone();
                    break;
                case "salvar_telefone":

                    $id_status = 1; //ATIVO

                    $telefone = new telefone(null, $json->telefone, $json->operadora, $id_status, $json->garagem,
                            $json->tipo_telefone, '$private_key_telefone');
                    $info [] = ($repositorio_telefone->salvarTelefone($telefone)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    break;
                case "search_telefone":
                    $info = $repositorio_telefone->listarNaoAssociadosTelefone();
                    break;
                case "search_email":
                    $info = $repositorio_email->todosEmails();
                    break;
                case "register_agenda":

                    $id_telefone = '';
                    $id_nome_agenda = '';
                    $id_email = '';
                    $id_telefone_usuario = '';

                    $email = new email(null, $json->email, '$private_email');
                    foreach ($repositorio_email->readEmailSearch($email) as $key => $value) {
                        $id_email = $value['ID'];
                    }


                    $nome_agenda = new nome_agenda(null, $json->nome, null);
                    foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_nome_agenda = $value['ID_NOME_AGENDA'];
                        } else {
                            $repositorio_nome_agenda->salvarNomeAgenda($nome_agenda);

                            foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key2 => $value2) {
                                $id_nome_agenda = $value['ID_NOME_AGENDA'];
                            }
                        }
                    }

                    $telefone = new telefone(null, $json->telefone, null, null, null, null, null);
                    foreach ($repositorio_telefone->readTelefone($telefone) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_telefone = $value['ID_TELEFONE'];
                        }
                    }

                    $id_status_visualizacao = 1; //ASSOCIADO
                    $telUsuario = new telefoneUsuario(null, $id_telefone, $id_status_visualizacao, $id_nome_agenda);
                    $repositorio_telefone_usuario->salvarTelefoneUsuario($telUsuario);
                    foreach ($repositorio_telefone_usuario->readTelefoneUsuario($telUsuario) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_telefone_usuario = $value['ID_TELEFONE_USUARIO'];
                        }
                    }



                    $agenda = new agenda(null, $id_telefone_usuario, $id_nome_agenda, $json->status_agenda, $id_email, null);
                    $info = ($repositorio_agenda->salvarAgenda($agenda)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    break;

                case "mostrar_telefone_associado":
                    $agenda = new agenda(null, $id_telefone_usuario, $id_nome_agenda, $json->status_agenda, $id_email, null);
                    $repositorio_agenda->readAgenda($agenda);
                    break;
                default:
                    $info[] = array(
                        'RESULT' => "false",
                        'MENSAGEM' => "Request não encontrado!"
                    );
                    break;
            }
        } else {
            $info[] = array(
                'RESULT' => "false",
                'MENSAGEM' => "Request não encontrado!"
            );
        }
    }

    echo json_encode($info);
} else {
    $info[] = array(
        'RESULT' => "false",
        'ERROR' => "JSON_INVALIDO"
    );
    $myJson = json_encode($info);
    echo $myJson;
}