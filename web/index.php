<?php
session_start();
if (!isset($_SESSION['login'])) {
   // header('Location: login');
} else {    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/css.css" type="text/css"/>
        <link rel="stylesheet" href="fontawesome/css/all.min.css" type="text/css"/>
        <meta charset="UTF-8">
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
           
                <div class="container-fluid">
                    
                    
                    
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <script src="js/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="js/popper.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="fontawesome/js/all.js" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Menu Toggle Script -->
        <script>
     
        </script>
    </body>
</html>
