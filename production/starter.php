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
    <link rel="shortcut icon" href="../dist/img/1.jpg"/>
    <title>Bluku-Book</title>
    
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

    <!--link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="../bower_components/bootstrap/js/carousel.js">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="error">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <div class="logo">
                <h1>Bluku-Book</h1>
            </div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"
            class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="../dist/img/photo1.png" alt="First slide">
            <div class="carousel-caption">
                <h1>Photo 1</h1>
            </div>
            </div>
            <div class="item">
            <img src="../dist/img/photo2.png" alt="Second slide">
            </div>
            <div class="item">
            <img src="../dist/img/photo3.png" alt="Third slide">
            </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel"
            data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel"
            data-slide="next">&rsaquo;</a>
            <!-- Controls buttons -->
            <div style="text-align:center;">
            <input type="button" class="btn start-slide" value="Start">
            <input type="button" class="btn pause-slide" value="Pause">
            <input type="button" class="btn prev-slide" value="Previous Slide">
            <input type="button" class="btn next-slide" value="Next Slide">
            <input type="button" class="btn slide-one" value="Slide 1">
            <input type="button" class="btn slide-two" value="Slide 2">
            <input type="button" class="btn slide-three" value="Slide 3">
            </div>
            </div>  
            TUTORIALS POINT
            Simply Easy Learning
            <p class="lead text-muted">You borrow book, it's okay :)</p>
            <div class="clearfix"></div>
            <!--div class="col-lg-6 col-lg-offset-3">
                <form action="index.html">
                    <div class="input-group">
                        <input type="text" placeholder="search ..." class="form-control">
                        <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="sr-only">
                &nbsp;

            </div-->
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="btn-group btn-group-justified">
                    <a href="login.php" class="btn btn-info">Start Here!</a>
                    <!--a href="index.html" class="btn btn-warning">Return Website</a-->
                </div>
            </div>
        </div>
        <!-- /.col-lg-8 col-offset-2 -->
    </div>
    <script>
    $(function(){
        // Initializes the carousel
        $(".start-slide").click(function(){
            $("#myCarousel").carousel('cycle');
        });
        // Stops the carousel
        $(".pause-slide").click(function(){
            $("#myCarousel").carousel('pause');
        });
        // Cycles to the previous item
        $(".prev-slide").click(function(){
            $("#myCarousel").carousel('prev');
        });
        // Cycles to the next item
        $(".next-slide").click(function(){
            $("#myCarousel").carousel('next');
        });
        // Cycles the carousel to a particular frame 
        $(".slide-one").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".slide-two").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".slide-three").click(function(){
            $("#myCarousel").carousel(2);
        });
    });
    </script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/jquery.min.js"></script>
</body>

</html>
