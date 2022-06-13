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
    </head>
    <body>
        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'cadastrar_email'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">

                    <div class="painel_listagem_email">
                        <div class="col-md-12 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                            <label class="title_cartoes_pendentes text-title-table class_title">CADASTRO DE EMAIL</label>
                        </div>
                        <div class="col-md-12" style="margin:0 auto;">
                            <div class="col-md-12 text-left" style=" background-color:#0069D9;
                                 color:white; height:40px; border-radius: 8px">
                                <input type="email" name="cpf_cadastro" class="text-input-table" id="id_new_email" placeholder="novoemail@gmail.com.br" style="width: 60%" autofocus="true">
                                <button class="text-input-table btn-primary" style=" width: 35%; background: #005cbf; color: #FFF" onclick="cadastrar_email()">CADASTRAR</button>
                            </div>
                        </div>
                    </div>

                </div>


                <button type="button" id="button_automatico_animation_email_cadastrado" class="btn btn-primary" data-toggle="modal" data-target="#modal_create_email" style="display: none">
                    Abrir modal de demonstração
                </button>

                <div class="modal fade" id="modal_create_email" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class='row'>
                            <div class='col-md-6' style='margin:0 auto;'>
                                <lottie-player src="./lottie_files/email_create.json" mode="bounce" background="transparent"  speed="1"  style="width: 30vw; height: 30vh;"  autoplay></lottie-player>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /#page-content-wrapper -->

            <button type="button" style="display:none"id='closeModal'  data-dismiss="modal">
            </button>
        </div>
        <input type="hidden" id="hash_cartao" value="0">
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

            function cadastrar_email() {
                var email = document.getElementById('id_new_email').value;
                //button automático event click cast parse
                var email_style = document.getElementById('id_new_email');

                if (email.length < 5) {
                    email_style.style.boxShadow = "3px 3px 3px 3px #ff0000";
                    email_style.focus();
                    return false;
                }
                if (!email.includes("@")) {
                    alert(email + ' NÃO É UM EMAIL VÁLIDO!');
                    email_style.focus();
                    return false;
                }

                $.ajax({

                    url: '../api.php',
                    method: 'post',
                    data: {request: 'cadastrar_email',
                        email: email
                    }, success: function (data) {
                        console.log(data);
                        var obj = JSON.parse(data);

                        obj.forEach(function (name, value) {
                            if (name.RESULT) {

                                document.getElementById('button_automatico_animation_email_cadastrado').click();
                                setTimeout(() => {
                                    location.reload();
                                }, 4000);
                                //location.reload();

                            }
                        });
                    }
                });

            }



        </script>
    </body>
</html>
