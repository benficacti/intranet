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
            $page = 'cadastrar_vaga'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <label id="id_contador"></label>

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <i class="fa-solid fa-users-between-lines"></i>
                        <label class="title_cartoes_pendentes text-title-table"><i class="far fa-briefcase"></i> CADASTRO DE VAGAS</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i> VAGA</th>
                                                <th scope="col" id="titulo_tabela"></th>
                                                <th scope="col" id="titulo_tabela"></th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="hidden" id="id_cadastro_vaga_temp" />
                                                    <input type="text"  id="id_new_cadastro_vaga" placeholder="PESQUISAR VAGA" data-toggle="modal" data-target="#modal_select_vaga"  class="form-control" autocomplete="off" style="text-transform: uppercase">
                                                </td>
                                                <td>
                                                    <button class="form-control btn" id="id_btn_cadastrar_vaga" onclick="update_vaga()" style="background: #28a745; color: #FFF"  ><i class="fad fa-edit"></i> ALTERAR</button>
                                                </td>
                                                <td>
                                                    <button class="form-control btn" id="id_btn_cadastrar_vaga" onclick="cadastrar_vaga()" style="background: #28a745; color: #FFF"  ><i class="fad fa-check"></i> CADASTRAR</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>   
                            </div>

                            <button type="button" id="button_automatico_animation_check_cadastrar_vaga" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_email" style="display: none">
                                Abrir modal de demonstração
                            </button>

                            <div class="modal fade panel_animation_check_cadastrar_vaga" id="modal_create_email" role="dialog">
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

                <!-- MODAL VAGA INICIO -->
                <div class="modal fade" id="modal_select_vaga" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff">
                                            <td scope="col" colspan="5" ></td>
                                        </tr>
                                        <tr style="background: #007bff">
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="id_vaga_candidato" onkeyup="search_vaga()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_painel_descricao_update" id="list_new_vaga">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL VAGA FIM -->

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

                $(".painel_descricao").hide();

                $("tr").addClass("bar_top"); //CSS PARA ESTRUTURA DAS TABELAS

                //GLOBAL



                function show_detalhe() {

                    $(".painel_descricao").show();
                }

                function retorno(v, v2) {
                    document.getElementById('id_setor_vaga').value = v2;
                    document.getElementById('id_setor_temp').value = v;
                    document.getElementById('id_setor_candidato').value = '';
                    search_setor();
                    document.getElementById('id_modal_setor').click();
                }

                function retornoVaga(v, v2) {
                    document.getElementById('id_new_cadastro_vaga').value = v2;
                    document.getElementById('id_cadastro_vaga_temp').value = v;
                    search_setor();
                    document.getElementById('id_modal_vaga').click();
                    show_detalhe();
                }




                search_vaga();
                function search_vaga() {
                    var vaga = document.getElementById('id_vaga_candidato').value;
                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_vaga',
                            vaga: vaga
                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.ENDERECO);
                                res += '<tr style="background-color: #FFF"><td onClick="retornoVaga(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.DESC_VAGA + "'" + ')">' + name.DESC_VAGA + '</td></tr>';
                            });
                            document.getElementById('list_new_vaga').innerHTML = res;
                        }
                    });
                }

                //OBTER ID DOS DATA-LIST (VAGAS)
                /*
                 $(document).ready(function () {
                 $('#id_new_cadastro_vaga').change(function () {
                 var value = $('#id_new_cadastro_vaga').val();
                 //alert($('#list_new_vaga [value="' + value + '"]').data('value'));
                 document.getElementById('id_cadastro_vaga_temp').value = $('#list_new_vaga [value="' + value + '"]').data('value');
                 });
                 });
                 */



                function cadastrar_vaga() {


                    var vaga;
                    vaga = document.getElementById('id_new_cadastro_vaga').value;

                    if (vaga.length < 3) {
                        vagaStyle = document.getElementById('id_new_cadastro_vaga');
                        vagaStyle.style.boxShadow = '3px 3px 3px 3px red';
                        vagaStyle.focus();
                        return false;
                    }
                    document.getElementById('id_btn_cadastrar_vaga').style.backgroundColor = "#2EFE9A";
                    document.getElementById('id_btn_cadastrar_vaga').innerHTML = 'CADASTRANDO...';


                    setTimeout(() => {

                        document.getElementById('id_btn_cadastrar_vaga').innerHTML = 'CADASTRADO';
                        document.getElementById('id_btn_cadastrar_vaga').style.backgroundColor = "#0080FF";

                        setTimeout(() => {
                            //location.reload();


                        }, 2000);

                    }, 3000);



                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'cadastrar_vaga',
                            vaga: vaga

                        }, success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            obj.forEach(function (name, value) {
                                if (name.RESULT) {
                                    document.getElementById('button_automatico_animation_check_cadastrar_vaga').click();
                                    setTimeout(() => {
                                        location.reload();
                                    }, 3000);



                                }

                            });

                        }
                    });

                }

                function update_vaga() {


                    var vaga, vaga_temp;
                    vaga = document.getElementById('id_new_cadastro_vaga').value;
                    vaga_temp = document.getElementById('id_cadastro_vaga_temp').value;


                    if (vaga.length < 3) {
                        vagaStyle = document.getElementById('id_new_cadastro_vaga');
                        vagaStyle.style.boxShadow = '3px 3px 3px 3px red';
                        vagaStyle.focus();
                        return false;
                    }

                    if (vaga_temp.length < 1) {
                        vaga_tempStyle = document.getElementById('id_cadastro_vaga_temp');
                        alert('SELECIONE UMA VAGA PARA EDIÇÃO!');
                        return false;
                    }
                    document.getElementById('id_btn_cadastrar_vaga').style.backgroundColor = "#2EFE9A";
                    document.getElementById('id_btn_cadastrar_vaga').innerHTML = 'ALTERANDO...';


                    setTimeout(() => {

                        document.getElementById('id_btn_cadastrar_vaga').innerHTML = 'ALTERADO';
                        document.getElementById('id_btn_cadastrar_vaga').style.backgroundColor = "#0080FF";

                        setTimeout(() => {
                            //location.reload();


                        }, 2000);

                    }, 3000);



                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'update_vaga',
                            hash_id_vaga: vaga_temp,
                            vaga: vaga

                        }, success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            obj.forEach(function (name, value) {
                                if (name.RESULT) {
                                    document.getElementById('button_automatico_animation_check_cadastrar_vaga').click();
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
