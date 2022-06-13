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

$repositorio_setor = new PdoRepositorioSetor(CriadorConexao::criarConexao());

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

//TIPO_VAGA
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioTipoVaga;
use Rubens\Comercial\Model\tipoVaga;

$repositorio_tipo_vaga = new PdoRepositorioTipoVaga(CriadorConexao::criarConexao());

//VAGAS_EMPREGO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioVagas;
use Rubens\Comercial\Model\vagasEmprego;

$repositorio_vagas_emprego = new PdoRepositorioVagas(CriadorConexao::criarConexao());

//PERIODO_TRABALHO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioPeriodo;
use Rubens\Comercial\Model\periodo;

$repositorio_periodo_trabalho = new PdoRepositorioPeriodo(CriadorConexao::criarConexao());

//EMPRESA
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioEmpresa;
use Rubens\Comercial\Model\empresa;

$repositorio_empresa = new PdoRepositorioEmpresa(CriadorConexao::criarConexao());

//COMUNICACAO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioComunicacao;
use Rubens\Comercial\Model\comunicacao;

$repositorio_comunicacao = new PdoRepositorioComunicacao(CriadorConexao::criarConexao());

//CANDIDATO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioCandidato;
use Rubens\Comercial\Model\candidato;

$repositorio_candidato = new PdoRepositorioCandidato(CriadorConexao::criarConexao());

//EMAIL_ENVIADO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioEmailEnviado;
use Rubens\Comercial\Model\emailEnviados;

$repositorio_email_enviado = new PdoRepositorioEmailEnviado(CriadorConexao::criarConexao());

//LOGIN
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioLogin;
use Rubens\Comercial\Model\login;

