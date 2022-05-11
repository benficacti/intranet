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
            $page = 'email'; // HABILITAR MENU NA TELA ATUAL
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
                            <label class="title_cartoes_pendentes text-title-table">LISTAGEM DE EMAIL</label>
                        </div>
                        <div class="col-md-11" style="margin:0 auto;">
                            <div class="col-md-12 text-left" style=" background-color:#3b3d84;
                                 color:white; height:40px; border-top-right-radius: 8px; border-top-left-radius: 8px">
                                <label class="title_cartoes_pendentes text-consulta-table">LISTAR EMAIL: </label>
                                <input type="text" name="cpf_cadastro" class="text-input-table" id="doc" placeholder="descricao@email.com.br" onkeyup="loadingData()">

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
                        field: 'EMAIL',
                        title: '<i class="fad fa-user"></i> EMAIL',
                        sortable: true,
                        search: true

                    },
                    {
                        field: 'ID',
                        title: 'ID_EMAIL',
                        sortable: true,
                        visible: false
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
                    request: "listar_email",
                    nome: $("#doc").val()
                },
                success: function (data) {
                    console.log(data)
                    $.each(JSON.parse(data), function (key, val) {
                        if (val.RESULT == "TRUE") {
                            dado.push({
                                EMAIL: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.ENDERECO,
                                ID: val.ID

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
