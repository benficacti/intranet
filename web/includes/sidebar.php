
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
                echo '<a href="cadastro_telefone" id="side_solicitacoes" class="list-group-item list-group-item-action bg back_side_item"><i class="fad fa-id-card icons-side"></i>CADASTRO</a>';
                break;
        }
        ?>

    </div>
</div>