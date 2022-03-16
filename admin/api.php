<?php

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
        header("Access-Control-Allow-Methods: POST"); //Make sure you remove those you do not want to support
    }
    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"])) {
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    }
    //Just exit with 200 OK with the above headers for OPTIONS method
    exit(0);
}

function isValidJSON($str) {
    json_decode($str);

    return json_last_error() == JSON_ERROR_NONE;
}

$json_params = file_get_contents("php://input");



if (strlen($json_params) > 0 && isValidJSON($json_params)) {
    foreach (json_decode($json_params) as $json) {


        $headers = apache_request_headers();
        $jsonHeader = json_decode(json_encode($headers));
        $authorization = (isset($jsonHeader->{'Authorization'})) ? $jsonHeader->{'Authorization'} : null;
        if (strlen($authorization) == 0) {
            $authorization = (isset($jsonHeader->{'authorization'})) ? $jsonHeader->{'authorization'} : null;
        }
        if ($authorization != null) {
            $authorization = str_replace("Bearer", "", $authorization);
            $authorization = str_replace(" ", "", $authorization);

            $dados_user = json_decode(SearchApp::decodeUser($authorization));

            if ($dados_user->RESULT == "true") {
                $info = array();

                $json_user = json_decode(SearchApp::getIDUser($dados_user->USER));
                if ($json_user->RESULT == "true") {
                    switch ($json->request) {


                        //REQUESTS 
                        case "request1":
                            $info = SearchApp::func();

                            if (isset($valor)) {
                                
                            } else {
                                $info[] = array("RESULT" => "false", "ERROR" => "10 - Parametros incompletos");
                            }
                            break;

                        default:
                            $info[] = array("RESULT" => "false", "ERROR" => "04 - Request não encontrado");
                            break;
                    }
                } else {


                    switch ($json->request) {
                        //REQUESTS Login
                        case "login":
                            $info = SearchApp::login($json->email, $json->senha, $json->tipo);
                            break;
                        default:

                            $info[] = array(
                                'RESULT' => $json_user->RESULT,
                                'MENSAGEM' => $json_user->ERROR
                            );
                            break;
                    }
                }
            } else {
                $info[] = array("RESULT" => "false", "ERROR" => "05 - Token alterado");
            }
        } else {
            // REQUEST DA API PORTARIA
            $token = str_replace("Bearer ", "", $authorization);
            $info[] = array("RESULT" => "false", "ERROR" => "01 - Token não encontrado");
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
