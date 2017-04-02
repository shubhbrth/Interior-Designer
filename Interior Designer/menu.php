<?php
    echo'<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                    </ul>
                </ul>
            </div><!--.nav-collapse -->
        </div>
        </nav>';
?>