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

            /*INICIO TABELA*/
            .table-container {
                height: 11em;
            }
            table {
                display: flex;
                flex-flow: column;
                height: 120%;
                width: 100%;
            }
            table thead {
                /* head takes the height it requires, 
                and it's not scaled when table is resized */
                flex: 0 0 auto;
                width: calc(100% - 1.1em);
            }
            table tbody {
                /* body takes all the remaining available space */
                flex: 1 1 auto;
                display: block;
                overflow-y: scroll;
            }
            table tbody tr {
                width: 100%;
            }
            table thead, table tbody tr {
                display: table;
                table-layout: fixed;
            }
            /*FIM TABELA*/


            .class_painel_vagas{
                border: 1px solid #000;
                text-align: center;
                border-radius: 8px;
            }
            .class_paragrafo{
                padding-top: 15px;
            }

            .spin {
                cursor: pointer;
            }





        </style>
    </head>
    <body>
        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'vagas_candidatos'; // HABILITAR MENU NA TELA ATUAL
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
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> CANDIDATOS (RECRUTAMENTO INTERNO)</label>
                    </div>
                    <div class="col-md-12">
                        <lottie-player src="./lottie_files/recruitment_2.json" mode="bounce" background="transparent"  speed="1" loop  style="width: 50vw; height: 30vh; margin: 0 auto"  autoplay></lottie-player>
                        <div class="card" style="height: 40vh">
                            <div class="card-body">
                                <div class="row">
                                    <div class="container-lg class_painel_lista_vagas">
                                        <div class="row  table-container">
                                            <table class="table table-striped table-bordered table-sm" cellspacing="0"
                                                   width="100%" style=" font-family: Arial, Helvetica, sans-serif; text-align: center; text-transform: uppercase">
                                                <thead style=" background: #888">
                                                    <tr>
                                                        <th style="width: 45px">#
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(1)">Vaga
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(2)">Candidato
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(3)">Chapa
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(4)">Email
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(5)">Setor Atual
                                                        </th>
                                                        <th class="th-sm spin" onclick="search_candidato(6)">Situação
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="id_res_candidatos_vagas">


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <div class="container-lg class_painel_candidatar">
                                        <div class="row">
                                            <!--
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                Launch demo modal
                                            </button>
                                            -->

                                            <!-- Modal -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" id="id_painel_candidatar">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #0000ff">Candidato:[]</h5>
                                                            <input type="hidden" id="id_nome_candidato_vaga_temp">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="fechar()">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>



                                                        <div class="modal-body class_painel_descricao_candidatar">
                                                            <div class="card-body">
                                                                <div class="row">

                                                                    <div class="col-md-8 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <input type="hidden" id="id_hash_candidato_vaga_temp">
                                                                            <label style="color: #0000ff">SITUAÇÃO DO CANDIDATO</label>
                                                                            <select class="form-control" id="id_status_candidato_vaga">
                                                                                <option value="1">Em Análise</option>
                                                                                <option value="2">Interrompido</option>
                                                                                <option value="3">Aguardando Candidato</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label style="margin-top: 20px"></label>
                                                                            <button class="form-control btn btn-success" onclick="alter_status_candidato()">Registrar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-12 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label style="color: #0000ff">MENSAGEM PARA O CANDIDATO</label>
                                                                            <textarea class="form-control"  id="id_msn_candidato" placeholder="Escreva aqui..." style="height: 200px"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-12 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label style="color: #0000ff">EMAIL CANDIDATO</label>
                                                                            <input class="form-control" id="id_email_enviar_candidato" placeholder="email@candidato" readonly="true" style="color: #bd2130">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"  onclick="fechar()">Fechar</button>
                                                            <button type="button" class="btn btn-primary btn_email_enviar"   onclick="disparar_email_candidato()">Enviar >>Email</button>
                                                            <button type="button" class="btn btn-danger btn_email_enviado" >Email enviado</button>
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


                <!-- ANIMATION -->
                <button type="button" id="button_automatico_animation_registrar_cadastrado" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_email" style="display: none">
                    Abrir modal de demonstração
                </button>

                <div class="modal fade" id="modal_create_email" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="./lottie_files/registrar_vaga.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>

                <button type="button" id="button_automatico_animation_registrar_cadastrado_falha" class="btn btn-primary" data-toggle="modal" data-target="#modal_falha_cpf" style="display: none">
                    Abrir modal de demonstração
                </button>

                <div class="modal fade" id="modal_falha_cpf" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="./lottie_files/not_found_doc.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>

                <button type="button" id="button_automatico_animation_check_comunicar_candidato" class="btn btn-primary" data-toggle="modal" data-target="#modal_check_candidato" style="display: none">
                    Abrir modal de demonstração
                </button>

                <div class="modal fade" id="modal_check_candidato" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="./lottie_files/check.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
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

            $('.btn_email_enviado').hide();
            function fechar() {
                $('.btn_email_enviar').show();
            }





            function retorno(cod) {


                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_candidato_especifico',
                        cod: cod
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {

                            console.log(name.EMAIL);
                            document.getElementById('exampleModalLongTitle').innerHTML = 'CANDIDATO: <font color=black>' + name.NOME + '</font>';
                            document.getElementById('id_email_enviar_candidato').value = name.EMAIL;
                            document.getElementById('id_status_candidato_vaga').value = name.STATUS_CAND;
                            document.getElementById('id_hash_candidato_vaga_temp').value = name.HASH_ID;
                            document.getElementById('id_nome_candidato_vaga_temp').value = name.NOME;
                            document.getElementById('id_msn_candidato').value = name.MSN;



                            if (name.MSN == null) {
                                $('.btn_email_enviado').hide();
                            } else {
                                $('.btn_email_enviar').hide();
                                $('.btn_email_enviado').show();
                            }

                        });
                    }
                });

            }



            search_candidato();
            function search_candidato(v) {
                var cod_filter = v;
                if (cod_filter === undefined) {
                    cod_filter = 0;
                }
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_candidato',
                        cod_filter: cod_filter
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        var res = '';
                        var count = 1;
                        obj.forEach(function (name, value) {
                            res += '<tr><td style="width: 45px">' + count + '</td><td>' + name.VAGA + '</td><td>' + name.NOME + '</td><td>' + name.CHAPA + '</td><td>' + name.EMAIL + '</td><td>' + name.SETOR + '</td><td class="spin" data-toggle="modal" data-target="#exampleModalLong" onClick="retorno(' + "'" + name.HASH + "'" + ')">' + name.STATUS + '</td></tr>';
                            count++;
                        });
                        document.getElementById('id_res_candidatos_vagas').innerHTML = res;
                    }
                });
            }


            function disparar_email_candidato() {
                var msn_email, candidato, email, nome_candidato;
                msn_email = document.getElementById('id_msn_candidato').value;
                candidato = document.getElementById('id_hash_candidato_vaga_temp').value;
                nome_candidato = document.getElementById('id_nome_candidato_vaga_temp').value;
                email = document.getElementById('id_email_enviar_candidato').value;


                alter_status_candidato_automaticamente();//ALTER STATUS DO CANDIDATO

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'disparar_email_candidato',
                        msn_email: msn_email,
                        candidato: candidato
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {

                            document.getElementById('button_automatico_animation_check_comunicar_candidato').click();
                            setTimeout(() => {
                                location.href = 'http://192.168.0.185/intranet/web/enviar_email?email=' + email + '&nome=' + nome_candidato + '&msn=' + msn_email;
                            }, 3000);

                        });
                    }
                });

            }


            function alter_status_candidato() {

                var status_candidato = document.getElementById('id_status_candidato_vaga').value;
                var candidato = document.getElementById('id_hash_candidato_vaga_temp').value;
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'alter_status_candidato',
                        status_candidato: status_candidato,
                        candidato: candidato
                    }, success: function (data) {
                        var obj = JSON.parse(data);
                        obj.forEach(function (name, value) {
                            if (name.RESULT === "TRUE") {
                                document.getElementById('button_automatico_animation_check_comunicar_candidato').click();
                                setTimeout(() => {
                                    location.href = 'vagas_candidatos';
                                }, 3000);
                            }
                        });
                    }
                });
            }


            function alter_status_candidato_automaticamente() {

                var status_candidato = 3;
                var candidato = document.getElementById('id_hash_candidato_vaga_temp').value;
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'alter_status_candidato',
                        status_candidato: status_candidato,
                        candidato: candidato
                    }, success: function (data) {
                    }
                });
            }



            function filtrar_candidatos() {

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'filtrar_candidatos'
                    }, success: function (data) {
                    }
                });
            }



        </script>
    </body>
</html>
