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
        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'agenda_contato'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <label class="title_cartoes_pendentes text-title-table class_title">CADASTRO DE CONTATO</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela">NOME</th>
                                                <th scope="col" id="titulo_tabela">TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">RAMAL</th>
                                                <th scope="col" id="titulo_tabela">EMAIL</th>
                                                <th scope="col" id="titulo_tabela">SETOR</th>
                                                <th scope="col" id="titulo_tabela">STATUS</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="hidden"  id="id_new_nome_agenda_temp">
                                                    <input type="text"  id="id_new_nome_agenda" placeholder="SELECIONE NOME" data-toggle="modal" data-target="#modal_select" onkeyup="search_nome_agenda()"  class="form-control" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_new_tel_agenda_temp">
                                                    <input type="text"  id="id_new_tel_agenda" placeholder="SELECIONE TELEFONE" data-toggle="modal" data-target="#modal_select_telefone" onkeyup="search_telefone()"  class="form-control" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_new_ramal_agenda_temp">
                                                    <input type="text"  id="id_new_ramal_agenda" placeholder="SELECIONE RAMAL" data-toggle="modal" data-target="#modal_select_ramal" onkeyup="search_ramal()"  class="form-control" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_new_email_agenda_temp"/>
                                                    <input type="text"  id="id_new_email_agenda" placeholder="SELECIONE EMAIL" data-toggle="modal" data-target="#modal_select_email" onkeyup="search_email()"  class="form-control" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_new_setor_agenda_temp"/>
                                                    <input type="text"  id="id_new_setor_agenda" placeholder="SELECIONE EMAIL" data-toggle="modal" data-target="#modal_select_setor" onkeyup="search_setor()"  class="form-control" autocomplete="off">
                                                </td>
                                                <td><select class="form-control" id="id_new_status_agenda">
                                                        <option value="1">ASSOCIAR</option>
                                                        <!--<option value="2">DESASSOCIAR</option>-->
                                                        <option value="3">DESATIVAR</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="form-control btn" style="background: #28a745; color: #FFF" onclick="register_agenda()" >SALVAR</button>


                                </div>   
                            </div>

                        </div>
                    </div>

                    <!--
                    
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <label class="title_cartoes_pendentes text-title-table">CONSULTAR AGENDA</label>
                    </div>

                    
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr>
                                                <th scope="col" id="titulo_tabela">TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">USUARIO</th>
                                                <th scope="col" id="titulo_tabela">SETOR</th>
                                                <th scope="col" id="titulo_tabela">-</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr>
                                                <td><input type="text" class="form-control"></td>
                                                <td><select class="form-control" id="id_usuario_lista"></select></td>
                                                <td><select class="form-control" id="id_setor_lista"></select></td>
                                                <td><button class="form-control btn" style="background: #28a745; color: #FFF" >ASSOCIAR</button></select></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>   
                            </div>

                        </div>
                    </div>
                    -->


                    <!-- MODAL NOME INICIO -->
                    <div class="modal fade" id="modal_select" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" id="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                    <button type="button" class="close" data-dismiss="modal" id="id_modal_nome" aria-label="Close"  onclick="fechar()">
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
                                                <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_new_nome_input_agenda" onkeyup="search_nome_agenda()" placeholder="PESQUISE" autocomplete="off"></td>
                                            </tr>
                                        </thead>
                                        <tbody class="class_painel_descricao_update class_pointer" id="id_new_list_nome_agenda">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL NOME FIM -->

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
                                                <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_new_tel_input_agenda" onkeyup="search_telefone()" placeholder="PESQUISE" autocomplete="off"></td>
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


                    <!-- MODAL RAMAL INICIO -->
                    <div class="modal fade" id="modal_select_ramal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" id="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                    <button type="button" class="close" data-dismiss="modal" id="id_modal_ramal" aria-label="Close"  onclick="fechar()">
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
                                                <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_new_ramal_input_agenda" onkeyup="search_ramal()" placeholder="PESQUISE" autocomplete="off"></td>
                                            </tr>
                                        </thead>
                                        <tbody class="class_painel_descricao_update class_pointer" id="list_new_ramal_agenda">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL RAMAL FIM -->

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
                                                <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_new_email_input_agenda" onkeyup="search_email()" placeholder="PESQUISE" autocomplete="off"></td>
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


                    <!-- MODAL SETOR INICIO -->
                    <div class="modal fade" id="modal_select_setor" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" id="">
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
                                                <td scope="col" colspan="5" ><input  class="form-control " type="text" id="id_new_setor_input_agenda" onkeyup="search_setor()" placeholder="PESQUISE" autocomplete="off"></td>
                                            </tr>
                                        </thead>
                                        <tbody class="class_painel_descricao_update class_pointer" id="list_new_setor_agenda">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL SETOR FIM -->




                </div>



                <div class="modal fade " id="modal_loading" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="lottie_files/loading.json" mode="bounce" background="transparent"  speed="2"  style="width: 20vw; height: 20vh;"  loop  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
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



            search_nome_agenda();
            function search_nome_agenda() {
                var nome_agenda = document.getElementById('id_new_nome_input_agenda').value;
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_nome_agenda',
                        nome_agenda: nome_agenda
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.HASH);
                            res += '<tr style="background-color: #FFF"><td onClick="retorno(' + "'" + name.NOME_AGENDA + "'" + ',' + "'" + name.NOME_AGENDA + "'" + ')">' + name.NOME_AGENDA + '</td></tr>';
                        });
                        document.getElementById('id_new_list_nome_agenda').innerHTML = res;
                    }
                });

            }

            function retorno(v, v2) {
                document.getElementById('id_new_nome_agenda').value = v2;
                document.getElementById('id_new_nome_input_agenda').value = '';
                search_setor();
                mostrar_telefone_associado();
                document.getElementById('id_modal_nome').click();
            }

            function retornoTelefone(v, v2) {
                document.getElementById('id_new_tel_agenda_temp').value = v;
                document.getElementById('id_new_tel_agenda').value = v2;
                document.getElementById('id_new_tel_input_agenda').value = '';
                search_telefone();
                document.getElementById('id_modal_telefone').click();
            }

            function retornoRamal(v, v2) {
                document.getElementById('id_new_ramal_agenda_temp').value = v2;
                document.getElementById('id_new_ramal_agenda').value = v2;
                document.getElementById('id_new_ramal_input_agenda').value = '';
                search_telefone();
                document.getElementById('id_modal_ramal').click();
            }

            function retornoEmail(v, v2) {
                document.getElementById('id_new_email_agenda_temp').value = v;
                document.getElementById('id_new_email_agenda').value = v2;
                document.getElementById('id_new_email_input_agenda').value = '';
                search_email();
                document.getElementById('id_modal_email').click();
            }

            function retornoSetor(v, v2) {
                document.getElementById('id_new_setor_agenda_temp').value = v;
                document.getElementById('id_new_setor_agenda').value = v2;
                document.getElementById('id_new_setor_input_agenda').value = '';
                search_setor();
                document.getElementById('id_modal_setor').click();
            }




            search_telefone();
            function search_telefone() {
                var tel = document.getElementById('id_new_tel_input_agenda').value;

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


            search_ramal();
            function search_ramal() {
                var tel = document.getElementById('id_new_ramal_input_agenda').value;

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_ramal',
                        tel: tel
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        var ramal_length = '';
                        obj.forEach(function (name, value) {
                            ramal_length = name.TELEFONE;
                            if (ramal_length.length == 4) {
                                if (name.RESULT == 'TRUE') {
                                    //console.log(name.HASH);
                                    res += '<tr style="background-color: #FFF"><td onClick="retornoRamal(' + "'" + name.HASH_PRIVATE_TELEFONE + "'" + ',' + "'" + ramal_length + "'" + ')">' + ramal_length + '</td></tr>';
                                } else {
                                    res += '<tr style="background-color: #FFA500; color: #FFF"><td>NÃO HÁ RAMAL LIBERADO</td></tr>';
                                }
                            }



                        });
                        document.getElementById('list_new_ramal_agenda').innerHTML = res;
                    }
                });
            }

            search_email();
            function search_email() {
                var email = document.getElementById('id_new_email_input_agenda').value;
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


            search_setor();
            function search_setor() {
                var setor = document.getElementById('id_new_setor_input_agenda').value;

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_setor',
                        setor: setor
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);
                            res += '<tr style="background-color: #FFF"><td onClick="retornoSetor(' + "'" + name.HASH_PRIVATE_SETOR + "'" + ',' + "'" + name.SETOR + "'" + ')">' + name.SETOR + '</td></tr>';
                        });
                        document.getElementById('list_new_setor_agenda').innerHTML = res;
                    }
                });
            }





            function register_agenda() {
                var nome, telefone, email, status_agenda, ramal;
                nome = document.getElementById('id_new_nome_agenda').value;
                telefone = document.getElementById('id_new_tel_agenda_temp').value;
                ramal = document.getElementById('id_new_ramal_agenda_temp').value;
                email = document.getElementById('id_new_email_agenda_temp').value;
                setor = document.getElementById('id_new_setor_agenda_temp').value;
                status_agenda = document.getElementById('id_new_status_agenda').value;


                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'register_agenda',
                        nome: nome,
                        telefone: telefone,
                        ramal: ramal,
                        email: email,
                        setor: setor,
                        status_agenda: status_agenda

                    }, success: function (data) {


                        console.log(data);
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            if (name.RESULT == "TRUE") {
                                location.reload();
                            }
                        });


                    }
                });



            }




            //EVENTOS ONBLUR
            function mostrar_telefone_associado() {
                var nome = document.getElementById('id_new_nome_agenda').value;
                if (nome.length < 4) {
                    document.getElementById('id_new_nome_agenda').value = '';
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
                                    document.getElementById('id_new_tel_agenda_temp').value = name.HASH_PRIVATE_TELEFONE;
                                } else {
                                    document.getElementById('id_new_tel_agenda').value = '';
                                }
                            });
                        }
                    });

                    mostrar_email_associado();
                    mostrar_setor_associado();
                    mostrar_ramal_associado();
                }
            }



            function mostrar_ramal_associado() {
                var nome = document.getElementById('id_new_nome_agenda').value;
                $.ajax({

                    url: "../api.php",
                    method: "post",
                    data: {request: "mostrar_ramal_associado",
                        nome: nome

                    }, success: function (data) {
                        console.log(data);
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);

                            if (name.RESULT == 'TRUE') {
                                document.getElementById('id_new_ramal_agenda').value = name.NUM_RAMAL;
                                document.getElementById('id_new_ramal_agenda_temp').value = name.NUM_RAMAL;
                            } else {
                                document.getElementById('id_new_ramal_agenda').value = '';
                            }
                        });
                    }
                });
            }


            function mostrar_email_associado() {
                var nome = document.getElementById('id_new_nome_agenda').value;

                $.ajax({

                    url: "../api.php",
                    method: "post",
                    data: {request: "mostrar_email_associado",
                        nome: nome

                    }, success: function (data) {
                        console.log(data);
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);

                            if (name.RESULT == 'TRUE') {
                                document.getElementById('id_new_email_agenda').value = name.D_EMAIL;
                            } else {
                                document.getElementById('id_new_email_agenda').value = '';
                            }
                        });
                    }
                });
            }


            function mostrar_setor_associado() {
                var nome = document.getElementById('id_new_nome_agenda').value;

                $.ajax({

                    url: "../api.php",
                    method: "post",
                    data: {request: "mostrar_setor_associado",
                        nome: nome

                    }, success: function (data) {
                        console.log(data);
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);

                            if (name.RESULT == 'TRUE') {
                                document.getElementById('id_new_setor_agenda').value = name.D_SETOR;
                                document.getElementById('id_new_setor_agenda_temp').value = name.HASH_PRIVATE_SETOR;
                            } else {
                                document.getElementById('id_new_setor_agenda').value = '';
                            }
                        });
                    }
                });
            }





            //OBTER ID DOS DATA-LIST (EMAIL)
            /*
             $(document).ready(function () {
             $('#id_new_email_agenda').change(function () {
             var value = $('#id_new_email_agenda').val();
             //alert($('#list_new_email_agenda [value="' + value + '"]').data('value'));
             document.getElementById('id_new_email_agenda_temp').value = $('#list_new_email_agenda [value="' + value + '"]').data('value');
             });
             });
             */

            //OBTER ID DOS DATA-LIST (SETOR)
            /*
             $(document).ready(function () {
             $('#id_new_setor_agenda').change(function () {
             var value = $('#id_new_setor_agenda').val();
             //alert($('#list_new_setor_agenda [value="' + value + '"]').data('value'));
             document.getElementById('id_new_setor_agenda_temp').value = $('#list_new_setor_agenda [value="' + value + '"]').data('value');
             });
             });
             */

            //OBTER ID DOS DATA-LIST (NOME)
            /*
             $(document).ready(function () {
             $('#id_new_nome_agenda').change(function () {
             var value = $('#id_new_nome_agenda').val();
             //alert($('#list_new_nome_agenda [value="' + value + '"]').data('value'));
             document.getElementById('id_new_nome_agenda_temp').value = $('#list_new_nome_agenda [value="' + value + '"]').data('value');
             });
             });
             */

            //OBTER ID DOS DATA-LIST (TELEFONE)
            /*
             $(document).ready(function () {
             $('#id_new_tel_agenda').change(function () {
             var value = $('#id_new_tel_agenda').val();
             //alert($('#list_new_tel_agenda [value="' + value + '"]').data('value'));
             document.getElementById('id_new_tel_agenda_temp').value = $('#list_new_tel_agenda [value="' + value + '"]').data('value');
             });
             });
             */



        </script>
    </body>
</html>
