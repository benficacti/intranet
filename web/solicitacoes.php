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
            $page = 'solicitacoes'; // HABILITAR MENU NA TELA ATUAL
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
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> SOLICITAÇÃO (MARKETING)</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">

                                    <table class="table table-with-links">

                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> TIPO SOLICITAÇÃO</th>
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> SOLICITANTE</th>
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> SETOR</th>
                                                <th scope="col" id="titulo_tabela"><i class="fad fa-th"></i> TELEFONE</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i> EMAIL</th>
                                                <th scope="col" id="titulo_tabela"><i class="fal fa-poll-people"></i></th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="hidden" id="id_tipo_solicitacao_temp" />
                                                    <input type="text"  id="id_tipo_solicitacao" placeholder="SELECIONE TIPO SOLICITACAO" data-toggle="modal" data-target="#modal_select"  class="form-control" readonly="true" autocomplete="off">                                                    
                                                </td>
                                                <td>
                                                    <input type="text" placeholder="DIGITE SEU NOME"  id="id_nome_solicitante" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_setor_solicitacao_temp" />
                                                    <input type="text" placeholder="SELECIONE SETOR"  id="id_setor_atual_solicitacao" class="form-control"  data-toggle="modal" data-target="#modal_select_setor"  onclick="search_setor()" class="form-control" readonly="true" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_telefone_solicitante_temp" />
                                                    <input type="text" placeholder="SELECIONE TELEFONE"  id="id_telefone_solicitante" class="form-control" onkeyup="search_telefone()" data-toggle="modal" data-target="#modal_select_telefone"  class="form-control" readonly="true" autocomplete="off">
                                                </td>

                                                <td>
                                                    <input type="hidden" id="id_email_solicitante_temp" />
                                                    <input type="text" placeholder="SELECIONE EMAIL"  id="id_email_solicitante" class="form-control" onkeyup="search_email()" data-toggle="modal" data-target="#modal_select_email"  class="form-control" readonly="true" autocomplete="off">
                                                </td>

                                                <td>
                                                    <p>
                                                        <label class="form-control" for="fileToUpload" id="id_btn_anexar" style="background:#0069D9; color: #FFF; font-weight: bold"><i class="fal fa-paperclip"></i></label></p>
                                                    <form action="../uploads_solicitacao.php" method="post" enctype="multipart/form-data" id="id_form_geral">
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



                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela">DETALHES DA SOLICITAÇÃO</th>  
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <textarea class="form-control" id="id_descricao_solicitacao" placeholder="relate aqui a descrição....." style="height: 150px"></textarea>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-with-links">

                                        <thead style="background-color: #; text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <button class="form-control btn" id="id_btn_registrar_solicitacao" onclick="registrar_solicitacao()" style="background: #28a745; color: #FFF"  ><i class="fad fa-check"></i> SOLICITAR</button>
                                                </td>
                                                <td>
                                                    <button class="form-control btn" data-toggle="modal" data-target="#modal_select_cconsulta"  style="background: #0000ff; color: #FFF"  ><i class="fad fa-search"></i> CONSULTAR SOLICITAÇÃO</button>                                              
                                                </td>                                           
                                            </tr>
                                        </thead>
                                    </table>

                                </div>   
                            </div>

                            <button type="button" id="button_automatico_animation_check_registrar_solicitacao" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_solicitacao" style="display: none">
                                Abrir modal de demonstração
                            </button>

                            <div class="modal fade panel_animation_check_registrar_solicitacao" id="modal_create_solicitacao" role="dialog">
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

                <!-- MODAL TIPO_SOLICITACAO INICIO -->
                <div class="modal fade" id="modal_select" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_solitacao" aria-label="Close">
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
                                    <tbody class="class_painel_descricao_update class_pointer" id="list_new_tipo_solicitacao" style="font-size: 15px">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TIPO_SOLICITACAO FIM -->

                <!-- MODAL CONSULTAR_SOLICITACAO INICIO -->
                <div class="modal fade" id="modal_select_cconsulta" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_consultar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_consulta" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">


                                    <tbody class="class_painel_descricao_update class_pointer" id="" style="font-size: 12px">
                                        <tr style="background-color: #FFF">
                                            <td><input type="text" id="id_token_consulta" class="form-control" placeholder="INSIRA O TOKEN"></td>
                                            <td colspan="2"><button class="form-control btn"  style="background: #0000ff; color: #FFF" onclick="search_token()" ><i class="fad fa-search"></i> CONSULTAR</button></td>
                                        </tr>
                                    </tbody>

                                    <tbody class="class_painel_descricao_update class_pointer" id="list_token_solicitacao" style="font-size: 14px">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL CONSULTAR_SOLICITACAO FIM -->


                <!-- MODAL SETOR INICIO -->
                <div class="modal fade" id="modal_select_setor" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_setor" aria-label="Close">
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
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="id_setor_solicitacao" onkeyup="search_setor()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_pointer" id="list_setor_solicitacao">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL SETOR FIM -->




                <!-- MODAL TELEFONE INICIO -->
                <div class="modal fade" id="modal_select_telefone" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_telefone" aria-label="Close"  onclick="fechar()">
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
                                            <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_tel_input_solicitante" onkeyup="search_telefone()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_painel_descricao_update class_pointer" id="list_new_tel_agenda">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TELEFONE FIM -->

                <!-- MODAL EMAIL INICIO -->
                <div class="modal fade" id="modal_select_email" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_email" aria-label="Close"  onclick="fechar()">
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
                                            <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_email_input_solicitante" onkeyup="search_email()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_painel_descricao_update class_pointer" id="list_new_email_agenda">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL EMAIL FIM -->


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



                function search_token() {
                    var token = document.getElementById('id_token_consulta').value;

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_token',
                            token: token
                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                res += '<tr style="background-color: #45494a; color: #FFF"><td>SOLICITANTE</td><td>SOLICITACAO</td><td>STATUS</td></tr>\n\
                                        <tr style="background-color: #00b7ff; color: #FFF"><td>' + name.NOME + '</td><td>' + name.TIPO + '</td><td>Analise</td></tr>\n\
                                        <tr style="background-color: #00b7ff; color: #FFF"><td colspan="3">' + name.DETALHE + '</td></tr>';

                            });
                            document.getElementById('list_token_solicitacao').innerHTML = res;

                        }
                    });
                }


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


                search_tipo_solicitacao();
                function search_tipo_solicitacao() {

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_tipo_solicitacao'

                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.HASH);
                                //res += '<option value = ' + name.SETOR + ' data-value=' + name.HASH_ID + '>';
                                res += '<tr style="background-color: #FFF"><td onClick="retorno(' + "'" + name.HASH_SOLICITACAO + "'" + ',' + "'" + name.SOLICITACAO + "'" + ')">' + name.SOLICITACAO + '</td></tr>';
                            });
                            document.getElementById('list_new_tipo_solicitacao').innerHTML = res;
                        }
                    });
                }

                function retorno(v, v2) {
                    document.getElementById('id_tipo_solicitacao').value = v2;
                    document.getElementById('id_tipo_solicitacao_temp').value = v;
                    search_tipo_solicitacao();
                    document.getElementById('id_modal_solitacao').click();
                }


                function search_setor() {
                    var setor = document.getElementById('id_setor_solicitacao').value;
                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_setor',
                            setor: setor
                        }, success: function (data) {
                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                res += '<tr style="background-color: #FFF"><td onClick="retornoSetor(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.SETOR + "'" + ')">' + name.SETOR + '</td></tr>';
                            });
                            document.getElementById('list_setor_solicitacao').innerHTML = res;

                        }
                    });
                }

                function retornoSetor(v, v2) {
                    document.getElementById('id_setor_atual_solicitacao').value = v2;
                    document.getElementById('id_setor_solicitacao_temp').value = v;
                    document.getElementById('id_modal_setor').click();
                }





                var form = document.getElementById("id_form_geral");
                function registrar_solicitacao() {


                    var tipo_solicitacao, nome_solicitante, setor_solicitante, telefone_solicitante, email_solicitante, arquivo, descricao_solicitacao;

                    tipo_solicitacao = document.getElementById('id_tipo_solicitacao_temp').value;
                    nome_solicitante = document.getElementById('id_nome_solicitante').value;
                    setor_solicitante = document.getElementById('id_setor_solicitacao_temp').value;
                    telefone_solicitante = document.getElementById('id_telefone_solicitante_temp').value;
                    email_solicitante = document.getElementById('id_email_solicitante_temp').value;
                    arquivo = document.getElementById('fileToUpload').value;
                    descricao_solicitacao = document.getElementById('id_descricao_solicitacao').value;


                    tipo_arquivo = arquivo.slice(-4);//PEGAR TIPO DO ARQUIVO

                    if (tipo_solicitacao.length < 1) {
                        tipo_solicitacaoStyle = document.getElementById('id_tipo_solicitacao');
                        tipo_solicitacaoStyle.style.boxShadow = '3px 3px 3px 3px red';
                        tipo_solicitacaoStyle.focus();
                        return false;
                    }

                    if (nome_solicitante.length < 1) {
                        nome_solicitanteStyle = document.getElementById('id_nome_solicitante');
                        nome_solicitanteStyle.style.boxShadow = '3px 3px 3px 3px red';
                        nome_solicitanteStyle.focus();
                        return false;
                    }

                    if (setor_solicitante.length < 1) {
                        setor_solicitanteStyle = document.getElementById('id_setor_atual_solicitacao');
                        setor_solicitanteStyle.style.boxShadow = '3px 3px 3px 3px red';
                        setor_solicitanteStyle.focus();
                        return false;
                    }
                    
                    if (telefone_solicitante.length < 1 && email_solicitante.length < 1) {
                        telefone_solicitanteStyle = document.getElementById('id_telefone_solicitante');
                        telefone_solicitanteStyle.style.boxShadow = '3px 3px 3px 3px red';
                        email_solicitanteStyle = document.getElementById('id_email_solicitante');
                        email_solicitanteStyle.style.boxShadow = '3px 3px 3px 3px red';
                        email_solicitanteStyle.focus();
                        telefone_solicitanteStyle.focus();
                        return false;
                    }

                    /*
                     if (tipo_arquivo.length > 0) {
                     if (tipo_arquivo !== '.pdf') {
                     alert('Favor anexar um arquivo em formato "PDF"');
                     return false;
                     }
                     }
                     */

                    if (descricao_solicitacao.length < 5) {
                        descricao_solicitacaoStyle = document.getElementById('id_descricao_solicitacao');
                        descricao_solicitacaoStyle.style.boxShadow = '3px 3px 3px 3px red';
                        descricao_solicitacaoStyle.focus();
                        return false;
                    }

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'registrar_solicitacao',

                            tipo: tipo_solicitacao,
                            nome: nome_solicitante,
                            setor: setor_solicitante,
                            telefone: telefone_solicitante,
                            email: email_solicitante,
                            detalhe: descricao_solicitacao

                        }, success: function (data) {
                            console.log(data);
                            var obj = JSON.parse(data);
                            obj.forEach(function (name, value) {
                                if (name.RESULT == 'TRUE') {
                                    document.getElementById('id_hash_anexo').value = name.ID_SOL;
                                    document.getElementById('button_automatico_animation_check_registrar_solicitacao').click();
                                    if (arquivo.length > 0) {
                                        form.submit();
                                    } else {
                                        location.href = 'http://192.168.0.185/intranet/web/enviar_email_token?token=' + name.TOKEN + '&email=' + name.EMAIL;
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



                search_telefone();
                function search_telefone() {
                    var tel = document.getElementById('id_tel_input_solicitante').value;

                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_telefone',
                            tel: tel
                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                if (name.RESULT == 'TRUE') {
                                    //console.log(name.HASH);
                                    res += '<tr style="background-color: #FFF"><td onClick="retornoTelefone(' + "'" + name.HASH_PRIVATE_TELEFONE + "'" + ',' + "'" + name.TELEFONE + "'" + ')">' + name.TELEFONE + '</td></tr>';
                                } else {
                                    res += '<tr style="background-color: #FFA500; color: #FFF"><td>NÃO HÁ TELEFONE LIBERADO</td></tr>';
                                }

                            });
                            document.getElementById('list_new_tel_agenda').innerHTML = res;
                        }
                    });
                }




                search_email();
                function search_email() {
                    var email = document.getElementById('id_email_input_solicitante').value;
                    $.ajax({

                        url: '../api.php',
                        method: 'post',
                        data: {request: 'search_email',
                            email: email
                        }, success: function (data) {

                            var obj = JSON.parse(data);
                            var res = '';
                            obj.forEach(function (name, value) {
                                //console.log(name.ENDERECO);
                                if (name.RESULT == 'TRUE') {
                                    res += '<tr style="background-color: #FFF"><td onClick="retornoEmail(' + "'" + name.HASH_PRIVATE_EMAIL + "'" + ',' + "'" + name.ENDERECO + "'" + ')">' + name.ENDERECO + '</td></tr>';
                                } else {
                                    res += '<tr style="background-color: #FFA500; color: #FFF"><td>NÃO HÁ EMAIL LIBERADO</td></tr>';
                                }

                            });
                            document.getElementById('list_new_email_agenda').innerHTML = res;
                        }
                    });
                }




                function retornoEmail(v, v2) {
                    document.getElementById('id_email_solicitante_temp').value = v;
                    document.getElementById('id_email_solicitante').value = v2;
                    document.getElementById('id_email_input_solicitante').value = '';
                    search_email();
                    document.getElementById('id_modal_email').click();
                }




                function retornoTelefone(v, v2) {
                    document.getElementById('id_telefone_solicitante_temp').value = v2;
                    document.getElementById('id_telefone_solicitante').value = v2;
                    document.getElementById('id_tel_input_solicitante').value = '';
                    search_telefone();
                    document.getElementById('id_modal_telefone').click();
                }


            </script>
    </body>
</html>
