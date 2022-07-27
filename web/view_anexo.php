<?php
session_start();

$sessãoLogin = (isset($_SESSION['idlogin'])) ? $_SESSION['idlogin'] : null;
if ($sessãoLogin == null) {

    header('Location: login.php');
}
include './persistencia/Conexao.php';
include './classes/Search.php';

$cod = filter_input(INPUT_GET, 'cod');
$cod_page = filter_input(INPUT_GET, 'cod_page');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>PV - Anexo</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <!--
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        -->
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        -->
        <link href="css/font_awesome.css" rel="stylesheet"/>
        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/css/demo.css" rel="stylesheet" />
        <link href="assets/css/fontawesome/css/all.css" rel="stylesheet" />
        <link href="css/cadastra_acesso.css"rel="stylesheet"/>
        <link href="cadastra_acesso1.css" rel="stylesheet"/>

        <!--
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        -->
        <script type="text/javascript" src="js/lottiefiles.js"></script>


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <style>
            .largura_label{
                width: 150px
            }
            .button_camera{
                background-color: #007bff;
                color: #FFF;
                font-weight: bold
            }

            .painel_selection{
                padding: 9px;
                background-color: #004262
            }

            .button_selection{
                background-color: #007bff;
                color: #FFF;
                font-weight: bold

            }
            .button_selectiond{
                background-color: #FF3636;
                color: #FFF;
                font-weight: bold

            }

            .button_save_gestor{
                background-color: #0056b3;
                color: #FFF;
                font-family: 'guillory';
                font-weight: bold;
                margin-top: 3px
            }

            #titulo_tabela{
                text-align: center;
                color: #FFF;
                font-weight: bold;
            }

            #divContent{
                overflow:auto;
            }

        </style>
    </head>

    <body class='sidebar-mini' style="width: 100%">
        <div class="wrapper">
            <div class="sidebar" data-color="" data-image="" style="background-color:#1E81D7">
                <div class="sidebar-wrapper">
                    <?php
                    include 'includes/menu.php';
                    ?>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg ">
                    <?php
                    include 'includes/navbar.php';
                    ?>
                </nav>
                <!-- End Navbar -->
                <div class="content">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style=" margin-top:2px;">
                                <div class="card cad_card col-12">
                                    <div class="card-header col-3">
                                        <label style="font-size: 12px">Anexo</label>
                                        <input type="hidden" id="id_cod_ocorrencia_view" value="<?php echo $cod ?>"/>
                                        <input type="hidden" id="id_cod_page_ocorrencia_view" value="<?php echo $cod_page ?>"/>
                                        <button class="form-control" id="id_btn_voltar" style="font-size: 12px; margin-bottom: 2px; background: #05AE0E; color: #ffffff; float: left" onclick="redirect()">Voltar</button>
                                        <label style="font-size: 10px; color: #000" id="id_dados_funcionario"></label>
                                    </div>

                                    <div class="row col-11"" style="margin-left: 2px;" id="res_view_anexo">
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                    <?php
                    include 'includes/footer.php';
                    ?>
                </div>
                </body>
                <div>
                    <!--   Core JS Files   -->
                    <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
                    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
                    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
                    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
                    <script src="assets/js/plugins/bootstrap-switch.js"></script>
                    <!--  Google Maps Plugin    -->
                    <!--
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
                    -->
                    <!--  Chartist Plugin  -->
                    <script src="assets/js/plugins/chartist.min.js"></script>
                    <!--  Notifications Plugin    -->
                    <script src="assets/js/plugins/bootstrap-notify.js"></script>
                    <!--  jVector Map  -->
                    <script src="assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
                    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
                    <script src="assets/js/plugins/moment.min.js"></script>
                    <!--  DatetimePicker   -->
                    <script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>
                    <!--  Sweet Alert  -->
                    <script src="assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
                    <!--  Tags Input  -->
                    <script src="assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
                    <!--  Sliders  -->
                    <script src="assets/js/plugins/nouislider.js" type="text/javascript"></script>
                    <!--  Bootstrap Select  -->
                    <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
                    <!--  jQueryValidate  -->
                    <script src="assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
                    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
                    <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
                    <!--  Bootstrap Table Plugin -->
                    <script src="assets/js/plugins/bootstrap-table.js"></script>
                    <!--  DataTable Plugin -->
                    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
                    <!--  Full Calendar   -->
                    <script src="assets/js/plugins/fullcalendar.min.js"></script>
                    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                    <script src="assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
                    <!-- Light Dashboard DEMO methods, don't include it in your project! -->
                    <script src="assets/js/demo.js"></script>
                </div>

                <script type="text/javascript">

                                            function redirect() {
                                                window.history.back();
                                            }

                                            var cod_page = '';
                                            if (cod_page.length > 0) {
                                                
                                            }
                </script>








                </html>