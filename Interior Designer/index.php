<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Interior Designer</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        body{
            padding-top:50px;
        }
        .starter-template{
            padding:40px 15px;
            text-align:center;
        }
        .dropdown-menu>li>a:link{
            color:#fff; 
        }
        .dropdown-menu>li>a:visited{
            color:#fff;
        }
        .dropdown-menu>li>a:hover{
            color:#333;
        }
    </style>

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Designer</a>
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
                        <li><a href="#login" class="navbar-nav pull-right">Login</a></li>
                        <li><a href="#sign_up" class="navbar-nav pull-right">Sign Up</a></li>
                    </ul>
            </div><!--.nav-collapse -->
        </div>
    </nav>
        <div class="container" id="abc">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox" style="height:400px;">
                <div class="item active" id="carou">
                  <img  src="src/Images/Carousal/1.jpeg" alt="...">
                  <div class="carousel-caption">
                    ...
                  </div>
                </div>
                <div class="item" id="carou">
                  <img src="src/Images/Carousal/2.jpeg" alt="...">
                  <div class="carousel-caption">
                                        </div>
                </div>
                <div class="item" id="carou">
                  <img src="src/Images/Carousal/3.jpeg" alt="...">
                  <div class="carousel-caption">
                                        </div>
                </div>
                <div class="item" id="carou">
                  <img src="src/Images/Carousal/4.jpeg" alt="...">
                  <div class="carousel-caption">
                                        </div>
                </div>
                <div class="item" id="carou">
                  <img src="src/Images/Carousal/5.jpg" alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
                ...
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    

        <div class="row" style="width:1360px;" >
            <div class="col-md-4" id="box11-options" >
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px">
                <h4>.col-md-4</h4>
            </div>
            <div class="col-md-4 col-md-offset-4" id="box12-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px">
                <h4>.col-md-4 .col-md-offset-4</h4>
            </div>
        </div>
    
        <div class="row" style="width:1360px;">
            <div class="col-md-4"  id="box21-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4</h4>
            </div>
            <div class="col-md-4 col-md-offset-4" id="box22-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4 .col-md-offset-4</h4>
            </div>
        </div>
        <div class="row" style="width:1360px;">
            <div class="col-md-4"  id="box31-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4</h4>
            </div>
            <div class="col-md-4 col-md-offset-4" id="box32-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4 .col-md-offset-4</h4>
            </div>
        </div>
     
        <div class="row" style="width:1360px;">
            <div class="col-md-4"  id="box41-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4</h4>
            </div>
            <div class="col-md-4 col-md-offset-4" id="box42-options">
                <img src="src/google.png" width="250px" height="210px" style="padding-left:0px;">
                <h4>.col-md-4 .col-md-offset-4</h4>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
    <script>
        var btn = document.getElementById('aaa');
        var ip = document.querySelector('.bbb');
        var img = document.querySelector('.imag');

        btn.onclick = function(){
            ip.textContent = "Hi";
            img.setAttribute('src','src/(2).jpg');
            
        }
    </script>
</html>