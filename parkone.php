<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initail-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/flexslider.css">
        <style type="text/css">
            p {
                font-family: 'Trocchi', serif; 
                font-size: 16px; 
                color: #7c795d;
                font-style: normal;
                font-weight: normal; 
                font-variant: normal; 
                text-align: left; 
                letter-spacing: 0px; 
                line-height: 22px;
                
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
                font-size: 22px;
            }
        </style>
        <title></title>
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
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="parkone.php">Park One</a></li>
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

        <div style="text-align: center;">
            <div style="margin-right: auto;margin-left: auto; margin-bottom: 20px; width: 600px; height:200px;">
                <img src="parkone/logoSm.png" class="img-responsive" alt=""/>
            </div>
            <p style="height: 40px">
            <h1>Park One, Sydney</h1>
            <hr>
            <p style="height: 20px">
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4"> 
                <p>
                    Rising gracefully above the gardens, Park One has been designed to offer a home of natural style, 
                    at an iconic address that defines luxury north shore living. </p>
                <p>
                    The luxury of Park One is reflected in the carefully curated retail environment on the ground floor, 
                    with the finest providores, boutique retail and on-trend dining in Macquarie Park. This is the perfect 
                    place to pick up supplies f or a picnic on the lawn, a takeaway dinner to enjoy at home, or a regular 
                    coffee on your way to work.</p>
                <p>
                    The private residents lounge is a haven of sophisticated design within its own gorgeous garden setting. 
                    Plush seating, kitchenettes and a natural palette of stone, timber, marble and brass set the scene for 
                    moments of relaxed elegance.</p>
                <p>
                    Up on Level 19, the Park One Sky Terrace takes the experience of outdoor entertaining in a communal open 
                    air lounge to new heights. Here residents can enjoy barbecues and private dining, set against a flawless 
                    parkland and city panorama.</p>
                <p>
                    These are homes which celebrate space, from the open-plan living areas to the abundant storage and 
                    generous terraces. Expansive windows have been oriented to maximise natural light and provide residents 
                    with a seamless connection to the lush surroundings. From the feature lighting over the island bench to
                    the premium materials used throughout, these are simply exquisite interiors from every angle.</p>
                <p>
                    Why is Macquarie Park One of the most highly sought after places to live in North Sydney? Simply put, 
                    it has everything.</p>
                <p style="height:15px">
                <div style="margin-left: 55px;"><a href="parkone/parkone.pdf">
                    <button class="btn btn-warning btn-lg">More Details</button>
                </a></div>
            </div>
            <div class="col-sm-6">   
                <section class="slider">
                    <div id="slider" class="flexslider" style="margin: 0 0 30px;">
                        <ul class="slides">
                            <li><img src="parkone/1.jpg"/></li>
                            <li><img src="parkone/2.jpg"/></li>
                            <li><img src="parkone/3.png"/></li>
                            <li><img src="parkone/4.png"/></li>
                            <li><img src="parkone/5.png"/></li>
                            <li><img src="parkone/6.png"/></li>
                            <li><img src="parkone/7.png"/></li>
                            <li><img src="parkone/8.png"/></li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li><img src="parkone/1.jpg"/></li>
                            <li><img src="parkone/2.jpg"/></li>
                            <li><img src="parkone/3.png"/></li>
                            <li><img src="parkone/4.png"/></li>
                            <li><img src="parkone/5.png"/></li>
                            <li><img src="parkone/6.png"/></li>
                            <li><img src="parkone/7.png"/></li>
                            <li><img src="parkone/8.png"/></li>
                        </ul>
                    </div> 
                </section>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <p style="height:20px;">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="col-sm-4">
                    <p><span class="big">TRANSPORT:</span></p><p><span>Close to major arterial roads; Trains connecting with the CBD; Various bus routes; 
                    An extensive bicycle network</span></p>
                    <p><span class="big">EDUCATION:</span></p><p><span> Kindergartens; Day care centres; Private and public schools; Macquarie Park University</span></p>
                </div>
                <div class="col-sm-4">
                    <p><span class="big">SHOPPING:</span></p><p><span> Macquarie Shopping Centre; International retailers; Fresh produce and supermarkets; 
                    250+ shops under one roof</span></p>
                    <p><span class="big">PARK LIFE:</span></p><p><span> Lane Cove National Park; Multiple smaller parks; Walking trails; Sporting ovals</span></p>
                </div>
                <div class="col-sm-4">
                    <p><span class="big">SPORTING LIFE:</span></p><p><span> Local gyms; Swimming and aquatic centre; Four nearby golf courses; Sporting clubs for all ages</span></p>
                    <br><p><span class="big">COMMUNITY:</span></p><p><span> An established part of Sydney; Major hospital and medical services; A welcoming community; 
                        A family friendly area</span></p>
                </div>
                <p style="height: 30px">
            </div>
            <div class="col-sm-1"></div>
        </div>
        
        <?php include('footer.php'); ?>