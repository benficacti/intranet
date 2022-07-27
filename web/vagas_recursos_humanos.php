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
            $page = 'vagas_recursos_humanos'; // HABILITAR MENU NA TELA ATUAL
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
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> PUBLICAÇÃO DE VAGAS (RECRUTAMENTO INTERNO)</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> SETOR</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-business-time"></i> PERÍODO</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i> VAGA</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i> ARQUIVO</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="hidden" id="id_setor_temp" />
                                                    <input type="text"  id="id_setor_vaga" placeholder="SELECIONE SETOR" data-toggle="modal" data-target="#modal_select"  class="form-control" readonly="true" autocomplete="off">                                                    
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_periodo_temp" />
                                                    <input type="text"  id="id_periodo_vaga" placeholder="SELECIONE PERÍODO" data-toggle="modal" data-target="#modal_select_periodo"  class="form-control" readonly="true" autocomplete="off">                                                    

                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_vaga_temp" />
                                                    <input type="text"  id="id_new_vaga" placeholder="SELECIONE VAGA" data-toggle="modal" data-target="#modal_select_vaga"  class="form-control" readonly="true" autocomplete="off">
                                                </td>
                                                <td>
                                                    <p>
                                                        <label class="form-control" for="fileToUpload" id="id_btn_anexar" style="background:#0069D9; color: #FFF; font-weight: bold"><i class="fal fa-paperclip"></i> ANEXAR (PDF)</label></p>
                                                    <form action="../uploads.php" method="post" enctype="multipart/form-data" id="id_form_geral">
                                                        <input class="form-control" type="file"
                                                               name="fileToUpload" id="fileToUpload" 
                                                               onchange="loadFile(event)" 
                                                               style="display: none">
                                                        <input type="hidden" id="id_hash_anexo" name="tmpCod"/>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <table class="table table-with-links painel_descricao">

                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> EXPIRAR</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i>.</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="datetime-local"  id="id_data_expirar" class="form-control">

                                                </td>
                                                <td>
                                                    <button class="form-control btn" id="id_btn_publicar_vaga" onclick="publicar_vaga()" style="background: #28a745; color: #FFF"  ><i class="fas fa-paper-plane"></i> PUBLICAR VAGA</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <table class="table table-with-links painel_descricao">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela">DESCRIÇÃO DA VAGA </th>  
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <textarea class="form-control" id="id_descricao_vaga" placeholder="relate aqui a descrição....." style="height: 150px"></textarea>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>   
                            </div>

                            <button type="button" id="button_automatico_animation_check_publicar_vaga" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_email" style="display: none">
                                Abrir modal de demonstração
                            </button>

                            <div class="modal fade panel_animation_check_publicar_vaga" id="modal_create_email" role="dialog">
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

                <!-- MODAL SETOR INICIO -->
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
                                            <td scope="col" colspan="5" ></td>
                                        </tr>
                                        <tr style="background: #007bff">
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="id_setor_candidato" onkeyup="search_setor()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody id="id_res_detalhe_vaga">

                                    </tbody>
                                    <tbody class="class_painel_descricao_update" id="list_new_nome_setor">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL SETOR FIM -->

                <!-- MODAL PERIODO INICIO -->
                <div class="modal fade" id="modal_select_periodo" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_periodo" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff">
                                            <td scope="col" colspan="5" ></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_painel_descricao_update class_pointer" id="list_new_periodo">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL PERIODO FIM -->

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

                search_setor();
                function search_setor() {

                    var setor = document.getElementById('id_setor_candidato').value;


                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_setor',
                            setor: setor
                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.HASH);
                                //res += '<option value = ' + name.SETOR + ' data-value=' + name.HASH_ID + '>';
                                res += '<tr style="background-color: #FFF"><td onClick="retorno(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.SETOR + "'" + ')">' + name.SETOR + '</td></tr>';
                            });
                            document.getElementById('list_new_nome_setor').innerHTML = res;
                        }
                    });
                }

                function retorno(v, v2) {
                    document.getElementById('id_setor_vaga').value = v2;
                    document.getElementById('id_setor_temp').value = v;
                    document.getElementById('id_setor_candidato').value = '';
                    search_setor();
                    document.getElementById('id_modal_setor').click();
                }

                function retornoPeriodo(v, v2) {
                    document.getElementById('id_periodo_vaga').value = v2;
                    document.getElementById('id_periodo_temp').value = v;
                    search_setor();
                    document.getElementById('id_modal_periodo').click();
                }

                function retornoVaga(v, v2) {
                    document.getElementById('id_new_vaga').value = v2;
                    document.getElementById('id_vaga_temp').value = v;
                    search_setor();
                    document.getElementById('id_modal_vaga').click();
                    show_detalhe();
                }


                search_periodo();
                function search_periodo() {
                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_periodo'
                        }, success: function (data) {
                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.HASH);
                                res += '<tr style="background-color: #FFF"><td onClick="retornoPeriodo(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.DESC_PERIODO + "'" + ')">' + name.DESC_PERIODO + '</td></tr>';
                            });
                            document.getElementById('list_new_periodo').innerHTML = res;
                        }
                    });
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



                //OBTER ID DOS DATA-LIST (SETOR)
                /*
                 $(document).ready(function () {
                 $('#id_setor_vaga').change(function () {
                 var value = $('#id_setor_vaga').val();
                 //alert($('#list_new_nome_setor [value="' + value + '"]').data('value'));
                 document.getElementById('id_setor_temp').value = $('#list_new_nome_setor [value="' + value + '"]').data('value');
                 
                 });
                 });
                 */

                //OBTER ID DOS DATA-LIST (VAGAS)
                /*
                 $(document).ready(function () {
                 $('#id_new_vaga').change(function () {
                 var value = $('#id_new_vaga').val();
                 //alert($('#list_new_vaga [value="' + value + '"]').data('value'));
                 document.getElementById('id_vaga_temp').value = $('#list_new_vaga [value="' + value + '"]').data('value');
                 });
                 });
                 */

                //OBTER ID DOS DATA-LIST (PERIODO)
                /*
                 $(document).ready(function () {
                 $('#id_periodo_vaga').change(function () {
                 var value = $('#id_periodo_vaga').val();
                 //alert($('#list_periodo_vaga [value="' + value + '"]').data('value'));
                 document.getElementById('id_periodo_temp').value = $('#list_periodo_vaga [value="' + value + '"]').data('value');
                 });
                 });
                 */


                var form = document.getElementById("id_form_geral");
                function publicar_vaga() {


                    var setor, periodo, vaga, descricao, tipo_arquivo, arquivo, empresa, data_expirar_temp, hora_expirar, data_expirar, tamanho_arquivo;
                    arquivo = document.getElementById('fileToUpload').value;
                    setor = document.getElementById('id_setor_temp').value;
                    periodo = document.getElementById('id_periodo_temp').value;
                    vaga = document.getElementById('id_vaga_temp').value;
                    empresa = 1;
                    data_expirar_temp = document.getElementById('id_data_expirar').value;
                    descricao = document.getElementById('id_descricao_vaga').value;

                    hora_expirar = data_expirar_temp.slice(-5);
                    data_expirar = data_expirar_temp.slice(0, 10);


                    tipo_arquivo = arquivo.slice(-4);//PEGAR TIPO DO ARQUIVO

                    if (tipo_arquivo.length > 0) {
                        if (tipo_arquivo !== '.pdf') {
                            alert('Favor anexar um arquivo em formato "PDF"');
                            return false;
                        }
                    }


                    //VALIDAÇÕES
                    if (setor.length < 1) {
                        document.getElementById('id_setor_vaga').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_setor_vaga').focus();
                    }

                    if (periodo.length < 1) {
                        document.getElementById('id_periodo_vaga').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_periodo_vaga').focus();
                    }
                    if (periodo.length < 1) {
                        document.getElementById('id_new_vaga').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_new_vaga').focus();
                    }

                    if (data_expirar_temp.length < 1) {
                        document.getElementById('id_data_expirar').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_data_expirar').focus();
                    }

                    if (empresa.length < 1) {
                        document.getElementById('id_empresa_vaga').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_empresa_vaga').focus();
                    }


                    if (descricao.length < 1) {
                        document.getElementById('id_descricao_vaga').style.boxShadow = "2px 2px 2px 2px red";
                        return document.getElementById('id_descricao_vaga').focus();
                    }



                    document.getElementById('id_btn_publicar_vaga').style.backgroundColor = "#2EFE9A";
                    document.getElementById('id_btn_publicar_vaga').innerHTML = 'PLUBLICANDO...';


                    setTimeout(() => {

                        document.getElementById('id_btn_publicar_vaga').innerHTML = 'PLUBLICADO';
                        document.getElementById('id_btn_publicar_vaga').style.backgroundColor = "#0080FF";

                        setTimeout(() => {
                            //location.reload();


                        }, 2000);

                    }, 3000);



                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'publicar_vaga',
                            setor: setor,
                            periodo: periodo,
                            vaga: vaga,
                            descricao: descricao,
                            empresa: empresa,
                            data_expirar: data_expirar,
                            hora_expirar: hora_expirar

                        }, success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            obj.forEach(function (name, value) {
                                if (name.RESULT) {
                                    document.getElementById('id_hash_anexo').value = name.HASH_ID;
                                    document.getElementById('id_setor_temp').value = '';
                                    document.getElementById('id_periodo_temp').value = '';
                                    document.getElementById('id_vaga_temp').value = '';
                                    document.getElementById('id_descricao_vaga').value = '';
                                    document.getElementById('id_setor_vaga').value = '';
                                    document.getElementById('id_periodo_vaga').value = '';
                                    document.getElementById('id_new_vaga').value = '';


                                    document.getElementById('button_automatico_animation_check_publicar_vaga').click();
                                    setTimeout(() => {
                                        if (arquivo.length > 0) {
                                            form.submit();
                                        } else {
                                            location.reload();
                                        }
                                    }, 3000);



                                }

                            });

                        }
                    });

                }






                //EVENTOS ONBLUR
                function mostrar_telefone_associado() {

                    var nome = document.getElementById('id_new_nome_agenda').value;


                    if (nome.length < 4) {
                        document.getElementById('id_new_tel_agenda').value = '';
                    } else {




                        $.ajax({

                            url: "../api.php",
                            method: "post",
                            data: {request: "mostrar_telefone_associado",
                                nome: nome

                            }, success: function (data) {
                                console.log(data);
                                var obj = JSON.parse(data);
                                obj.forEach(function (name, value) {
                                    //console.log(name.ENDERECO);
                                    if (name.RESULT == 'TRUE') {
                                        document.getElementById('id_new_tel_agenda').value = name.N_TELEFONE;
                                    } else {
                                        document.getElementById('id_new_tel_agenda').value = '';
                                    }
                                });
                            }
                        });
                    }

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