$repositorio_login = new PdoRepositorioLogin(CriadorConexao::criarConexao());

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
                    $nome_agenda = new nome_agenda(null, $json->nome_agenda, null);
                    if ($json->nome_agenda == '') {
                        $info = $repositorio_nome_agenda->todosNomeAgenda();
                    } else {
                        $info = $repositorio_nome_agenda->readNomeAgenda($nome_agenda);
                    }
                    break;
                case "listar_email":
                    $email = new email(null, $json->nome, null);
                    if ($email->getEndereco() == '') {
                        $info = $repositorio_email->todosEmails();
                    } else {
                        $info = $repositorio_email->readEmailSearch($email);
                    }
                    break;
                case "cadastrar_email":
                    $email = new email(null, $json->email, '$private_email');
                    $info[] = ( $repositorio_email->createEmail($email) ) ? array("RESULT" => true) : array("RESULT" => false);
                    break;
                case "search_vaga":
                    $tipoVaga = new tipoVaga(null, $json->vaga);
                    if ($tipoVaga->getDesc_tipo_vaga() == '') {
                        $info = $repositorio_tipo_vaga->todosTiposVaga();
                    } else {
                        $info = $repositorio_tipo_vaga->readTipoVaga($tipoVaga);
                    }

                    break;
                case "publicar_vaga":
                    $vagas = new vagasEmprego(null, $json->periodo, $json->setor, $json->vaga, $json->descricao, null);

                    $vagas_emprego = $repositorio_vagas_emprego->salvarVagasEmprego($vagas);
                    foreach ($vagas_emprego as $key => $value) {

                        $id_vagas_emprego = $value['HASH_ID'];
                    }

                    $titulo_com = 'VAGAS DE EMPREGO';
                    $mensagem_com = null;
                    $id_login_com = null;
                    $id_tipo_com = 1; //VAGAS DE EMPREGO
                    $id_nivel_prioridade_com = 1; //BAIXA (NÃO CRIAR POP UP)
                    $id_status_com = 1; //ATIVO
                    $comunicacao = new comunicacao(null, $titulo_com, $mensagem_com, null, null, $json->hora_expirar, $json->data_expirar, $id_login_com, $id_tipo_com, $id_nivel_prioridade_com, null, null, null, $json->empresa, $id_status_com, $id_vagas_emprego, null, null);
                    if ($repositorio_comunicacao->salvar($comunicacao)) {
                        $info = $vagas_emprego;
                    }
                    break;
                case "search_periodo":
                    $info = $repositorio_periodo_trabalho->todosPeriodo();
                    break;
                case "listar_telefone":


                    $telefone = new telefone(null, $json->num_tel, null, null, null, null, null, null);
                    if ($telefone->getNum_telefone() == '') {
                        $info = $repositorio_telefone->todosTelefones();
                    } else {
                        $info = $repositorio_telefone->readTelefone($telefone);
                    }


                    break;
                case "search_setor":
                    $setor = new setor(null, $json->setor, null);
                    if ($setor->getDesc_setor() == "") {
                        $info = $repositorio_setor->todosSetores();
                    } else {
                        $info = $repositorio_setor->seachReadSetor($setor);
                    }


                    break;
                case "search_empresa":
                    $info = $repositorio_empresa->todosEmpresa();
                    break;
                case "search_vagas_publicadas":
                    $info = $repositorio_comunicacao->todasComunicacoes();
                    break;
                case "search_vagas":
                    $comunicacao = new comunicacao(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $json->cod);
                    $info = $repositorio_comunicacao->readComunicaco($comunicacao);
                    break;
                case "update_descricao":
                    $comunicacao = new comunicacao(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $json->hash_vagas_emprego);
                    foreach ($repositorio_comunicacao->readComunicaco($comunicacao) as $key => $value) {
                        $id_vagas_emprego = $value['HASH_ID_VAGAS'];
                    }
                    $vagas = new vagasEmprego($id_vagas_emprego, null, null, null, $json->descricaoUpdate, null);
                    $info[] = ($repositorio_vagas_emprego->updateVagasEmpregoDetalhe($vagas)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    break;
                case "search_candidato_especifico":
                    $candidato = new candidato(null, null, null, null, null, null, null, $json->cod);
                    $info = $repositorio_candidato->readCandidatos($candidato);
                    break;
                case "search_candidato":
                    $candidato = new candidato($json->cod_filter, null, null, null, null, null, null, null);
                    if ($candidato->getId_candidato() > 0) {
                        $info = $repositorio_candidato->filtrarCandidatos($candidato);
                    } else {
                        $info = $repositorio_candidato->todosCandidatos();
                    }

                    break;
                case "disparar_email_candidato":
                    $emailEnviados = new emailEnviados(null, $json->msn_email, $json->candidato, null);
                    $info[] = ($repositorio_email_enviado->salvarEmailEnviados($emailEnviados)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    break;
                case "alter_status_candidato":
                    $candidato = new candidato($json->candidato, null, null, null, null, null, $json->status_candidato, null);
                    $info[] = ($repositorio_candidato->updateCandidatos($candidato)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
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


                    $telefone = new telefone(null, $json->telefone, $json->operadora, $id_status, $json->garagem, $json->tipo_telefone, $json->setor, null);
                    $info [] = ($repositorio_telefone->salvarTelefone($telefone)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    break;
                case "search_telefone":
                    $info = $repositorio_telefone->listarNaoAssociadosTelefone();
                    break;
                case "search_email":
                    $email = new email(null, $json->email, null);
                    if ($email->getEndereco() == "") {
                        $info = $repositorio_email->todosEmails();
                    } else {
                        $info = $repositorio_email->readEmailSearch($email);
                    }
                    break;
                case "register_agenda":

                    $id_telefone = '';
                    $id_nome_agenda = '';
                    $id_email = '';
                    $id_telefone_usuario = '';
                    $id_setor = '';

                    $nome_agenda = new nome_agenda(null, $json->nome, null);
                    foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_nome_agenda = $value['ID_NOME_AGENDA'];
                        } else {
                            if ($repositorio_nome_agenda->salvarNomeAgenda($nome_agenda))
                                foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key2 => $value2) {
                                    $id_nome_agenda = $value2['ID_NOME_AGENDA'];
                                }
                        }
                    }




                    $setor = new setor(null, null, $json->setor);
                    foreach ($repositorio_setor->readSetor($setor) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_setor = $value['HASH_ID'];
                        }
                    }




                    //VERIFICAR SE EMAIL E TELEFONE EXISTEM
                    if (!empty($json->email) and!empty($json->telefone)) {


                        $email = new email(null, null, $json->email);
                        foreach ($repositorio_email->readEmailSearch($email) as $key => $value) {
                            $id_email = $value['ID'];
                        }


                        $telefone = new telefone(null, null, null, null, null, null, null, $json->telefone);
                        foreach ($repositorio_telefone->readSearchTelefone($telefone) as $key => $value) {
                            if ($value['RESULT'] == 'TRUE') {
                                $id_telefone = $value['ID_TELEFONE'];
                            }
                        }


                        $telUsuario = new telefoneUsuario(null, $id_telefone, $json->status_agenda, $id_nome_agenda);
                        $repositorio_telefone_usuario->salvarTelefoneUsuario($telUsuario);
                        foreach ($repositorio_telefone_usuario->readTelefoneUsuario($telUsuario) as $key => $value) {
                            if ($value['RESULT'] == 'TRUE') {
                                $id_telefone_usuario = $value['ID_TELEFONE_USUARIO'];
                            }
                        }



                        //$agenda = new agenda(null, $id_telefone_usuario, $id_nome_agenda, $json->status_agenda, $id_email, null);
                        $agenda = new agenda(null, $id_telefone_usuario, $id_nome_agenda, $json->status_agenda, $id_email, $id_setor, $id_telefone_usuario);
                        $info = ($repositorio_agenda->salvarAgenda($agenda)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    } else {
                        $info[] = array("RESULT" => "TRUE");
                    }


                    break;

                case "mostrar_telefone_associado":
                    $nome_agenda = new nome_agenda(null, $json->nome, null);
                    foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_nome_agenda = $value['ID_NOME_AGENDA'];
                        }
                    }
                    $agenda = new agenda(null, null, $id_nome_agenda, null, null, null, null);
                    $info = $repositorio_agenda->readAgenda($agenda);
                    break;

                case "mostrar_email_associado":
                    $nome_agenda = new nome_agenda(null, $json->nome, null);
                    foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_nome_agenda = $value['ID_NOME_AGENDA'];
                        }
                    }
                    $agenda = new agenda(null, null, $id_nome_agenda, null, null, null, null);
                    $info = $repositorio_agenda->readAgenda($agenda);
                    break;
                case "mostrar_setor_associado":
                    $nome_agenda = new nome_agenda(null, $json->nome, null);
                    foreach ($repositorio_nome_agenda->readNomeAgenda($nome_agenda) as $key => $value) {
                        if ($value['RESULT'] == 'TRUE') {
                            $id_nome_agenda = $value['ID_NOME_AGENDA'];
                        }
                    }
                    $agenda = new agenda(null, null, $id_nome_agenda, null, null, null, null);
                    $info = $repositorio_agenda->readAgenda($agenda);
                    break;
                default:
                    $info[] = array(
                        'RESULT' => "false",
                        'MENSAGEM' => "Request não encontrado!"
                    );
                    break;
                case "listar_agenda":
                    if (empty($json->nome)) {
                        $info = $repositorio_agenda->todosAgenda();
                    } else {
                        $info = $repositorio_agenda->readSearchAgenda($json->nome);
                    }

                    break;
                case "auth_user":
                    $login = new login(null, $json->user, $json->password, null, null, null, null);
                    $info = $repositorio_login->readLogin($login);

                    break;
                case "registrar_vaga":
                    $file = file_get_contents("http://192.168.9.3/comunicacao_funcionario/api.php?request=verificar_dados_funcionario&chapa=" . $json->chapa . "&cpf=" . $json->doc);
                    if ($file == '0') {
                        $info [] = array('RESULT' => 'FALSE');
                    } else {
                        $file2 = file_get_contents("http://192.168.9.3/comunicacao_funcionario/api.php?request=buscar_dados_funcionario_candidato&chapa=" . $json->chapa . "&cpf=" . $json->doc);

                        foreach (json_decode($file2) as $dados) {
                            $nome = $dados->NOME;
                        }
                        $id_status_candidato = 1;
                        $private_key_candidato = null;
                        $candidato = new candidato(null, $nome, $json->chapa, $json->email, $json->setor, $json->vaga, $id_status_candidato, null);

                        $info[] = ($repositorio_candidato->salvarCandidatos($candidato)) ? array("RESULT" => "TRUE") : array("RESULT" => "FALSE");
                    }
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