

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Interior Designer</title>
        <link rel="stylesheet" href="scripts/bootstrap-3.3.7/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="scripts/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css" >
        <link rel="stylesheet" href="css/login-register.css"> 
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css">
        <script src="scripts/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <!--[if IE]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <?php
        session_start();
        if(!isset($_SESSION["sess_user"])){
            //header("Location: login.php");"id=\"jhbsa\""
            $content='
            <li>
                <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
            </li>
            <li>
                <a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
            </li>';
        }

        else{
            $content='
            <li>
                <a href="index.php" style="color:lightgrey;">Hello '.$_SESSION['sess_user'].'</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            ';    }
        ?>


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Designer</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color:#333;">
                            <li><a href="#" id="aaa">Modern</a></li>
                            <li><a href="#">Contemporary</a></li>
                            <li><a href="#">Transitional</a></li>
                            <li><a href="#">Minimalist</a></li>
                            <li><a href="#">Bohemian</a></li>
                            <li><a href="#">French Country</a></li>
                            <li><a href="#">Traditional</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color:#333;">
                            <li><a href="#">Bathrooms</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Kitchen</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Bedrooms</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Available Desginer <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background-color:#333;">
                            <li><a href="#">Students</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Professionals</a></li>
                        </ul>
                    </li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#about">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav" style="float: right">
                    <?php echo $content; ?>
                </ul>
            </div><!--.nav-collapse -->
        </nav>
        <!--  Login and SignUp Modal  -->
        <div class="modal fade login" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                            <div class="content">
                                <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                    <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="login.php" accept-charset="UTF-8">
                                        <input class="form-control" type="text" placeholder="User Id" name="user">
                                        <input class="form-control" type="password" placeholder="Password" name="pass">
                                        <input class="btn-login" type="submit" value="Login" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                                <div class="form">
                                    <form method="post" html="{:multipart=>true}" data-remote="true" action="registration.php" accept-charset="UTF-8">
                                        <input class="form-control" type="text" placeholder="User Id" name="Id">
                                        <input class="form-control" type="text" placeholder="Full Name" name="Name">
                                        <input class="form-control" type="text" placeholder="Age" name="Age">
                                        <input class="form-control" type="text" placeholder="Email" name="Email">
                                        <input class="form-control" type="password" placeholder="Password" name="Pass">
                                        <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                        <input class="btn-register" type="submit" value="Create account" name="commit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                                <a href="javascript: showRegisterForm();">create an account</a>
                                ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">  

            <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="img/Carousal/4.jpeg" data-natural-width="1400" data-natural-height="900"></div>
            <div class="row text-center">
                <a href="#">
                    <div class="col-md-4 col-md-offset-1 wow animated fadeInLeft" id="box11-options" >
                        <img src="img/modern.jpg" width="400" height="210" style="padding-left:0px" alt="...">
                        <h4>Modern Design</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="col-md-4 col-md-offset-2 wow animated fadeInRight" id="box12-options">
                        <img src="img/contemporary.jpg" width="400" height="210" style="padding-left:0px" alt="...">
                        <h4>Contemporary Designs</h4>
                    </div>
                </a>
            </div>

            <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="img/Carousal/3.jpeg" data-natural-width="1400" data-natural-height="900"></div>
            <div class="row text-center">
                <a href="#">
                    <div class="col-md-4 col-md-offset-1 wow animated fadeInLeft"  id="box21-options">
                        <img src="img/transitional.jpg" width="400" height="210" style="padding-left:0px;" alt="...">
                        <h4>Transitional Design</h4>
                    </div> 
                </a>
                <a href="#">
                    <div class="col-md-4 col-md-offset-2 wow animated fadeInRight" id="box22-options">
                        <img src="img/bohemian.jpg" width="400" height="210" style="padding-left:0px;" alt="...">
                        <h4>Boehmian Design</h4>
                    </div> 
                </a>
            </div>

            <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="img/Carousal/2.jpeg" data-natural-width="1400" data-natural-height="900"></div>
            <div class="row text-center" >
                <a href="#">
                    <div class="col-md-4 col-md-offset-1 wow animated fadeInLeft"  id="box31-options">
                        <img src="img/french_country.jpg" width="400" height="210" style="padding-left:0px;" alt="...">
                        <h4>French Country Design</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="col-md-4 col-md-offset-2 wow animated fadeInRight" id="box32-options">
                        <img src="img/traditional.jpg" width="400" height="210" style="padding-left:0px;" alt="...">
                        <h4>Traditional Design</h4>
                    </div>
                </a>
            </div>
            <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="img/Carousal/1.jpeg" data-natural-width="1400" data-natural-height="900"></div>

            <div class="row text-center">
                <a href="#">
                    <div class="col-md-4 col-md-offset-1 wow animated fadeInLeft"  id="box41-options">
                        <img src="img/student_icon.ico" width="250" height="210" style="padding-left:0px;" alt="...">
                        <h4>Hire Students</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="col-md-4 col-md-offset-2 wow animated fadeInRight" id="box42-options">
                        <img src="img/professional_icon.png" width="250" height="210" style="padding-left:0px;" alt="...">
                        <h4>Hire Professionals</h4>
                    </div>
                </a>
            </div>
        </div>
        <script src="scripts/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>
        <script src="scripts/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <script src="scripts/parallax.js-1.4.2/parallax.min.js"></script>
        <script src="scripts/jquery.viewportchecker.js"></script>
        <script src="scripts/login-register.js"></script>

        <!--
<script>
var btn = document.getElementById('aaa');
var ip = document.querySelector('.bbb');
var img = document.querySelector('.imag');

btn.onclick = function(){
ip.textContent = "Hi";
img.setAttribute('src','src/(2).jpg');

}

jQuery(document).ready(function() {
jQuery('.box1').addClass("hidden").viewportChecker({
classToAdd: 'animated fadeInLeft', // Class to add to the elements when they are visible
offset: 100,
repeat:true
});
jQuery('.box2').addClass("hidden").viewportChecker({
//classToRemove: 'hidden',
classToAdd: 'animated fadeInRight', // Class to add to the elements when they are visible
offset: 100,
repeat:true
}); 
}); 
</script>
-->
        <script>
            $(function(){
                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    $('#ios-notice').removeClass('hidden');
                    $('.parallax-container').height( $(window).height() * 0.5 | 0 );
                } else {
                    $(window).resize(function(){
                        var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
                        $('.parallax-container').height(parallaxHeight);
                    }).trigger('resize');
                }
            });
        </script>

    </body>
</html>