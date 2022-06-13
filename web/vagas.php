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

            .box {
                line-height: 25px;
                text-align: center;

            }

            .box{
                background-color: #005cbf;
                color: white;
                opacity: 0.8;
                transition: 0.3s;
                transform: scale(0.98);
            }

            .box:hover
            {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(0.8);
                opacity: 1
            }

            .class_input_vaga{
                border: solid 1px #005cbf
            }

            .class_pointer{
                cursor: pointer !important;
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
            $page = ''; // HABILITAR MENU NA TELA ATUAL
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
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> DIVULGAÇÃO DE VAGAS (RECRUTAMENTO INTERNO)</label>
                    </div>
                    <div class="col-md-12">
                        <lottie-player src="./lottie_files/recrutamento_interno.json" mode="bounce" background="transparent"  speed="1" loop  style="width: 50vw; height: 30vh; margin: 0 auto"  autoplay></lottie-player>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="container-lg class_painel_lista_vagas">
                                        <div class="row spin" id="id_vagas_publicadas">


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
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Recrutamento (Interno)</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="fechar()">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
                                                                <thead style="font-size: 16px">
                                                                    <tr class="class_tr">
                                                                        <td scope="col">#</td>
                                                                        <td scope="col">VAGA</td>
                                                                        <td scope="col">PERÍODO</td>
                                                                        <td scope="col">SETOR</td>
                                                                        <td scope="col">GARAGEM</td>
                                                                <input type="hidden" id="id_vagas_emprego_temp"/>
                                                                <input type="hidden" id="id_hash_emprego_temp"/>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="id_res_vaga">

                                                                </tbody>
                                                                <thead style="font-size: 18px">
                                                                    <tr style="background: #007bff">
                                                                        <td scope="col" colspan="5" >DETALHE DA VAGA</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="id_res_detalhe_vaga">

                                                                </tbody>
                                                                <tbody class="class_painel_descricao_update">
                                                                    <tr style="background-color: #FFF">
                                                                        <td colspan="5">
                                                                            <textarea class="form-control" id="id_descricao_edicao_vaga" placeholder="Altere a descrição da vaga"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>



                                                        <div class="modal-body class_painel_descricao_candidatar">
                                                            <div class="card-body">
                                                                <div class="row">

                                                                    <div class="col-md-4 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label>CHAPA*</label>
                                                                            <input type="number" id="id_chapa_candidato_vaga" class="form-control class_input_vaga" placeholder="CHAPA"  id="" max="6" autofocus="" autocomplete="off">                                                    
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-8 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label>SETOR ATUAL*</label>   
                                                                            <input type="hidden" id="id_setor_candidato_temp" />
                                                                            <input type="text"  id="id_setor_atual_candidato" placeholder="SELECIONE SETOR ATUAL" data-toggle="modal" data-target="#modal_select_vaga" onclick="search_setor()" class="form-control class_pointer" readonly="true" autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-4 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label>CPF*</label>
                                                                            <input type="password" id="id_doc_candidato_vaga" class="form-control class_input_vaga" placeholder="CPF"  id="" max="6"  autocomplete="off">                                                    
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-8 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label>EMAIL</label>
                                                                            <input type="email" id="id_email_candidato_vaga" class="form-control class_input_vaga" placeholder="EMAIL"  id="" max="6"  autofocus="" autocomplete="off">                                                    
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-8 class_chapa_painel">
                                                                        <div class="form-group">
                                                                            <label>(*) Campos obrigatorios.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 class_chapa_painel class_erro_dados">
                                                                        <div class="form-group" style="text-align: center">
                                                                            <label style="color:#a71d2a">Verifique seus dados.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        



                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" onclick="fechar()" data-dismiss="modal">Fechar</button>
                                                            <button type="button" class="btn btn-warning class_btn_editar" data-toggle="modal" data-target="#modal_select_auth_edit">Editar</button>
                                                            <button type="button" class="btn btn-success class_btn_salvar" onclick="salvar()">Salvar</button>
                                                            <button type="button" class="btn btn-primary class_btn_candidatar" onclick="canditadar()">Candidatar</button>
                                                            <button type="button" class="btn btn-success class_btn_registrar" onclick="registrar_vaga()">Registrar</button>
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


                <!-- MODAL SETOR INICIO -->
                <div class="modal fade" id="modal_select_vaga" role="dialog">
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
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="id_setor_candidato" onkeyup="search_setor()" placeholder="PESQUISE" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                    <tbody class="class_pointer" id="list_new_setor_candidato">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL SETOR FIM -->


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
                            <div class='col-md-7' style='margin:0 auto'>
                                <lottie-player src="./lottie_files/verify.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>




                <!-- MODAL AUTH INICIO -->
                <div class="modal fade" id="modal_select_auth" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Faça seu acesso</h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="id_auth">
                                    <lottie-player src="./lottie_files/auth.json" mode="bounce" background="transparent"  speed="3" loop  style="width: 20vw; height: 10vh; margin: 0 auto"  autoplay></lottie-player>
                                </div>
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff; height: 1px">
                                            <td scope="col" colspan="6"  style="padding: 2px"></td>
                                        </tr>
                                        <tr style="background: #32383e">
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="user" placeholder="Usuário" autocomplete="off"></td>
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="password" id="password" placeholder="Senha" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                </table>
                                <button class="form-control" style="background: #062c33; color: #FFF" onclick="modulo_rh()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL AUTH FIM -->
                
                <!-- MODAL AUTH_EDIT INICIO -->
                <div class="modal fade painel_acesso_edit" id="modal_select_auth_edit" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" id="id_painel_candidatar">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Faça seu acesso</h5>
                                <button type="button" class="close" data-dismiss="modal" id="id_modal_vaga" aria-label="Close"  onclick="fechar()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="id_auth_edit">
                                    <lottie-player src="./lottie_files/auth.json" mode="bounce" background="transparent"  speed="3" loop  style="width: 20vw; height: 10vh; margin: 0 auto"  autoplay></lottie-player>
                                </div>
                                <table class="table table-bordered" style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 12px">

                                    <thead style="font-size: 18px">
                                        <tr style="background: #007bff; height: 1px">
                                            <td scope="col" colspan="6"  style="padding: 2px"></td>
                                        </tr>
                                        <tr style="background: #32383e">
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="text" id="user_edit" placeholder="Usuário" autocomplete="off"></td>
                                            <td scope="col" colspan="5" ><input  class="form-control class_input_vaga" type="password" id="password_edit" placeholder="Senha" autocomplete="off"></td>
                                        </tr>
                                    </thead>
                                </table>
                                <button class="form-control" style="background: #062c33; color: #FFF" onclick="modulo_rh_edit()">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL AUTH_EDIT FIM -->
                

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

            // EVENTOS
            $(".class_erro_dados").hide();
            $(".painel_descricao").hide();
            $(".class_painel_descricao_candidatar").hide();
            $(".class_btn_registrar").hide();
            $(".class_btn_salvar").hide();
            $(".class_painel_descricao_update").hide();
            var perfil = 1;
            if (perfil === 1) {
                $(".class_btn_editar").show();
            }

            function salvar() {
                document.getElementById('id_painel_candidatar').style.width = '150%';
                $(".class_painel_descricao_candidatar").show();
                $(".class_painel_descricao_candidatar").hide();
                $(".class_btn_candidatar").hide();
                $(".class_btn_registrar").hide();
                update_descricao();
            }

            function editar() {
                document.getElementById('id_painel_candidatar').style.width = '150%';
                $(".class_painel_descricao_candidatar").hide();
                $(".class_btn_candidatar").hide();
                $(".class_btn_registrar").hide();
                $(".class_btn_editar").hide();
                $(".class_painel_descricao_update").hide();
                $(".class_btn_salvar").show();
                $(".class_painel_descricao_update").show();
            }

            function canditadar() {
                document.getElementById('id_painel_candidatar').style.width = '150%';
                $(".class_painel_descricao_candidatar").show();
                $(".class_btn_candidatar").hide();
                $(".class_btn_editar").hide();
                $(".class_btn_registrar").show();
            }

            function fechar() {
                document.getElementById('id_painel_candidatar').style.width = '100%';
                $(".class_painel_descricao_candidatar").hide();
                $(".class_painel_descricao_update").hide();
                $(".class_btn_candidatar").show();
                $(".class_btn_editar").show();
                $(".class_btn_registrar").hide();
                $(".class_btn_salvar").hide();
                location.reload();
            }

            //FIM EVENTOS
            search_vagas_publicadas();
            function search_vagas_publicadas() {
                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_vagas_publicadas'
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            //console.log(name.ENDERECO);
                            res += '<div class="col-xl-4 class_painel_vagas box"  data-toggle="modal" data-target="#exampleModalLong"><p class="class_paragrafo" onClick="retorno(' + "'" + name.HASH + "'" + ')">' + name.VAGA + '</p></div>';
                        });
                        document.getElementById('id_vagas_publicadas').innerHTML = res;
                    }
                });
            }

            function retorno(cod) {

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'search_vagas',
                        cod: cod
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        var detalhe = '';
                        var hash_id_vagas_emprego = '';
                        var hash_emprego = '';
                        obj.forEach(function (name, value) {

                            //console.log(name.ENDERECO);
                            res = '<tr><td scope="row">1</td><td>' + name.VAGA + '</td><td>' + name.PERIODO + '</td><td>' + name.SETOR + '</td><td>' + name.EMPRESA + '</td></tr>';
                            detalhe = '<tr><td colspan="5">' + name.DESCRICAO + '</td></tr>';
                            hash_id_vagas_emprego = name.HASH_ID_VAGAS;
                            hash_emprego = name.HASH_COMUNICACAO;
                        });
                        document.getElementById('id_res_vaga').innerHTML = res;
                        document.getElementById('id_res_detalhe_vaga').innerHTML = detalhe;
                        document.getElementById('id_vagas_emprego_temp').value = hash_id_vagas_emprego;
                        document.getElementById('id_hash_emprego_temp').value = hash_emprego;

                    }
                });
            }




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
                            res += '<tr style="background-color: #FFF"><td onClick="retornoSetor(' + "'" + name.HASH_ID + "'" + ',' + "'" + name.SETOR + "'" + ')">' + name.SETOR + '</td></tr>';
                        });
                        document.getElementById('list_new_setor_candidato').innerHTML = res;

                    }
                });
            }

            function retornoSetor(v, v2) {
                document.getElementById('id_setor_atual_candidato').value = v2;
                document.getElementById('id_setor_candidato_temp').value = v;
                document.getElementById('id_modal_setor').click();
            }



            //OBTER ID DOS DATA-LIST (SETOR)
            /*
             $(document).ready(function () {
             $('#id_setor_candidato').change(function () {
             var value = $('#id_setor_candidato').val();
             //alert($('#list_setor_candidato [value="' + value + '"]').data('value'));
             document.getElementById('id_setor_candidato_temp').value = $('#list_setor_candidato [value="' + value + '"]').data('value');
             
             });
             });
             */



            //RegExp TIRAR CARACTERES ESPECIAIS
            /*
             function replacer(match, p1, p2, p3, offset, string) {
             // p1 não possui digitos,
             // p2 possui dígitos, e p3 não possui alfanuméricos
             return [p1, p2, p3].join(' - ');
             }
             setor = setor.replace(/([^\d]*)(\d*)([^\w]*)/, replacer);
             */

            function registrar_vaga() {

                var chapa, setor, doc, email;
                chapa = document.getElementById('id_chapa_candidato_vaga').value;
                setor = document.getElementById('id_setor_candidato_temp').value;
                doc = document.getElementById('id_doc_candidato_vaga').value;
                vaga = document.getElementById('id_vagas_emprego_temp').value;
                
                
                if ( email.length > 0 && !email.includes("@") && !email.includes(".com")) {
                    alert(email + ' NÃO É UM EMAIL VÁLIDO!');
                    email_style.focus();
                    return false;
                }

                if (chapa.length < 6) {
                    var chapa_style = document.getElementById('id_chapa_candidato_vaga');
                    chapa_style.style.boxShadow = "3px 3px 3px 3px red";
                    return chapa_style.focus();
                }

                if (setor.length < 1) {
                    var setor_style = document.getElementById('id_setor_atual_candidato');
                    setor_style.style.boxShadow = "3px 3px 3px 3px red";
                    return setor_style.focus();
                }

                if (doc.length < 6) {
                    var doc_candidato = document.getElementById('id_doc_candidato_vaga');
                    doc_candidato.style.boxShadow = "3px 3px 3px 3px red";
                    return doc_candidato.focus();
                }

                $('.class_painel_candidatar').hide();


                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'registrar_vaga',
                        vaga: vaga,
                        chapa: chapa,
                        setor: setor,
                        doc: doc,
                        email: email
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {

                            if (name.RESULT == 'TRUE') {
                                document.getElementById('button_automatico_animation_registrar_cadastrado').click();
                                setTimeout(() => {
                                    location.reload();
                                }, 3000);

                            } else {
                                var chapa_style = document.getElementById('id_chapa_candidato_vaga');
                                chapa_style.style.boxShadow = "3px 3px 3px 3px red";
                                var doc_candidato = document.getElementById('id_doc_candidato_vaga');
                                doc_candidato.style.boxShadow = "3px 3px 3px 3px red";
                                chapa_style.focus();
                                $(".class_erro_dados").show();
                                setTimeout(() => {
                                    $('.class_painel_candidatar').show();
                                }, 3000);


                            }
                        });

                    }
                });

            }


            function update_descricao() {

                var descricaoUpdate = document.getElementById('id_descricao_edicao_vaga').value;
                var hash_vagas_emprego = document.getElementById('id_hash_emprego_temp').value;

                if (descricaoUpdate.length < 1) {
                    var descricaoUpdateAction = document.getElementById('id_descricao_edicao_vaga');
                    descricaoUpdateAction.focus();
                    return descricaoUpdateAction.style.boxShadow = '3px 3px 3px 3px red';
                }


                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'update_descricao',
                        descricaoUpdate: descricaoUpdate,
                        hash_vagas_emprego: hash_vagas_emprego
                    }, success: function (data) {

                        var obj = JSON.parse(data);
                        var res = '';
                        obj.forEach(function (name, value) {
                            if (name.RESULT === "TRUE") {
                                location.reload();
                            }
                        });

                    }
                });
            }


            function modulo_rh() {
                var user = document.getElementById('user').value;
                var password = document.getElementById('password').value;
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
                                location.href = 'vagas_recursos_humanos';
                            } else {
                                res = '<lottie-player src="./lottie_files/auth_failed.json" mode="bounce" background="transparent"  speed="3"  style="width: 30vw; height: 20vh;"  autoplay></lottie-player>';
                                document.getElementById('id_auth').innerHTML = res;
                            }
                        });
                        
                        
                    }
                });

                // location.href = 'vagas_recursos_humanos';
            }
            
            
            
             function modulo_rh_edit() {
                var user = document.getElementById('user_edit').value;
                var password = document.getElementById('password_edit').value;
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
                                editar();
                            } else {
                                res = '<lottie-player src="./lottie_files/auth_failed.json" mode="bounce" background="transparent"  speed="3"  style="width: 30vw; height: 20vh;"  autoplay></lottie-player>';
                                document.getElementById('id_auth_edit').innerHTML = res;
                            }
                        });
                        
                        
                    }
                });

                // location.href = 'vagas_recursos_humanos';
            }


        </script>
    </body>
</html>
