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
        <title></title>
        <style type="text/css">
            p {
                font-family: 'Trocchi', serif; 
                font-size: 18px; 
                color: #7c795d;
                font-style: normal;
                font-weight: normal; 
                font-variant: normal; 
                text-align: left; 
                letter-spacing: 0px; 
                line-height: 30px;
                
                text-align: justify;
                
                display: table;
                vertical-align: bottom;
                width: 100%;
            }
            p .span {
                display: table-cell;
                width: 33%;
                height: 50px;
            }
            .big {
                font-size: 24px;
            }
        </style>
    </head>
    <body style="background: rgba(229,229,229,0.3);">
        <nav class="navbar navbar-default" role="navigation" style="background: rgba(255, 255, 255, 1);">
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
                        <li class="active"><a href="career.php">Career</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div></div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive" style="margin-bottom: 30px; margin-left: 70px" src="image/joinus.jpg">
                </div>
            </div>   
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h2 style="color: goldenrod">SALES - Sydney Office</h2>
                    <hr><p><span class="big">Interested in a real eastate career with Goldland Group?</span></p>
                    <p>
                        With this year set to be another year of strong growth, 
                    we are looking for sales people (experenced or not )to join us.
                    Goldland group welcomes genuine committed individuals who are 
                    interested in furthering their real estate career or looking 
                    at business ownership. we also work in true partnership, 
                    assisting them to build their business by providing the training, 
                    support, marketing, resources and teamwork to grow a strong and rewarding business.
                    For more information, please <a href="contactus.php" style="text-decoration:underline">contact us</a>.
                    </p>
                    
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div> 
        <p style="height:30px">
        
        
        
        <?php include('footer.php'); ?>
