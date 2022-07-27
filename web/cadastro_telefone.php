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
        </style>
    </head>
    <body>
        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'novo_telefone'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">
                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                        <label class="title_cartoes_pendentes text-title-table class_title">NOVOS TELEFONES</label>
                    </div>
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row">
                                    <table class="table table-with-links">
                                        <thead style="  background-color: #0976b4; text-align: center !important">
                                            <tr class="class_tr">
                                                <th scope="col" id="titulo_tabela">TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">TIPO TELEFONE</th>
                                                <th scope="col" id="titulo_tabela">SETOR</th>
                                                <th scope="col" id="titulo_tabela">GARAGEM</th>
                                            </tr>
                                        </thead>

                                        <tbody id="id_texto_resultado" style="text-align: center !important">
                                            <tr class="class_tr">
                                                <td>
                                                    <input type="text" id="id_new_telephone" class="form-control">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="id_tipo_telefone">

                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="hidden" id="id_setor_lista_temp" />
                                                    <input type="text"  id="id_setor_lista_input" placeholder="SELECIONE SETOR" data-toggle="modal" data-target="#modal_select_setor" onclick="search_setor()"  class="form-control" readonly="true" autocomplete="off">
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

                    <!--
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
                    
                    -->




                </div>


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
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="id_setor_telefone" onkeyup="search_setor()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_pointer" id="list_new_setor_telefone">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL SETOR FIM -->


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



            function search_setor() {
                var setor = document.getElementById('id_setor_telefone').value;
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
                        document.getElementById('list_new_setor_telefone').innerHTML = res;

                    }
                });
            }


            function retornoSetor(v, v2) {
                document.getElementById('id_setor_lista_input').value = v2;
                document.getElementById('id_setor_lista_temp').value = v;
                document.getElementById('id_modal_setor').click();
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
                        document.getElementById('id_tipo_telefone').innerHTML =  res;
                    }
                });
            }

            function salvar_telefone() {

                var telefone, operadora, tipo_telefone, setor, garagem;
                telefone = document.getElementById('id_new_telephone').value;
                operadora = 2;
                tipo_telefone = document.getElementById('id_tipo_telefone').value;
                setor = document.getElementById('id_setor_lista_temp').value;
                garagem = document.getElementById('id_garagem_lista').value;
                
                
                var telefone_sty = document.getElementById('id_new_telephone');
                var tipo_telefone_sty = document.getElementById('id_tipo_telefone');
                var setor_sty = document.getElementById('id_setor_lista_input');
                var garagem_sty = document.getElementById('id_garagem_lista');
                if(telefone.length < 2){
                    telefone_sty.style.boxShadow = '3px 3px 3px 3px red';
                    telefone_sty.focus();
                    return false;
                }
                if(tipo_telefone < 1){
                    tipo_telefone_sty.style.boxShadow = '3px 3px 3px 3px red';
                    tipo_telefone_sty.focus();
                    return false;
                }
                if(setor.length < 1){
                    setor_sty.style.boxShadow = '3px 3px 3px 3px red';
                    setor_sty.focus();
                    return false;
                }
                if(garagem< 1){
                    garagem_sty.style.boxShadow = '3px 3px 3px 3px red';
                    garagem_sty.focus();
                    return false;
                }
                

                $.ajax({

                    url: "../api.php",
                    method: "post",
                    data: {request: "salvar_telefone",
                        telefone: telefone,
                        operadora: operadora,
                        tipo_telefone: tipo_telefone,
                        setor: setor,
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
