<?php
$cod = filter_input(INPUT_GET, 'cod');
$cod_page = filter_input(INPUT_GET, 'cod_page');
?>

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
                        <label class="title_cartoes_pendentes text-title-table"><i class="fas fa-users"></i> DIVULGAÇÃO </label>                  
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row col-2 panel_btn_voltar">
                                    <button class="form-control" id="id_btn_voltar" style="font-size: 12px; margin-bottom: 2px; background: #05AE0E; color: #ffffff; float: left" onclick="redirect()">Voltar</button>
                                </div>
                                <div class="row">
                                    <input type="hidden" id="id_cod_ocorrencia_view" value="<?php echo $cod ?>"/>
                                    <input type="hidden" id="id_cod_page_ocorrencia_view" value="<?php echo $cod_page ?>"/>
                                    <iframe src="../uploads/<?php echo $cod; ?>" style="width: 100%;height: 410px;border: none;"></iframe>
                                </div>   
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
                                        $('.panel_btn_voltar').hide();
                                        var cod_page = document.getElementById('id_cod_page_ocorrencia_view').value;
                                        if (cod_page == 'pvaga') {
                                            $('.panel_btn_voltar').show();
                                        }
        </script>
        <script type="text/javascript">

            function redirect() {
                window.history.back();
            }
        </script>
    </body>
</html>
