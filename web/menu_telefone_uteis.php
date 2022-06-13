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
            $page = 'menu_telefone_uteis'; // HABILITAR MENU NA TELA ATUAL
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
                            <label class="title_cartoes_pendentes text-title-table class_title">TELEFONES</label>
                        </div>
                        <div class="col-md-11" style="margin:0 auto;">
                            <div class="col-md-12 text-left" style=" background-color:#0069D9;
                                 color:white; height:40px; border-top-right-radius: 8px; border-top-left-radius: 8px">
                                <label class="title_cartoes_pendentes text-consulta-table">LISTAR TELEFONES: </label>
                                <input type="text" name="telefone_name" class="text-input-table class_border_input" id="id_telefone_cadastro" placeholder="pesquisar" onkeyup="loadingData()">
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
                            field: 'TEL',
                            title: '<i class="fad fa-phone-office"></i> TELEFONE',
                            sortable: true,
                            search: true

                        },
                        {
                            field: 'GAR',
                            title: '<i class="fad fa-garage"></i> GARAGEM',
                            sortable: true,
                            search: true
                        },
                        {
                            field: 'TIPO_TELEFONE',
                            title: '<i class="fad fa-bars"></i> TIPO TELEFONE',
                            sortable: true,
                            search: true
                        },
                        {
                            field: 'OPERADORA',
                            title: '<i class="fas fa-list-alt"></i> OPERADORA',
                            sortable: true,
                            search: true
                        },
                        {
                            field: 'SETOR',
                            title: '<i class="fad fa-list"></i> SETOR',
                            sortable: true,
                            search: true
                        }


                    ],
                    data: dado
                });

                //$("thead").addClass("bar_top_sec");
                $("tr").addClass("bar_top_sec");
                //$("#info").removeClass("table-bordered")
            }


            function loadingData() {
                var dado = [];
                var num_tel = document.getElementById('id_telefone_cadastro').value;
                $.ajax({
                    url: "../api.php",
                    method: "post",
                    async: false,
                    data: {
                        request: "listar_telefone",
                        num_tel: num_tel
                    },
                    success: function (data) {
                        console.log(data)
                        var setor = '';
                        $.each(JSON.parse(data), function (key, val) {
                            if (val.RESULT == "TRUE") {
                                if (val.D_SETOR == null) {
                                    setor = ''
                                } else {
                                    setor = val.D_SETOR;
                                }
                                dado.push({
                                    TEL: '<label class="class_nome"><i class="fad fa-phone-office"></i></label> ' + val.TELEFONE,
                                    GAR: '<label class="class_nome"><i class="fad fa-garage"></i></label> ' + val.GARAGEM,
                                    TIPO_TELEFONE: '<i class="fad fa-bars"></i></label> ' + val.TIPO_TELEFONE,
                                    OPERADORA: '<i class="fas fa-list-alt"></i> ' + val.OPERADORA,
                                    SETOR: '<label class="class_nome"><i class="fad fa-list"></i></label>' + setor

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

            // PARA ATIVAR EVENTOS do tipo keyup

            $('#id_telefone_cadastro').keyup(function () {
                var tabela = $('#info')
                tabela.bootstrapTable('refreshOptions', {
                    data: loadingData()
                })
                //$("tr").addClass("bar_top")
            });



        </script>
    </body>
</html>
