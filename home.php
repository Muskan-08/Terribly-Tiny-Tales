
<?php

session_start();

$_SESSION['n'] = $regValue;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/css/bootstrap-social.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Terribly Tiny Tales' Magic</title>
</head>

<body>
    <img src="img/bg.jpg" class="bg" alt="">
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto"> 
                <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-spinner fa-lg"></span>Referesh</a></li>
                <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-power-off fa-lg"></span>Exit</a></li>
                  </ul>
            </div>
             </div>
    </nav>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div></div>
                            <div>
                                <img src="img/m2.gif" style="{padding-left: : 50px;}">
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h1 style="text-shadow: 4px 4px 4px red;">Welcome!</h1>
                            </div>
                            <div>
                                <p>Down arrow: <i class="arrow down"></i></p>
                            </div>    
                            
                        </div>
                        <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>

                        <div class="carousel-item">
                            <div class="carousel-caption  d-md-block">    
                             <h2>Enter your magical number here</h2>
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <form method="get" action="/count.php">
                                <input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>
                                <button class="button button1">Submit</button>
                                </form>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0"></li>
                        <li data-target="#mycarousel" data-slide-to="1" class="active"></li>
                        </ol>
                        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                            <button class="btn btn-sm" id="carouselButton">
                                <span id="carousel-button-icon" class="fa fa-pause"></span>
                            </button>
                </div>
            </div>
        </div>    
    </div>
</body>
 <br>
 <br>
 <br>
 <br>
 <br>


    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
		             
		           </address>
                </div>
                <div  class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook"href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter"href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google"href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon"href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020</p>
                </div>
           </div>
        </div>
    </footer>
    
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#mycarousel').carousel( { interval: 2000 } );
             $("#carouselButton").click(function(){
                if ($("#carouselButton").children("span").hasClass('fa-pause')) {
                    $("#mycarousel").carousel('pause');
                    $("#carouselButton").children("span").removeClass('fa-pause');
                    $("#carouselButton").children("span").addClass('fa-play');
                }
                else if ($("#carouselButton").children("span").hasClass('fa-play')){
                    $("#mycarousel").carousel('cycle');
                    $("#carouselButton").children("span").removeClass('fa-play');
                    $("#carouselButton").children("span").addClass('fa-pause');                    
                }
            });
        });
    </script>
</html> 