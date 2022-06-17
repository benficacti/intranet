<?php
session_start();

$sessãoLogin = (isset($_SESSION['id_login'])) ? $_SESSION['id_login'] : null;
if ($sessãoLogin == null) {
    header('Location: painel');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap-table.min.css">
        <meta charset="UTF-8">
        <meta charset="iso-8859-1"/>
        <title></title>
        <style>
            #titulo_tabela{
                font-size: 14px
            }

            .class_tr{
                background: #0069D9;

            }
            .class_pointer{
                cursor: pointer !important;
            }
        </style>
    </head>
    <body>
        <div class="d-flex backbenfacil" id="wrapper">

            <!-- Sidebar -->
            <?php
            $page = 'publicacao'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <i class="fa-solid fa-users-between-lines"></i>
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> PUBLICAÇÃO DE NOTÍCIAS</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">

                                    <table class="table table-with-links">

                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> GRUPO NOTÍCIA</th>
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> EXPIRAR NOTÍCIA</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i>.</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="hidden" id="id_grupo_noticia_temp" />
                                                    <input type="text"  id="id_grupo_noticia" placeholder="SELECIONE TIPO COMUNICACAO" data-toggle="modal" data-target="#modal_select"  class="form-control" readonly="true" autocomplete="off">                                                    
                                                </td>
                                                <td>
                                                    <input type="datetime-local"  id="id_data_expirar" class="form-control">

                                                </td>
                                                <td>
                                                    <button class="form-control btn" id="id_btn_publicar_noticia" onclick="publicar_noticia()" style="background: #28a745; color: #FFF"  ><i class="fas fa-paper-plane"></i> PUBLICAR NOTÍCIA</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela">MENSAGEM</th>  
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <textarea class="form-control" id="id_descricao_noticia" placeholder="relate aqui a descrição....." style="height: 150px"></textarea>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>   
                            </div>

                            <button type="button" id="button_automatico_animation_check_publicar_noticia" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_email" style="display: none">
                                Abrir modal de demonstração
                            </button>

                            <div class="modal fade panel_animation_check_publicar_noticia" id="modal_create_email" role="dialog">
                                <div class="modal-dialog modal-dialog-centered">

                                    <div class='row'>
                                        <div class='col-md-6' style='margin:0 auto;'>
                                            <lottie-player src="./lottie_files/check.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <!-- ANIMATION -->
                <div class="modal fade " id="modal_loading" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="lottie_files/loading.json" mode="bounce" background="transparent"  speed="2"  style="width: 20vw; height: 20vh;"  loop  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- MODAL TIPO_COMUNICACAO INICIO -->
                <div class="modal fade" id="modal_select" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_setor" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff">
                                            <td scope="col" colspan="5" >SELECIONE</td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_painel_descricao_update class_pointer" id="list_new_tipo_comunicacao">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TIPO_COMUNICACAO FIM -->


                <!-- /#page-content-wrapper -->

                <button type="button" style="display:none"id='closeModal'  data-dismiss="modal">
                </button>
            </div>
            <script src="js/lottie-player.js"></script>
            <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
            <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
            <script src="js/popper.min.js" crossorigin="anonymous"></script>
            <script src="js/bootstrap-table.min.js"></script>
            <link rel="stylesheet" href="fontawesome/js/all.js" type="text/css"/>


            <!-- Menu Toggle Script -->
            <script>
                                    $("#menu-toggle").click(function (e) {
                                        e.preventDefault();
                                        $("#wrapper").toggleClass("toggled");
                                    });
            </script>
            <script type="text/javascript">



                $("tr").addClass("bar_top"); //CSS PARA ESTRUTURA DAS TABELAS

                //GLOBAL


                search_setor();
                function search_setor() {


                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_tipo_comunicado'

                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.HASH);
                                //res += '<option value = ' + name.SETOR + ' data-value=' + name.HASH_ID + '>';
                                res += '<tr style="background-color: #FFF"><td onClick="retorno(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.TIPO_COMUNICACAO + "'" + ')">' + name.TIPO_COMUNICACAO + '</td></tr>';
                            });
                            document.getElementById('list_new_tipo_comunicacao').innerHTML = res;
                        }
                    });
                }

                function retorno(v, v2) {
                    document.getElementById('id_grupo_noticia').value = v2;
                    document.getElementById('id_grupo_noticia_temp').value = v;
                    search_setor();
                    document.getElementById('id_modal_setor').click();
                }

                //OBTER ID DOS DATA-LIST (SETOR)
                /*
                 $(document).ready(function () {
                 $('#id_grupo_noticia').change(function () {
                 var value = $('#id_grupo_noticia').val();
                 //alert($('#list_new_tipo_comunicacao [value="' + value + '"]').data('value'));
                 document.getElementById('id_grupo_noticia_temp').value = $('#list_new_tipo_comunicacao [value="' + value + '"]').data('value');
                 
                 });
                 });
                 */


                var form = document.getElementById("id_form_geral");
                function publicar_noticia() {


                    var tipo_noticia, data_expirar_temp, hora_expirar, data_expirar;
                    data_expirar_temp = document.getElementById('id_data_expirar').value;
                    descricao = document.getElementById('id_descricao_noticia').value;
                    tipo_noticia = document.getElementById('id_grupo_noticia_temp').value;

                    hora_expirar = data_expirar_temp.slice(-5);
                    data_expirar = data_expirar_temp.slice(0, 10);

                    if (tipo_noticia.length < 1) {
                        tipo_noticiaStyle = document.getElementById('id_grupo_noticia');
                        tipo_noticiaStyle.style.boxShadow = '3px 3px 3px 3px red';
                        tipo_noticiaStyle.focus();
                         return false;
                    }

                    if (data_expirar_temp.length < 1) {
                        data_expirar_tempStyle = document.getElementById('id_data_expirar');
                        data_expirar_tempStyle.style.boxShadow = '3px 3px 3px 3px red';
                        data_expirar_tempStyle.focus();
                        return false;
                    }

                    if (descricao.length < 5) {
                        descricaoStyle = document.getElementById('id_descricao_noticia');
                        descricaoStyle.style.boxShadow = '3px 3px 3px 3px red';
                        descricaoStyle.focus();
                        return false;
                    }

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'publicar_noticia',
                            tipo_noticia: tipo_noticia,
                            descricao: descricao,
                            data_expirar: data_expirar,
                            hora_expirar: hora_expirar

                        }, success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            obj.forEach(function (name, value) {
                                if (name.RESULT) {
                                    document.getElementById('button_automatico_animation_check_publicar_noticia').click();
                                    setTimeout(() => {
                                        location.reload();
                                    }, 3000);

                                }

                            });

                        }
                    });

                }


            </script>
    </body>
</html>
