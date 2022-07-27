<?php

session_start();
require_once './autoload.php';

use Rubens\Comercial\Infraestrutura\Persistencia;
use Rubens\Comercial\Infraestrutura\Persistencia\CriadorConexao;
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioAnexo;
use Rubens\Comercial\Model\anexo;
//VAGAS EMPREGO
use Rubens\Comercial\Infraestrutura\Repositorio\PdoRepositorioSolicitacaoMarketing;
use Rubens\Comercial\Model\solicitacaoMarketing;

$tmpString = $_POST['tmpCod'];
$target_dir = "uploads/";
$name_file = explode('.', basename($_FILES["fileToUpload"]["name"])); // NÃO TIRAVA OS CARACTERES ESPECIAIS POR ISSO IMPLEMENTEI A LINHA DE BAIXO 
$name_file = explode('.', basename(preg_replace("/[^\w\s]/", "", iconv("UTF-8", "ASCII//TRANSLIT", $_FILES["fileToUpload"]["name"]))));
$name_file = str_replace(" ", "", $name_file);
$name_file = str_replace("  ", "", $name_file);
$name_original = basename($_FILES["fileToUpload"]["name"]);
$name_original = str_replace(" ", "", $name_original);
$name_original = str_replace("  ", "", $name_original);
$target_file = $target_dir . $name_file[0];
//OBS. A EXTENSÃO E ENVIADO INTERA
$tipo_extensao = '.' . substr($target_file, - 3);
$target_file = $target_dir . $name_file[0] . date("H:i:s");
$target_file = str_replace(':', '', $target_file);
$target_file_session = str_replace(':', '', $name_file[0] . date("H:i:s"));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($name_original, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file . $tipo_extensao)) {

        $token_solicitante = $_SESSION['token_solicitante'];
        $email_solicitante = $_SESSION['email_solicitante'];
        $_SESSION['name_image'] = $target_file_session . $tipo_extensao;
        $url_file = $target_file_session . $tipo_extensao;
        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

        $id_anexo_env_solicitante = '';
        $url = $url_file;
        $repositorio_anexo = new PdoRepositorioAnexo(CriadorConexao::criarConexao());
        $repositorio_solicitacao = new PdoRepositorioSolicitacaoMarketing(CriadorConexao::criarConexao());

        $anexo = new anexo(null, $url, null);
        $return_anexo = $repositorio_anexo->salvarAnexo($anexo);

        foreach ($return_anexo as $key => $value) {
            $id_anexo_env_solicitante = $value['HASH_ID'];
        };
        $id_solicitacao_marketing = $tmpString;
        //$solitacaoMk = new solicitacaoMarketing($id_solicitacao_marketing, null, null, null, $id_anexo_env_solicitante, null, null, null, null);
        $solitacaoMk = new solicitacaoMarketing($id_solicitacao_marketing, null, null, null, $id_anexo_env_solicitante, null, null, null, null, null, null, null);
        
        $return_update = $repositorio_solicitacao->updateSolicitacaoMk($solitacaoMk);
        if ($return_update) {
            header('Location: /intranet/web/enviar_email_token?token=' . $token_solicitante . '&email=' . $email_solicitante);
            //header('Location: /intranet/web/publicacao');
            // echo '<script type="text/javascript">window.history.back();</script>';
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}