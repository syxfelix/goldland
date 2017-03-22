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
        <link rel="stylesheet" href="css/flexslider.css">
        <style type="text/css">
            p { 
                font-family: "Trocchi", serif;
                font-size: 16px;
                color: #7c795d;
                font-style: normal;
                font-weight: normal;
                font-variant: normal;
                text-align: left;
                letter-spacing: 0px;
                line-height: 27px;
                text-align: justify;
            }
        </style>

        <title></title>
    </head>
    <body style="background: rgba(229,229,229,0.3);">
        <nav class="navbar navbar-default" role="navigation" style="background: rgba(255,255,255,1);">
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
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="parkone.php">Park One</a></li>
                                <li class="active"><a href="landmark.php">The Landmark</a></li>
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
        <div style="text-align: center;">
            <div style="margin-right: auto;margin-left: auto; width: 600px; height:200px;">
                <img src="landmark_img/landmarkSm.png" class="img-responsive" alt=""/>
            </div>
            <p style="height: 10px">
            <h1>The Landmark, St Lenoards</h1>
            <hr>
            <p style="height: 20px">
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4"> 
                <p>The Landmark is located in St Leonards, which is an high-end residential area. 
                    Its unique location makes it popular among ​​many white-collars. 
                    St Leonards is only five kilometers away from the Sydney CBD with beautiful natural environment and convenient public transportation. 
                    This project will become a new landmark in Sydney’s North Shore. 
                    We have invested $150 million Australian dollars on the land with a total investment of $ 500 million. 
                    A large project development cooperation between VIMG and the New Hope Group, 
                    we plan to build a 43-story apartment, with a total of 468 units, will become a new landmark building in Sydney&#8217;s North Shore.</p>
                <p class="word">It is expected to be completed by the end of 2018.</p>
                <p style="height: 20px">
                <div style="margin-left: 55px;"><a href="landmark_img/landmark_brouchure.pdf">
                    <button class="btn btn-warning btn-lg">More Details</button>
                </a></div>
                
            </div>
            <div class="col-sm-6">   
                <section class="slider">
                    <!-- <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li data-thumb="landmark_img/1.jpg">
                                <img src="landmark_img/1.jpg"/>
                            </li>
                            <li data-thumb="landmark_img/2.jpg"><img src="landmark_img/2.jpg"/></li>
                            <li data-thumb="landmark_img/3.jpg"><img src="landmark_img/3.jpg"/></li>
                            <li data-thumb="landmark_img/4.jpg"><img src="landmark_img/4.jpg"/></li>
                            <li data-thumb="landmark_img/5.jpg"><img src="landmark_img/5.jpg"/></li>
                            <li data-thumb="landmark_img/6.jpg"><img src="landmark_img/6.jpg"/></li>
                            <li data-thumb="landmark_img/7.jpg"><img src="landmark_img/7.jpg"/></li>
                            <li data-thumb="landmark_img/8.jpg"><img src="landmark_img/8.jpg"/></li>
                            <li data-thumb="landmark_img/9.jpg"><img src="landmark_img/9.jpg"/></li>
                            <li data-thumb="landmark_img/10.jpg"><img src="landmark_img/10.jpg"/></li>
                            <li data-thumb="landmark_img/11.jpg"><img src="landmark_img/11.jpg"/></li>
                            <li data-thumb="landmark_img/12.jpg"><img src="landmark_img/12.jpg"/></li>
                            <li data-thumb="landmark_img/13.jpg"><img src="landmark_img/13.jpg"/></li>
                            <li data-thumb="landmark_img/14.jpg"><img src="landmark_img/14.jpg"/></li>
                            <li data-thumb="landmark_img/15.jpg"><img src="landmark_img/15.jpg"/></li>
                        </ul>
                    </div> -->
                    <div id="slider" class="flexslider" style="margin: 0 0 10px;">
                        <ul class="slides">
                            <li><img src="landmark_img/1.jpg"/></li>
                            <li><img src="landmark_img/2.jpg"/></li>
                            <li><img src="landmark_img/3.jpg"/></li>
                            <li><img src="landmark_img/4.jpg"/></li>
                            <li><img src="landmark_img/5.jpg"/></li>
                            <li><img src="landmark_img/6.jpg"/></li>
                            <li><img src="landmark_img/7.jpg"/></li>
                            <li><img src="landmark_img/8.jpg"/></li>
                            <li><img src="landmark_img/9.jpg"/></li>
                            <li><img src="landmark_img/10.jpg"/></li>
                            <li><img src="landmark_img/11.jpg"/></li>
                            <li><img src="landmark_img/12.jpg"/></li>
                            <li><img src="landmark_img/13.jpg"/></li>
                            <li><img src="landmark_img/14.jpg"/></li>
                            <li><img src="landmark_img/15.jpg"/></li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li><img src="landmark_img/1.jpg"/></li>
                            <li><img src="landmark_img/2.jpg"/></li>
                            <li><img src="landmark_img/3.jpg"/></li>
                            <li><img src="landmark_img/4.jpg"/></li>
                            <li><img src="landmark_img/5.jpg"/></li>
                            <li><img src="landmark_img/6.jpg"/></li>
                            <li><img src="landmark_img/7.jpg"/></li>
                            <li><img src="landmark_img/8.jpg"/></li>
                            <li><img src="landmark_img/9.jpg"/></li>
                            <li><img src="landmark_img/10.jpg"/></li>
                            <li><img src="landmark_img/11.jpg"/></li>
                            <li><img src="landmark_img/12.jpg"/></li>
                            <li><img src="landmark_img/13.jpg"/></li>
                            <li><img src="landmark_img/14.jpg"/></li>
                            <li><img src="landmark_img/15.jpg"/></li>
                        </ul>
                    </div> 
                </section>
            </div>
            <div class="col-sm-1"></div>
        </div>
        
        <?php include('footer.php'); ?>