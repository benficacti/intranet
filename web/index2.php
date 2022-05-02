<?php
session_start();
if (!isset($_SESSION['login'])) {
    // header('Location: login');
} else {
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/css.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="d-flex" id="wrapper" >
            <!-- Sidebar -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <div class="container-fluid">
                    <div class="row back_top_logo"  >
                        <div class="texto_logo">
                            <span class="custom_size_logo">
                                INTRANET
                            </span>
                        </div>
                    </div>  


                    <div class="row corpo_menu_home">
                        <div class="col-md-12 card_size" >
                            <!--<div class="texto_titulo_menu">
                                <span class="custom_size_titulo_menu">
                                    MURAL
                                </span>
                            </div>-->
                            <div class="menu_home_item">

                                <div class="imagem_icone" onclick="backMain()">
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
                        </div>

                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="fontawesome/js/all.js" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        
        <!-- jQuery para rodar o Ajax -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <!-- Menu Toggle Script -->
        <script>
        testar();
        function testar() {
            var tel, operadora, garagem, tipo_telefone;
            tel = '11972774738';
            operadora = 1;
            garagem = 1;
            tipo_telefone = 1;
            $.ajax({
                url: '../api.php',
                method: 'post',
                data: {
                    request: 'cadastro_telefone',
                    tel:           tel,
                    operadora:     operadora,
                    garagem:       garagem,
                    tipo_telefone: tipo_telefone

                }, success: function (data) {
                   console.log(data);
                }
            });
        }
        
        
        function backMain(){
           history.back();
       }
    </script>
    </body>
</html>
