
<div class="bg back_side" id="sidebar-wrapper">
    <div class="sidebar-heading">INTRANET</div>
    <div class="list-group list-group-flush">
        <!--<a href="index" id="side_index" class="list-group-item list-group-item-action bg back_side_item "><i class="fad fa-home icons-side"></i>PAINEL</a>-->
        <a href="painel" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>MENU</a>
        <?php
        switch ($page) {
            case 'email':
                echo '<a href="cadastrar_email" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>NOVO EMAIL</a>';
                break;
            case 'cadastrar_email':
                echo '<a href="menu_email" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>LISTAGEM EMAIL</a>';
                break;
            case 'menu_telefone_uteis':
                echo '<a href="cadastro_telefone" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>NOVO TELEFONE</a>';
                break;
            case 'listagem_agenda':
                echo '<a href="agenda_contato" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>NOVO AGENDA</a>';
                break;
            case 'vagas':
                echo '<a href="vagas_recursos_humanos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>PUBLICAR</a>';
                echo '<a href="vagas_candidatos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>VISUALIZAR</a>';
                break;
            case 'publicar_vaga':
                echo '<a href="vagas_recursos_humanos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>PUBLICAR</a>';
                break;
            case 'visualizar_vaga':
                echo '<a href="vagas_candidatos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>VISUALIZAR</a>';
                break;
            case 'novo_telefone':
                echo '<a href="menu_telefone_uteis" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>LISTAGEM</a>';
                break;
            case 'painel':
                echo '';
                break;
            default :
                echo '<a href="RH" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth"><i class="fad fa-id-card icons-side"></i>RH</a>';
        }
        ?>

    </div>
</div>