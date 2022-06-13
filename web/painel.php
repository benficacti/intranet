<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/css.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap-table.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
        <meta charset="iso-8859-1"/>
        <title></title>
    </head>
    <body>
        <div class="splash">
            <h1><?php include './svg/bb.svg' ?></h1>
            <h1 class="fade-in">BEM VINDO A INTRANET</h1>
        </div>

        <div class="d-flex backbenfacil" id="wrapper" >

            <!-- Sidebar -->
            <?php
            $page = 'painel'; // HABILITAR MENU NA TELA ATUAL 
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">



                    <!-- CORPO MENU -->
                    <div class="row col-md-12" style="margin:0 auto; cursor: pointer">
                        <div class="col-md-12 card_size" >

                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="vagasClick()">
                                    <?php
                                    include './svg/cv.svg'
                                    ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        VAGAS DE EMPREGO
                                    </span>
                                </div>

                            </div>

                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="telUteisClick()">
                                    <?php
                                    include './svg/fone.svg'
                                    ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        RAMAIS
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="agendaClick()">
                                    <?php
                                    include './svg/agenda.svg'
                                    ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        AGENDA/CONTATO
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="emailClick()">
                                    <?php
                                    include './svg/emails.svg'
                                    ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        EMAIL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="portariasClick()">
                                    <?php
                                    include './svg/controle_acesso.svg'
                                    ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        CONTROLE DE ACESSO 
                                    </span>
                                </div>
                            </div>

                            <!--
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            <div class="menu_home_item">

                                <div class="imagem_icone">
                            <?php
                            include './svg/archive.svg'
                            ?>
                                </div>
                                <div class="text_icone">
                                    <span class="text_menu_custom">
                                        MURAL
                                    </span>
                                </div>
                            </div>
                            
                            -->
                        </div>

                    </div>

                </div>


            </div>


        </div>

        <input type="hidden" id="hash_cartao" value="0">
        <script src="js/lottie-player.js"></script>
        <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap-table.min.js"></script>
        <link rel="stylesheet" href="fontawesome/js/all.js" type="text/css"/>

        <script src="js/app.js"></script>



        <!-- Menu Toggle Script -->
        <script>

                                    $("#menu-toggle").click(function (e) {
                                        e.preventDefault();
                                        $("#wrapper").toggleClass("toggled");
                                    });
        </script>
        <script type="text/javascript">

            $(".splash").hide();
            



            //REDIRECT
            function emailClick() {
                location.href = 'menu_email';
            }
            function telUteisClick() {
                location.href = 'menu_telefone_uteis';
            }
            function agendaClick() {
                location.href = 'listagem_agenda';
            }
            function vagasClick() {
                location.href = 'vagas';
            }
            function portariasClick() {
                location.href = 'http://192.168.0.15/portarias/login.php';
            }
            //END REDIRECT
        </script>
    </body>
</html>
