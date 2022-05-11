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
                        <label class="title_cartoes_pendentes text-title-table">NOVOS TELEFONES</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="background-color: #0976b4; text-align: center !important">
                                            <tr>
                                                <th scope="col" id="titulo_tabela">TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">OPERADORA</th>
                                                <th scope="col" id="titulo_tabela">TIPO TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">GARAGEM</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr>
                                                <td>
                                                    <input type="text" id="id_new_telephone" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="id_operadora_lista"></select>
                                                </td>
                                                <td>
                                                    <select class="form-control" id="id_tipo_telefone">
                                                        
                                                    </select>
                                                </td>
                                                <td><select class="form-control" id="id_garagem_lista">
                                                        <option value="0">SELECIONE</option>
                                                        <option value="1">BARUERI</option>
                                                        <option value="2">JANDIRA</option>
                                                        <option value="3">ITAPEVI</option>
                                                        <option value="4">SOROCABA</option>
                                                        <option value="5">RALIP</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="form-control btn" style="background: #28a745; color: #FFF" onclick="salvar_telefone()" >SALVAR</button>

                                </div>   
                            </div>

                        </div>
                    </div>


                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <label class="title_cartoes_pendentes text-title-table">ASSOCIAR TELEFONE</label>
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


            search_setor();
            function search_setor() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_setor'
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            res += '<option>' + name.SETOR + '</option>';
                        });
                        document.getElementById('id_setor_lista').innerHTML = '<option value="0">SELECIONE</option>'+res;
                    }
                });
            }



            search_operadora();
            function search_operadora() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_operadora'
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            res += '<option value=' + name.ID_OPERADORA + '>' + name.NOME + '</option>';
                        });
                        document.getElementById('id_operadora_lista').innerHTML = '<option value="0">SELECIONE</option>'+res;
                    }
                });
            }

            search_tipo_telefone();
            function search_tipo_telefone() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_tipo_telefone'
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            res += '<option value=' + name.ID_TIPO_TELEFONE + '>' + name.TIPO_TELEFONE + '</option>';
                        });
                        document.getElementById('id_tipo_telefone').innerHTML = '<option value="0">SELECIONE</option>'+res;
                    }
                });
            }

            function salvar_telefone() {

                var telefone, operadora, tipo_telefone, garagem;
                telefone = document.getElementById('id_new_telephone').value;
                operadora = document.getElementById('id_operadora_lista').value;
                tipo_telefone = document.getElementById('id_tipo_telefone').value;
                garagem = document.getElementById('id_garagem_lista').value;

                $.ajax({

                    url: "../api.php",
                    method: "post",
                    data: {request: "salvar_telefone",
                        telefone: telefone,
                        operadora: operadora,
                        tipo_telefone: tipo_telefone,
                        garagem: garagem
                    }, success: function (data) {
                        console.log(data);
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            if (name.RESULT == 'TRUE') {
                                location.reload();
                            }
                        });
                    }
                });
            }



        </script>
    </body>
</html>