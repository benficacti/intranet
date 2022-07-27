<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap-table.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
        <meta charset="iso-8859-1"/>
        <title></title>

        <style>

            img.profile-photo-md {
                height: 50px;
                width: 50px;
                border-radius: 50%;
            }

            /*==================================================
              Create Post Box CSS
              ==================================================*/

            .create-post{
                width: 100%;
                min-height: 90px;
                padding: 20px;
                margin-bottom: 20px;
                border-bottom: 1px solid #f1f2f2;
            }

            .create-post .form-group{
                margin-bottom: 0;
                display: inline-flex;
            }

            .create-post .form-group .form-control{
                border: 1px solid #ccc;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            }

            .create-post .form-group img.profile-photo-md{
                margin-right: 10px;
            }

            .create-post .tools{
                padding: 8px 0 10px;
            }

            .create-post .tools ul.publishing-tools{
                display: inline-block;
                text-align:left;
                margin: 0;
                padding:5px 0;
            }

            .create-post .tools ul.publishing-tools li a{
                color: #6d6e71;
                font-size: 18px;
            }

            .create-post .tools ul.publishing-tools li a:hover{
                color: #27aae1;
            }

            .list-inline>li {
                display: inline-block;
                padding-right: 5px;
                padding-left: 5px;
            }


            /*==================================================
              Friend List CSS = Newsfeed and Timeline
              ==================================================*/

            .friend-list .friend-card{
                border-radius: 4px;
                border-bottom: 1px solid #f1f2f2;
                overflow: hidden;
                margin-bottom: 20px;
            }

            .friend-list .friend-card .card-info{
                padding: 0 20px 10px;
            }

            .friend-list .friend-card .card-info img.profile-photo-lg{
                margin-top: -60px;
                border: 7px solid #fff;
            }

            img.profile-photo-lg {
                height: 80px;
                width: 80px;
                border-radius: 50%;
            }

            .text-azul-marinho {
                color: #0e1a35;
                font-size: 17px
            }

            .class_fonts{
                font-family: 'Vendana, Arial, Helvetica';
                sans-serif
            }

            .class_fonts_style{
                font-size: 15px;
                color: #212529;
                line-height: 1
            }

            .class_fonts_style_span{
                font-size: 11px;
                color: #000000 !important;
                line-height: 1;
                font-weight: bold;
            }
            .class_fonts_style_span_2{
                font-size: 12px;
                color: #000000 !important;
                line-height: 1;
                font-weight: bold;
            }

            .class_pointer{
                cursor: pointer !important;
            }

            .class_font_awesome{
                color: #0000ff
            }

        </style>

    </head>
    <body>
        <div class="splash">
            <h1><?php include './svg/bb.svg' ?></h1>
            <h1 class="fade-in">BEM VINDO A INTRANET</h1>
        </div>

        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'painel'; // HABILITAR MENU NA TELA ATUAL 
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">



                    <!-- CORPO MENU -->
                    <div class="row col-md-12" style="margin:0 auto; cursor: pointer">
                        <div class="col-md-12 card_size">
                            <input type="hidden" id="btn" onclick="toggleFullScreen()"/>

                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="vagasClick()" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/vagas_emprego.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        VAGAS DE EMPREGO
                                    </span>
                                </div>

                            </div>

                            <!--
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="telUteisClick()" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/ramais.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        RAMAIS
                                    </span>
                                </div>
                            </div>
                            -->
                            
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="agendaClick()" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/contatos.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        CONTATOS
                                    </span>
                                </div>
                            </div>
                            
                            <!--
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="emailClick()" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/email_branco.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        EMAIL
                                    </span>
                                </div>
                            </div>
                            -->
                            <div class="menu_home_item">

                                <div class="imagem_icone" data-toggle="modal" data-target="#modal_select_auth_publicacao" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/branco.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        PUBLICAÇÃO
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="marketingClick()" style="display: flex; justify-content: center; justify-content: center; align-items: center;">
                                    <img src="img/bb.png" style="width: 8.5%; position: absolute"/>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MARKETING
                                    </span>
                                </div>
                            </div>
                            <!--
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="portariasClick()">
                            <?php
                            include './svg/controle_acesso.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        CONTROLE DE ACESSO 
                                    </span>
                                </div>
                            </div>
                            -->
                            <!--
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            
                            -->
                        </div>

                    </div>

                </div>


            </div>


        </div>

        <!-- MODAL VAGA INICIO -->
        <input type="hidden" data-toggle="modal" id="id_modal_select_noticia" data-target="#modal_select_noticia" />
        <div class="modal fade class_fonts class_painel_noticia" id="modal_select_noticia" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color: #F7F7F7">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <p>Notícias <i class="fas fa-rss"></i></p>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body" style="margin: 0px; padding: 0px">
                        <div class="create-post" style="margin: 0px; margin-bottom: 1.5px; padding: 0px">
                            <div class="row">
                                <lottie-player src="./lottie_files/newsletter.json" mode="bounce" background="transparent"  speed="1"  style="width: 15vw; height: 15vh; margin: 0 auto"  autoplay></lottie-player>
                            </div>
                        </div>


                        <div class="friend-list">
                            <div class="row">

                                <div class="col-md-6 col-sm-6 class_painel_recrutamento">
                                    <div class="friend-card">

                                        <div class="card-info">
                                            <img src="img/bb_vagas.png" alt="user"  style="width: 13vw; height: 6vh">
                                            <div class="friend-info">
                                                <a href="vagas" class="pull-right text-azul-marinho">Novas Vagas</a>
                                                <div id="id_result_recrutamento">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 class_painel_boletin">
                                    <div class="friend-card">

                                        <div class="card-info">
                                            <img src="img/bb_boletim.png" alt="user"  style="width: 13vw; height: 6vh">
                                            <div class="friend-info">
                                                <a href="#" class="pull-right text-azul-marinho">Boletim</a>
                                                <div id="id_result_boletim">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 class_painel_Comunicados">

                                    <div class="friend-card">

                                        <div class="card-info">
                                            <img src="img/bb_avisos.png" alt="user"  style="width: 13vw; height: 6vh">
                                            <div class="friend-info">
                                                <a href="#" class="pull-right text-azul-marinho">Comunicados e Avisos</a>
                                                <div id="id_result_comunicados">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL VAGA FIM -->


        <!-- MODAL AUTH_EDIT INICIO -->
        <div class="modal fade painel_acesso_edit" id="modal_select_auth_publicacao" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="id_painel_candidatar">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Faça seu acesso</h5>
                        <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="id_auth_edit">
                            <lottie-player src="./lottie_files/auth.json" mode="bounce" background="transparent"  speed="3" loop  style="width: 20vw; height: 10vh; margin: 0 auto"  autoplay></lottie-player>
                        </div>
                        <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                            <thead style="font-size: 18px">
                                <tr style="background: #007bff; height: 1px">
                                    <td scope="col" colspan="6"  style="padding: 2px"></td>
                                </tr>
                                <tr style="background: #32383e">
                                    <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="user_publicacao" placeholder="Usuário" autocomplete="off"></td>
                                    <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="password" id="password_publicacao" placeholder="Senha" autocomplete="off"></td>
                                </tr>
                            </thead>
                        </table>
                        <button class="form-control" style="background: #062c33; color: #FFF" onclick="modulo_rh_edit()">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL AUTH_EDIT FIM -->



        <input type="hidden" id="hash_cartao" value="0">
        <script src="js/lottie-player.js"></script>
        <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap-table.min.js"></script>
        <link rel="stylesheet" href="fontawesome/js/all.js" type="text/css"/>

        <script src="js/app.js"></script>



        <!-- Menu Toggle Script -->
        <script>

                            $("#menu-toggle").click(function (e) {
                                e.preventDefault();
                                $("#wrapper").toggleClass("toggled");
                            });
        </script>
        <script type="text/javascript">
            // Simulate a click every second
            setInterval(clickButton, 1000);

            // Simulate click function
            function clickButton() {
                //  document.querySelector('#btn').click();
            }

            function toggleFullScreen() {
                if (!document.fullscreenElement && // alternative standard method
                        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                        document.documentElement.msRequestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }

                }
                /*
                 * 
                 else {
                 if (document.exitFullscreen) {
                 document.exitFullscreen();
                 } else if (document.msExitFullscreen) {
                 document.msExitFullscreen();
                 } else if (document.mozCancelFullScreen) {
                 document.mozCancelFullScreen();
                 } else if (document.webkitExitFullscreen) {
                 document.webkitExitFullscreen();
                 }
                 }
                 */
            }


            /*
             const btn = document.querySelector("#btn");
             
             btn.addEventListener("click", function () {
             toggleFullScreen();
             });
             */



            $(".class_painel_recrutamento").hide();
            $('.class_painel_boletin').hide();
            $(".class_painel_Comunicados").hide();



            //GLOBAIS
            var statuNotificacao = 0;
            setTimeout(() => {
                notification();
            }, 2000);

            function notification() {
                $.ajax({
                    url: "../api.php",
                    method: "post",
                    data: {request: 'notification'
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            if (name.RESULT == "TRUE") {
                                statuNotificacao = 1;
                            }
                        });
                        if (statuNotificacao == 1) {
                            document.getElementById('id_modal_select_noticia').click();
                        }

                        noticiasAlert();
                    }
                });
            }







            //$(".splash").hide();


            //ALERTA RECRUTAMENTO
            //<p class="class_fonts_style">Oba temos novidades, a bb está com vagas para recrutamento interno de Almoxarife! <br><span style="font-size: 10px">Publicado em: 17-06-2022 as 09:05</span></p>

            function noticiasAlert() {

                $.ajax({
                    url: '../api.php',
                    method: 'post',
                    data: {request: 'noticiasAlert'
                    }, success: function (data) {
                        var resAlertRecrutamento = '';
                        var resAlertBoletim = '';
                        var resAlertComunicados = '';
                        var url_anexo = '';
                        var data_americano = '';
                        var data_brasileiro = '';
                        var obj = JSON.parse(data);
                        var Assunto = '';
                        obj.forEach(function (name, value) {

                            tipo = name.TIPO_COMUNICACAO;
                            url_anexo = name.URL_ARQUIVO;
                            data_americano = name.D_CRIADO;
                            data_brasileiro = data_americano.split('-').reverse().join('/');

                            if (name.ASSUNTO == null || name.ASSUNTO == '') {
                                Assunto == '';
                            } else {
                                Assunto = name.ASSUNTO;
                            }


                            if (tipo == '1') {
                                $(".class_painel_recrutamento").show();
                                if (url_anexo != null) {
                                    resAlertRecrutamento += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><i class="fal fa-paperclip class_pointer class_font_awesome" onClick="retorno(' + "'" + name.URL_ARQUIVO + "'" + ')"></i><br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                } else {
                                    resAlertRecrutamento += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                }
                            }
                            if (tipo == '2') {
                                $(".class_painel_boletin").show();
                                if (url_anexo != null) {
                                    resAlertBoletim += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><i class="fal fa-paperclip class_pointer class_font_awesome" onClick="retorno(' + "'" + name.URL_ARQUIVO + "'" + ')"></i><br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                } else {
                                    resAlertBoletim += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                }

                            }
                            if (tipo == '3') {
                                $(".class_painel_Comunicados").show();
                                if (url_anexo != null) {
                                    resAlertComunicados += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><i class="fal fa-paperclip class_pointer class_font_awesome" onClick="retorno(' + "'" + name.URL_ARQUIVO + "'" + ')"></i><br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                } else {
                                    resAlertComunicados += '<p class="class_fonts_style"><span class="class_fonts_style_span_2">' + Assunto + '</span>    </br>' + name.MSN + '<br><span class="class_fonts_style_span">Publicado: ' + data_brasileiro + ' as ' + name.H_CRIADO + ' por:' + name.SETOR + '</span></p>';
                                }
                            }




                        });
                        document.getElementById('id_result_recrutamento').innerHTML = resAlertRecrutamento;
                        document.getElementById('id_result_boletim').innerHTML = resAlertBoletim;
                        document.getElementById('id_result_comunicados').innerHTML = resAlertComunicados;

                    }
                });
            }


            function retorno(v) {
                location.href = 'anexo?cod=' + v;
            }




            function modulo_rh_edit() {
                var user = document.getElementById('user_publicacao').value;
                var password = document.getElementById('password_publicacao').value;
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'auth_user',
                        user: user,
                        password: password

                    }, success: function (data) {


                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            if (name.RESULT === 'TRUE') {
                                $(".painel_acesso_edit").hide();
                                location.href = 'publicacao';
                            } else {
                                res = '<lottie-player src="./lottie_files/auth_failed.json" mode="bounce" background="transparent"  speed="3"  style="width: 30vw; height: 20vh;"  autoplay></lottie-player>';
                                document.getElementById('id_auth_edit').innerHTML = res;
                            }
                        });


                    }
                });

                // location.href = 'vagas_recursos_humanos';
            }








            //REDIRECT
            function emailClick() {
                location.href = 'menu_email';
            }
            function telUteisClick() {
                location.href = 'menu_telefone_uteis';
            }
            function agendaClick() {
                location.href = 'listagem_agenda';
            }
            function vagasClick() {
                location.href = 'vagas';
            }
            function publicacaoClick() {
                location.href = 'publicacao';
            }
            function marketingClick() {
                location.href = 'marketing';
            }
            function portariasClick() {
                location.href = 'http://192.168.0.185/portarias/login.php';
            }
            //END REDIRECT



        </script>
    </body>
</html>
