<?php
session_start();

$sessãoLogin = (isset($_SESSION['id_login'])) ? $_SESSION['id_login'] : null;
if ($sessãoLogin == null or $_SESSION['id_setor'] != 17) {
    header('Location: painel');
}
$perfil = $_SESSION['id_setor'];
$page_type = filter_input(INPUT_GET, 'page');
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
            $page = 'marketing_gerencial'; // HABILITAR MENU NA TELA ATUAL
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
                        <label class="title_cartoes_pendentes text-title-table"><i class="far fa-bullseye-arrow"></i> GERENCIAL MARKETING</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">

                                    


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


                <!-- MODAL AUTH_MARKETING INICIO -->
                <div class="modal fade painel_acesso_edit" id="modal_select_auth_marketing" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Faça seu acesso</h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="id_auth_marketing">
                                    <lottie-player src="./lottie_files/auth.json" mode="bounce" background="transparent"  speed="3" loop  style="width: 20vw; height: 10vh; margin: 0 auto"  autoplay></lottie-player>
                                </div>
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff; height: 1px">
                                            <td scope="col" colspan="6"  style="padding: 2px"></td>
                                        </tr>
                                        <tr style="background: #32383e">
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="user_marketing" placeholder="Usuário" autocomplete="off"></td>
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="password" id="password_marketing" placeholder="Senha" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                </table>
                                <button class="form-control" style="background: #062c33; color: #FFF" onclick="modulo_marketing()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL AUTH_MARKETING FIM -->
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


                function modulo_marketing() {
                    var user = document.getElementById('user_marketing').value;
                    var password = document.getElementById('password_marketing').value;

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
                                    location.href = 'marketing';
                                } else {
                                    res = '<lottie-player src="./lottie_files/auth_failed.json" mode="bounce" background="transparent"  speed="3"  style="width: 30vw; height: 20vh;"  autoplay></lottie-player>';
                                    document.getElementById('id_auth_marketing').innerHTML = res;
                                }
                            });


                        }
                    });

                    // location.href = 'vagas_recursos_humanos';
                }


                search_tipo_comunicacao();
                function search_tipo_comunicacao() {
                    var setor = document.getElementById('id_perfil_grupo_noticia').value;

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_tipo_comunicado',
                            setor: setor

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
                    search_tipo_comunicacao();
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


                    var tipo_noticia, data_expirar_temp, hora_expirar, data_expirar, arquivo;
                    arquivo = document.getElementById('fileToUpload').value;
                    data_expirar_temp = document.getElementById('id_data_expirar').value;
                    descricao = document.getElementById('id_descricao_noticia').value;
                    tipo_noticia = document.getElementById('id_grupo_noticia_temp').value;

                    hora_expirar = data_expirar_temp.slice(-5);
                    data_expirar = data_expirar_temp.slice(0, 10);

                    tipo_arquivo = arquivo.slice(-4);//PEGAR TIPO DO ARQUIVO

                    if (tipo_noticia.length < 1) {
                        tipo_noticiaStyle = document.getElementById('id_grupo_noticia');
                        tipo_noticiaStyle.style.boxShadow = '3px 3px 3px 3px red';
                        tipo_noticiaStyle.focus();

                    }

                    if (tipo_arquivo.length > 0) {
                        if (tipo_arquivo !== '.pdf') {
                            alert('Favor anexar um arquivo em formato "PDF"');
                            return false;
                        }
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
                                    document.getElementById('id_hash_anexo').value = name.HASH_ID;
                                    document.getElementById('button_automatico_animation_check_publicar_noticia').click();
                                    if (arquivo.length > 0) {
                                        form.submit();
                                    }
                                    setTimeout(() => {
                                        location.reload();
                                    }, 3000);
                                }

                            });

                        }
                    });

                }


                function loadFile() {
                    var btn_anexar = document.getElementById('id_btn_anexar');
                    btn_anexar.style.backgroundColor = '#4B0082';
                    btn_anexar.style.color = '#FFF';
                    btn_anexar.innerHTML = 'ANEXADO!!!';

                }




            </script>
    </body>
</html>
