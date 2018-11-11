<?php 
  session_start();
  if(isset($_SESSION['status']))
  {
    session_destroy();
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="../dist/img/PolmanIcon.jpg"/>
    <title>Admin Lab</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="../assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="../assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="../assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="../assets/lib/animate.css/animate.css">
    
    <link rel="stylesheet" href="../bower_components/bootstrap/js/carousel.js">

</head>

<body class="error">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <div class="logo">
                <h1>Admin Lab</h1>
            </div>
            <p class="lead text-muted">Pencatatan Admin Lab</p>
            <div class="clearfix"></div>
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="btn-group btn-group-justified">
                    <a href="login.php" class="btn btn-info">Start Here!</a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/jquery.min.js"></script>
</body>

</html>
