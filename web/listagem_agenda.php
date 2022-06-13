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
            $page = 'listagem_agenda'; // HABILITAR MENU NA TELA ATUAL
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">

                    <div class="painel_listagem_email">
                        <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 2vh;">
                            <label class="title_cartoes_pendentes text-title-table class_title">AGENDA</label>
                        </div>
                        <div class="col-md-11" style="margin:0 auto;">
                            <div class="col-md-12 text-left" style=" background-color:#0069D9;
                                 color:white; height:40px; border-top-right-radius: 8px; border-top-left-radius: 8px">
                                <label class="title_cartoes_pendentes text-consulta-table">LISTAR AGENDA: </label>
                                <input type="text" name="cpf_cadastro" class="text-input-table class_tr" id="doc" placeholder="" onkeyup="loadingData()">

                            </div>
                            <table class="table table-striped custom_table" id="info">

                            </table>
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
                                    $("#menu-toggle").click(function (e) {
                                        e.preventDefault();
                                        $("#wrapper").toggleClass("toggled");
                                    });
        </script>
        <script type="text/javascript">
            //var interval = null;
            //var vezes = 0;

            window.evento = {
                'click .btn_view': function (obj, element, row) {
                    console.log(row.DETALHES);
                    $('#modal_info').modal('show');
                    change_modal(row.DETALHES);
                },
                'click .class_nome': function (obj, element, row) {
                    console.log(row);
                }

            }


            tabelainfo(loadingData());
            function tabelainfo(dado) {
                var tabela = $('#info')

                console.log(dado);

                tabela.bootstrapTable({
                    pagination: true,
                    formatRecordsPerPage: function (pageNumber) {
                        return pageNumber
                    },
                    formatAllRows: function () {
                        return 'Tudo'
                    },
                    formatSearch: function () {
                        return 'Busca'
                    },
                    formatClearSearch: function () {
                        return 'Limpar Busca'
                    },
                    formatLoadingMessage: function () {
                        return 'Carregando, aguarde um instante..'
                    },
                    formatNoMatches: function () {
                        return '<lottie-player src="lottie_files/empty.json" mode="bounce" background="transparent"  speed="1"  style=" margin:0 auto; width: 20vw; height: 20vh;"    autoplay></lottie-player> NÃO ENCONTRAMOS NENHUM CARTÃO APROVADO OU REPROVADO RECENTEMENTE '
                    },
                    formatShowingRows: function (pageFrom, pageTo, totalRows) {
                        return 'Mostrando ' + pageFrom + ' a ' + pageTo + ' de ' + totalRows + ' linhas'
                    },
                    paginationParts: ['pageInfo', 'pageSize', 'pageList'],
                    pageList: [10, 25, 50, 100, "all"],
                    pageSize: 7, //Limita o numero de linhas por visualizacao
                    search: false,
                    classes: 'table',
                    columns: [{
                            field: 'NOME_FUNC',
                            title: '<i class="fad fa-user"></i> FUNCIONARIO',
                            sortable: true,
                            search: true

                        },
                        {
                            field: 'ENDER_EMAIL',
                            title: '<i class="fad fa-user"></i> EMAIL',
                            sortable: true
                        },
                        {
                            field: 'NUM_TELEFONE',
                            title: '<i class="fad fa-user"></i> TELEFONE',
                            sortable: true
                        },
                        {
                            field: 'D_SETOR',
                            title: '<i class="fad fa-user"></i> SETOR',
                            sortable: true
                        }


                    ],
                    data: dado
                });

                $("tr").addClass("bar_top_sec");
                //$("#info").removeClass("table-bordered")
            }


            function loadingData() {
                var dado = [];
                $.ajax({
                    url: "../api.php",
                    method: "post",
                    async: false,
                    data: {
                        request: "listar_agenda",
                        nome: $("#doc").val()
                    },
                    success: function (data) {
                        console.log(data)
                        $.each(JSON.parse(data), function (key, val) {
                            if (val.RESULT == "TRUE") {
                                dado.push({
                                    NOME_FUNC: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.NOME_FUNC,
                                    ENDER_EMAIL: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.ENDER_EMAIL,
                                    NUM_TELEFONE: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.NUM_TELEFONE,
                                    D_SETOR: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.D_SETOR

                                });
                            } else {
                                dado = [];
                            }
                        });
                    },
                    error: function () {
                        console.log(error);
                    }
                });
                return dado;
            }

            $("tr").addClass("bar_top")

            $('#doc').keyup(function () {
                var tabela = $('#info')
                tabela.bootstrapTable('refreshOptions', {
                    data: loadingData()
                })
                //$("tr").addClass("bar_top")
            });


        </script>
    </body>
</html>
