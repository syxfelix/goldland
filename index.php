<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/main.css" >
        <title>Welcome to Goldland</title>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation" style="background: rgba(0, 0, 0, 0);">
            <div class="container-fluid">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
                        <span class="sr-only">Show and hide the navi</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-left" href="index.php" style="">
                        <img style="max-width:300px" src="logo2.png"/>
                    </a>
                </div></div><div class="col-sm-1"></div>
                <div class="col-sm-6">
                <div class="collapse navbar-collapse" id="navbar-container">
                    <ul class="nav navbar-nav" style="padding: 45px;margin: 0;">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="parkone.php">Park One</a></li>
                                <li><a href="landmark.php">The Landmark</a></li>
                                <li><a href="bayside_botany.php">Bayside Botany</a></li>
                                <li><a href="essence.php">Essence</a></li>
                                <li><a href="centra.php">Centra</a></li>
                                <li><a href="monarch.php">Monarch Residences</a></li>
                                <li><a href="bloom.php">Bloom</a></li>
                            </ul>
                        </li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div></div>
            </div>
        </nav>
        
        <header>
            <div class="container-fluid">  
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides image size: 1230x500-->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="container2" style="height: 100%;width: 100%"><img class="container3 img-responsive" src="monarch_img/MonarchResi.png" alt=""/></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <div class="container2" style="height: 100%;width: 100%"><img class="container3 img-responsive" src="image/landmark.png" alt=""/></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <div class="container2" style="height: 100%;width: 100%"><img class="container3 img-responsive" src="image/brochure.png" alt=""/></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            
        </header>
        <p style="height:30px">
        <div class="container text-center" style="border-radius: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px;">
            <h1 class="thin" style="color: goldenrod">Goldland Investment Group</h1>
            <p style="height: 15px">
            <h3>OUR RECENT PROJECTS</h3>
            <hr>
            
            <div class="text-left" style="text-decoration: underline; font-size: larger; color: goldenrod">
                New South Wales:
            </div>
            <p style="height:10px">
            
                
            <div class="row">
                <div class="col-lg-4">
                    <a href="parkone.php">
                        <img src="parkone/parkoneSmLogo.png" class="img-responsive rounded" alt="parkone"/>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="landmark.php">
                        <img src="landmark_img/landmarkLogo.png" class="img-responsive rounded" alt="landmark"/>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="essence.php">
                        <img src="essence_img/essenceLogo.png" class="img-responsive rounded" alt="essence"/>
                    </a>
                </div>
            </div>
            <p style="height:10px">
            <div class="row">
                <div class="col-lg-4">
                    <a href="bayside_botany.php">
                        <img src="bayside_img/baysideLogo712x555.png" class="img-responsive rounded" alt="bayside"/>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="monarch.php">
                        <img src="monarch_img/monarchLogo.png" class="img-responsive rounded" alt="monarch"/>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="centra.php">
                        <img src="centra_img/centra.png" class="img-responsive rounded" alt="centra"/>
                    </a>
                </div>
            </div>
            
            <p style="height:10px">
                
            <div class="text-left" style="text-decoration: underline; font-size: larger; color: goldenrod">
                Queensland:
            </div>
            <p style="height:10px">
            <div class="row">
                <div class="col-lg-4">
                    <a href="bloom.php">
                        <img src="bloom_img/bloomLogo.png" class="img-responsive rounded" alt=""/>
                    </a>
                </div>
                <div class="col-lg-8">
                    
                </div>
            </div>
        </div>
        
        <?php include('footer.php'); ?>