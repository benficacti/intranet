<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="col-4">
        <button class="btn btn-primary" id="menu-toggle"><i class="fad fa-align-justify"></i></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="col-4 text-center">
       

    </div> 


    <div class="col-4 collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo "JONATHAN";//$_SESSION['login_name']; ?> <i class="fad fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout">Deslogar</a>
                </div>
            </li>
        </ul>
    </div>
</nav>