
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
            case 'vagas_candidatos':
                echo '<a href="vagas_recursos_humanos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>PUBLICAR</a>';
                echo '<a href="cadastrar_vagas" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>CADASTRAR</a>';
                break;
            case 'vagas_recursos_humanos':
                echo '<a href="vagas_candidatos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>VISUALIZAR</a>';
                echo '<a href="cadastrar_vagas" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>CADASTRAR</a>';
                break;
            case 'cadastrar_vaga':
                echo '<a href="vagas_candidatos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>VISUALIZAR</a>';
                echo '<a href="vagas_recursos_humanos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>PUBLICAR</a>';
                break;
            case 'novo_telefone':
                echo '<a href="menu_telefone_uteis" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>LISTAGEM</a>';
                break;
            case 'painel':
                echo '';
                break;
            case 'agenda_contato':
                echo '<a href="listagem_agenda" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>LISTAGEM</a>';
                break;
            case 'rh' :
                echo '<a href="RH" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth"><i class="fad fa-id-card icons-side"></i>RH</a>';
                break;
            case 'apoioAdm' :
                echo '<a href="apoioAdm" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth_adm"><i class="fad fa-id-card icons-side"></i>Apoio ADM.</a>';
                break;
            case 'apoioAdmTel' :
                echo '<a href="apoioAdm" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth_adm"><i class="fad fa-id-card icons-side"></i>Apoio ADM.</a>';
                break;
            case 'apoioAdmEmail' :
                echo '<a href="apoioAdm" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth_adm"><i class="fad fa-id-card icons-side"></i>Apoio ADM.</a>';
                break;
            case 'marketing' :
                echo '<a href="######" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" data-toggle="modal" data-target="#modal_select_auth_marketing"><i class="fad fa-id-card icons-side"></i>Marketing</a>';
                echo '<a href="solicitacoes" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Solicitacoes</a>';
                break;
            case 'solicitacoes' :
                echo '<a href="marketing" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item" ><i class="fad fa-id-card icons-side"></i>Midias</a>';
                break;
            case 'marketing_gerencial' :
                echo '<a href="publicacao?page=m" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Divulgação</a>';
                echo '<a href="######" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Documentos</a>';
                echo '<a href="marketing_gerencial_pedidos" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Pedidos</a>';
                break;
            case 'publicacao_marketing' :
                echo '<a href="marketing" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Midias</a>';
                echo '<a href="######" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Documentos</a>';
                echo '<a href="######" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>Pedidos</a>';
                break;
            default :
        }
        ?>

    </div>
</div>