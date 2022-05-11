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
            include 'includes/sidebar.php';
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <?php
                include 'includes/navbar.php'
                ?>

                <div class="container-fluid">











                    <div class="col-md-11 text-center" style="margin:0 auto; height:30px; margin-top: 5vh;">
                        <label class="title_cartoes_pendentes text-title-table">CARTÕES PENDENTES DE APROVAÇÃO</label>
                    </div>
                    <div class="col-md-11" style="margin:0 auto;">
                        <div class="col-md-12 text-left" style=" background-color:#3b3d84;
                             color:white; height:40px;">
                            <label class="title_cartoes_pendentes text-consulta-table">CONSULTAR CPF: </label>
                            <input type="text" name="cpf_cadastro" class="text-input-table" id="doc" placeholder="000.000.000-00">

                        </div>
                        <table class="table table-striped custom_table" id="info">


                        </table>
                    </div>




                    <!-- Modal -->
                    <div class="modal fade " id="modal_info" role="dialog">
                        <div class="modal-dialog modal-dialog-centered custom_modal">

                            <!-- Modal content-->
                            <div class="modal-content ">

                                <div class='custom_bar_top text-center '>

                                    <label class='info_title_modal '>INFORMAÇÃO CARTÃO SOLICITADO</label>
                                    <label class='icon_fechar'><a href="#" data-dismiss="modal" class="btn_fechar"><i class="fad fa-times "></i></a></label>


                                </div>
                                <div class=' custom_body_modal modal-body'>

                                    <div class='row bottom-margin'>
                                        <div class='col-md-4 '>
                                            <label class='sub_title_info'>NOME</label>
                                            <label id='nome_modal'>  </label>
                                        </div>
                                        <div class='col-md-4 '>
                                            <label class='sub_title_info'>CPF</label>
                                            <label id='cpf_modal'>  </label>
                                        </div>
                                        <div class='col-md-4'>
                                            <label class='sub_title_info'>DATA DE NASCIMENTO</label>
                                            <label id='nascimento_modal' >  </label>
                                        </div>
                                        <div class='col-md-4' id='responsavel_nome'>
                                            <label class='sub_title_info'>NOME RESPONSAVEL</label>
                                            <label id='nome_resp_modal'>  </label>
                                        </div>
                                        <div class='col-md-4 ' id='responsavel_cpf'>
                                            <label class='sub_title_info'>CPF RESPONSAVEL</label>
                                            <label id='cpf_resp_modal'>  </label>
                                        </div>
                                    </div>
                                    <div class='row bottom-margin'>                                       
                                        <div class='col-md-4 '>
                                            <label class='sub_title_info'>CATEGORIA</label>
                                            <label id='categoria_modal'>  </label>
                                        </div>
                                        <div class='col-md-4'>
                                            <label class='sub_title_info'>STATUS</label>
                                            <label id='status_modal'class='text-pend'>  </label>
                                        </div>
                                        <div class='col-md-4 '>
                                            <label class='sub_title_info'>ESCOLA</label>
                                            <label id='escola_modal'>  </label>
                                        </div>
                                    </div>
                                    <div class='row bottom-margin'>
                                        <div class='col-md-12 '>
                                            <label class='sub_title_info'>ENDEREÇO</label>
                                            <label id='endereco_modal'>  </label>
                                        </div>
                                    </div>

                                    <div class='row bottom-margin' >                                       
                                        <div class='col-md-2 '  id="visualizar_documento">
                                            <label class='sub_title_info'>VISUALIZAR DOCUMENTOS</label>
                                            <label > <a href="#" onclick="visualizar()"class="btn_view"><span id="text_span_view"></a> </label>
                                            <input type="hidden" id="valid_view" value="0">
                                        </div>

                                        <div class='col-md-2'  id="visualizar_documento_perfil">
                                            <label class='sub_title_info'>DOCUMENTO PERFIL</label>
                                            <a href="#" id="url_foto_perfil" target="_blank"> </a> 
                                        </div>
                                        <div class='col-md-2'  id="visualizar_documento_frente">
                                            <label class='sub_title_info'>DOCUMENTO FRENTE</label>
                                            <a href="#" id="url_doc_frente" target="_blank"> <img class="slide_modal" id="doc_frente" >  </a>
                                        </div>
                                        <div class='col-md-2 ' id="visualizar_documento_verso">
                                            <label class='sub_title_info'>DOCUMENTO VERSO</label>
                                            <a href="#" id="url_doc_verso" target="_blank"> <img class="slide_modal" id="doc_verso" >      </a>   
                                        </div>
                                        <div class='col-md-2 ' id="visualizar_documento_endereco">
                                            <label class='sub_title_info'>COMPROVANTE DE ENDEREÇO</label>
                                            <a href="#" id="url_doc_endereco" target="_blank"> <img class="slide_modal" id="doc_endereco" >       </a>  
                                        </div>
                                        <div class='col-md-2 ' id="visualizar_documento_escola">
                                            <label class='sub_title_info'>DECLARAÇÃO ESCOLAR</label>
                                            <a href="#" id="url_doc_escola" target="_blank">  <img class="slide_modal" id="doc_escola" >     </a>  
                                        </div>
                                    </div>


                                    <div class='row bottom-margin'>
                                        <div class='col-md-2  text-center' >

                                        </div>
                                        <div class='col-md-4  text-center' >
                                            <button class="btn btn-danger center-btn"  data-dismiss="modal" data-toggle="modal"  data-backdrop="static"  data-target="#modal_refuse"><i class="fad fa-times "></i> REPROVAR CARTÃO</span> </button>
                                        </div>
                                        <div class='col-md-4  text-center' >
                                            <button class="btn btn-success center-btn" data-dismiss="modal" data-toggle="modal" data-backdrop="static"  data-target="#modal_confirme" ><span><i class="fad fa-check"></i> APROVAR CARTÃO</span> </button>
                                        </div>
                                        <div class='col-md-2  text-center' >

                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>


                </div>

                <!-- Modal -->
                <div class="modal fade " id="modal_confirme" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">

                        <!-- Modal content-->
                        <div class="modal-content ">

                            <div class='custom_bar_top text-center '>

                                <label class='info_title_modal '>CONFIRMAR PARA APROVAR CARTÃO</label>
                                <label class='icon_fechar'><a href="#" data-dismiss="modal" class="btn_fechar"><i class="fad fa-times "></i></a></label>


                            </div>
                            <div class=' custom_body_modal modal-body'>
                                <div class='row bottom-margin'>
                                    <div class='col-md-6  text-center' >
                                        <button class="btn btn-danger center-btn"data-dismiss="modal"  > FECHAR </span> </button>
                                    </div>
                                    <div class='col-md-6  text-center' >
                                        <button class="btn btn-success center-btn" id='confirmar'  data-dismiss="modal" data-toggle="modal" data-backdrop="static"  data-target="#modal_loading" ><span><i class="fad fa-check"></i> APROVAR CARTÃO</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade " id="modal_refuse" role="dialog">
                    <div class="modal-dialog modal-dialog-centered custom_modal">

                        <!-- Modal content-->
                        <div class="modal-content ">

                            <div class='custom_bar_top text-center '>

                                <label class='info_title_modal '>CONFIRMAR PARA REPORVAR CARTÃO</label>
                                <label class='icon_fechar'><a href="#" data-dismiss="modal" class="btn_fechar"><i class="fad fa-times "></i></a></label>


                            </div>
                            <div class=' custom_body_modal modal-body'>
                                <div class='row bottom-margin'>
                                    <div class='col-md-12 text-center '>
                                        <label class='sub_title_info'>MOTIVO</label>
                                        <select class='form-group' id="motivo_reprovacao">

                                        </select>
                                    </div>
                                </div>
                                <div class='row bottom-margin'>
                                    <div class='col-md-12 text-center' >
                                        <button class="btn btn-danger center-btn" id='recusar'  data-dismiss="modal" data-toggle="modal" data-backdrop="static"  data-target="#modal_loading" ><span><i class="fad fa-times "></i> REPROVAR CARTÃO</span> </button>
                                    </div>
                                </div>
                            </div>

                        </div>
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
        //busca_motivos();




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
                search: false,
                classes: 'table',
                columns: [{
                        field: 'NOME',
                        title: '<i class="fad fa-user"></i> NOME',
                        sortable: true,
                        events: evento

                    },
                    {
                        field: 'ID_NOME',
                        title: 'ID',
                        visible: false
                    }


                ],
                data: dado
            })

            $("tr").addClass("bar_top")
            //$("#info").removeClass("table-bordered")
        }


        function loadingData() {
            var dado = [];
            $.ajax({
                url: "../api.php",
                method: "post",
                async: false,
                data: {
                    request: "teste"
                },
                success: function (data) {
                    $.each(JSON.parse(data), function (key, val) {
                        if (val.RESULT == "TRUE") {
                            dado.push({
                                NOME: '<label class="class_nome"><i class="fad fa-user"></i></label>' + val.NOME,
                                ID_NOME: val.ID

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
                data: loadingData($("#doc").val())
            })
            $("tr").addClass("bar_top")




        });


    </script>
</body>
</html>
