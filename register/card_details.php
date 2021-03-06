<?php
session_start();
if(empty($_SESSION['name'])){
    header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CARD DETAILS </title>

    <link href='css/bootstrap.css' rel='stylesheet' />
    
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    
<!--     <link href='css/ct-navbar.css' rel='stylesheet' /> -->
    <link href='css/rotating-card.css' rel='stylesheet' />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <script src="../google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <style>
        body{
            margin-top: 100px;
        }
        .navbar-default .navbar-nav > li > a{
            padding: 15px 15px;
            margin: 5px 0;
        }
       
        .navbar-default{
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.95);
            border-color: transparent;
            box-shadow: 0 0px 13px rgba(0,0,0,.2);
        }
        .btn-info,
        .btn-info:hover,
        .btn-info:focus{
            color: #FFF !important;
            background-color: #00bbff !important;
            border-color: #00bbff !important;
        }
        
        .btn-info{
            opacity: .8;
            transition: all 0.1s;
            -webkit-transition: all 0.1s;
        }
        .btn-info:hover,
        .btn-info:focus{
            opacity: 1;
        }
    </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo" href="http://www.tasuedforum.com/">
                    <div>
                    <img src="images/eclinic.png"  width="300px">
                    </div>
              </a>
            </div>
          </div><!-- /.container-fluid -->
        </nav>

        <div style="color:white; background-color:rgb(10, 166, 153); padding-right:0px;padding-left:12%; width:112.3%; margin-right:0px; margin-left:-70px; margin-top:-27px;" class="container">
        <h1 style="color:white;" class="title">
            This is your card details,you only see this page once.
            <br>
            <small style="color:white;">Ensure you print this page and bring it along when visiting the school clinic to complete your registration.</small>
        </h1>
        </div>
    <div class="row">
        
        <div class="col-sm-10 col-sm-offset-1">
         <div class="col-md-4 col-sm-6">
             <!-- <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="images/rotating_card_thumb2.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="images/rotating_card_profile3.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">John Marvel</h3>
                                <p class="profession">CEO</p>
                                <h5><i class="fa fa-map-marker fa-fw text-muted"></i> Paris, France</h5>
                                <h5><i class="fa fa-building-o fa-fw text-muted"></i> Creative Tim Inc. </h5>
                                <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> john@creative-tim.com</h5>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Experience</h4>
                                <p>In the project since 2011</p>
                                <h4 class="text-center">Areas of Expertise</h4>
                                <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://creative-tim.com/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://creative-tim.com/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                <!-- </div> end card
            </div> -->  <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div style="background-color:rgb(10, 166, 153);" class="cover">
                            <img src="images/tas.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="passport/<?php echo $_SESSION['pics']; ?>"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name"><?php echo $_SESSION['name']; ?></h3>
                                <p class="profession"><?php echo $_SESSION['card_number'];?></p>
                                <h5><i class="fa fa-map-marker fa-fw text-muted"></i> <?php echo $_SESSION['phoneno'];?></h5>
                                <h5><i class="fa fa-building-o fa-fw text-muted"></i><?php echo $_SESSION['session'];?></h5>
                                <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> <?php echo $_SESSION['dob'];?></h5>
                            </div>
                            <div class="footer">
                                <button class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Manual Flip
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"TASUED MEDICAL CENTRE, IJAGUN CAMPUS OGUN STATE!"</h5>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">CLINIC HOURS</h4>
                                <center><p>8:00am - 3:30pm</p></center>
                                <h4 class="text-center">Emergency</h4>
                                <center><p>24 hours</p></center>
                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                            <div class="social-links text-center">
                                <a href="http://tasuedforum.com" class="facebook" target="_blank">TECHHUB</a>
                            </div>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->
<!--         <div class="col-sm-1"></div> -->
        <div class="col-md-4 col-sm-6">
            <!-- <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="images/rotating_card_thumb3.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="images/rotating_card_profile.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Inna Corman</h3>
                                <p class="profession">Product Manager</p>
                                <h5><i class="fa fa-map-marker fa-fw text-muted"></i> Paris, France</h5>
                                <h5><i class="fa fa-building-o fa-fw text-muted"></i> Creative Tim Inc. </h5>
                                <h5><i class="fa fa-envelope-o fa-fw text-muted"></i> inna@creative-tim.com</h5>
                            </div>
                            <div class="footer">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end front panel
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div> 
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Experience</h4>
                                <p>Inna was working with our team since 2012.</p>
                                <h4 class="text-center">Areas of Expertise</h4>
                                <p>Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="http://creative-tim.com/" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="http://creative-tim.com/" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="http://creative-tim.com/" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> -->  <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col-sm-3 -->
        </div> <!-- end col-sm-10 --> 
    </div> <!-- end row -->
    <!-- <div class="space-200"></div>  -->   
    <footer style="color:white;background-color:rgb(10, 166, 153); min-height:56.3px"><br><center>COPYRIGHT 2015 TECHHUB(TASUED STUDENT PROGRAMMERS)</center></footer>
</div>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    
<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();
        
        $('a.scroll-down').click(function(e){
            e.preventDefault();
            scroll_target = $(this).data('href');
             $('html, body').animate({
                 scrollTop: $(scroll_target).offset().top - 60
             }, 1000);
        });

    });
    
    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
    
    
</script>
</body>
</html>