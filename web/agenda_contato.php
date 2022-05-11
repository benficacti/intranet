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
        </style>
    </head>
    <body>
        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'menu_telefone_uteis'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <label class="title_cartoes_pendentes text-title-table">AGENDA CONTATO</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr>
                                                <th scope="col" id="titulo_tabela">NOME</th>
                                                <th scope="col" id="titulo_tabela">TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">EMAIL</th>
                                                <th scope="col" id="titulo_tabela">STATUS</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr>
                                                <td>
                                                    <input type="text" list="list_new_nome_agenda" id="id_new_nome_agenda" class="form-control">
                                                    <datalist id="list_new_nome_agenda">
                                                        
                                                    </datalist>
                                                </td>
                                                <td>
                                                    <input type="text" list="list_new_tel_agenda" id="id_new_tel_agenda" class="form-control">
                                                    <datalist id="list_new_tel_agenda">

                                                    </datalist>

                                                </td>
                                                <td>
                                                    <input type="text" list="list_new_email_agenda" id="id_new_email_agenda" class="form-control">
                                                    <datalist id="list_new_email_agenda">

                                                    </datalist>
                                                </td>
                                                <td><select class="form-control" id="id_new_status_agenda">
                                                        <option value="0">SELECIONE</option>
                                                        <option value="1">ATIVAR</option>
                                                        <option value="2">DESATIVAR</option>
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


        </script>
        <script type="text/javascript">



            $("tr").addClass("bar_top"); //CSS PARA ESTRUTURA DAS TABELAS



            search_nome_agenda();
            function search_nome_agenda() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_nome_agenda'
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.HASH);
                            res += '<option>' + name.NOME_AGENDA + '</option>';
                        });
                        document.getElementById('list_new_nome_agenda').innerHTML = '<option>SELECIONE</option>' + res;
                    }
                });
            }




            search_telefone();
            function search_telefone() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_telefone'
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.HASH);
                            res += '<option>' + name.TELEFONE + '</option>';
                        });
                        document.getElementById('list_new_tel_agenda').innerHTML = '<option>SELECIONE</option>' + res;
                    }
                });
            }

            search_email();
            function search_email() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_email'
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);
                            res += '<option>' + name.ENDERECO + '</option>';
                        });
                        document.getElementById('list_new_email_agenda').innerHTML = '<option>SELECIONE</option>' + res;
                    }
                });
            }






            function register_agenda() {
                var nome, telefone, email, status_agenda;
                nome = document.getElementById('id_new_nome_agenda').value;
                telefone = document.getElementById('id_new_tel_agenda').value;
                email = document.getElementById('id_new_email_agenda').value;
                status_agenda = document.getElementById('id_new_status_agenda').value;


                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'register_agenda',
                        nome: nome,
                        telefone: telefone,
                        email: email,
                        status_agenda: status_agenda

                    }, success: function (data) {

                        console.log(data);
                    }
                });
            }
            
            
            
            
            //EVENTOS ONBLUR
            function mostrar_telefone_associado(){
                
                var nome = document.getElementById('id_new_nome_agenda').value;
                
                $.ajax({
                    
                    url: "../api.php",
                    method: "post",
                    data: {request:"mostrar_telefone_associado",
                        nome: nome
                        
                    },success: function (data) {
                        console.log(data);
                    }
                });
            }



        </script>
    </body>
</html>
