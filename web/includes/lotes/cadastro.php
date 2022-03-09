<div class="col-md-10" style=' margin: 0 auto' data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
    <div class='row'>
        <div class='col-md-12' id="row_cadastro">
            <table class="table table-striped custom_table"  >
                <caption class="custom_caption" style="border: inherit; background-color: rgb(239,239,239,0.4);">
                    <span class="align-left" style="margin-left: 25px"> <a href="#" class="input_link_table" type="button" onclick="" data-toggle="modal" class="btn_view" data-backdrop="static"  data-target="#modal_info">CLIQUE PARA VER TODOS OS ARQUIVOS QUE SERÃO VINCULADOS AO LOTE</a></span>

                </caption>    
                <tr class="bar_top">
                    <th colspan="3" > CADASTRAR NOVO LOTE</th>
                </tr>

                <tr class="row_custom_table">
                    <th > 

                        <div class="form-group">
                            <label for="nome_lote" class='title_form left'><i class="fad fa-folders"></i>  NOME </label>
                            <input type="text" class="form-control " id="nome_lote" placeholder="NOME LOTE" value="LOTE - " required readonly="">
                            <div class="invalid-feedback left" >
                                NOME LOTE OBRIGATÓRIO
                            </div>
                        </div>
                    </th>
                    <th > 
                        <div class="form-group">
                            <label for="data_lote" class='title_form left'><i class="fad fa-calendar-day"></i>  DATA DOS BORDOS</label>
                            <input type="date" class="form-control input_custom" id="data_lote" placeholder="DATA DOS BORDOS" max_length="10">
                            <div class="invalid-feedback left" >
                                <!--PREENCHA UMA DATA-->
                            </div>
                        </div>
                    </th>
                    <th > 
                        <div class="form-group">
                            <label for="select_garagem" class="title_form left"><i class="fad fa-building"></i>  SELECIONE A GARAGEM</label>
                            <select class="custom-select input_custom" required id="select_garagem">
                                <option value="0">Selecione a garagem</option>
                                <?php
                                foreach (json_decode($garagens) as $itens) {
                                    echo '   <option value="' . $itens->KEY . '">' . $itens->GARAGEM . '</option>';
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback left" >
                                <!--SELECIONE UMA GARAGEM-->
                            </div>
                        </div>
                    </th>
                </tr>
                <tr class="row_custom_table">

                    <th colspan="3"> 
                        <div id="btn_info_cadastro" >
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped custom_table">
                                        <tr class="row_custom_table_info" id="row1" style="display: none;">
                                            <td><div id="loading_1" class="loading_info_cadastro"><lottie-player src='lottie_files/loading_circle.json' mode='bounce' background='transparent'  speed='2'  style='width: 3vw; height: 3vh;' loop   autoplay ></lottie-player></div></td>
                                            <td><div class="loading_info_cadastro_text">Cadastrando Lote</div></td>
                                        </tr>
                                        <tr class="row_custom_table_info"  id="row2"  style="display: none;">
                                           <td><div id="loading_2" class="loading_info_cadastro"><lottie-player src='lottie_files/loading_circle.json' mode='bounce' background='transparent'  speed='2'  style='width: 3vw; height: 3vh;' loop   autoplay ></lottie-player></div></td>
                                            <td><div class="loading_info_cadastro_text">Vinculando arquivos ao lote</div></td>
                                        </tr>
                                        <tr class="row_custom_table_info"  id="row3"  style="display: none;">
                                           <td><div id="loading_3" class="loading_info_cadastro"><lottie-player src='lottie_files/loading_circle.json' mode='bounce' background='transparent'  speed='2'  style='width: 3vw; height: 3vh;' loop   autoplay ></lottie-player></div></td>
                                            <td><div class="loading_info_cadastro_text">Atualizando Status</div></td>
                                        </tr>
                                        <tr class="row_custom_table_info">
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="cadastro_lote" class="btn btn-primary" style="width:auto;" >
                            CADASTRAR LOTE

                        </button>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-md-6" id="row_resume" style="margin:0 auto; display:block" >
           
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade " id="modal_info" role="dialog">
    <div class="modal-dialog modal-dialog-centered ">

        <!-- Modal content-->
        <div class="modal-content ">

            <div class='custom_bar_top text-center '>

                <label class='info_title_modal '>LISTA DE ARQUIVOS A VINCULAR O LOTE</label>
                <label class='icon_fechar'><a href="#" data-dismiss="modal" class="btn_fechar"><i class="fad fa-times "></i></a></label>


            </div>
            <div class='modal-body custom_body_modal'>
                <table id="classTable" class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>
                        <?php
                        $fileList = glob('C:\\scanner\\/*');
                        $cont = 1;
                        foreach ($fileList as $filename) {
                            //Simply print them out onto the screen.
                            $file = str_replace("C:\\scanner\\", "", $filename);
                            $name_file = $file;
                            //  $caminho = "C:\\xampp\\htdocs\\extract\\bordos\\" . $name_file;
                            $caminho = "C:\\scanner\\" . $name_file;

                            echo " <tr class='row_custom_table'>
                                        <td style='text-align:center'>#" . $cont . "</td>
                                        <td style='text-align:center'>" . $name_file . "</td>
                                    </tr>";
                            $cont++;
                        }
                        ?>
                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>
