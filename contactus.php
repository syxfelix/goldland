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
                font-size: 20px;
            }
        </style>
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
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="parkone.php"></a></li>
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
                        <li class="active"><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div></div>
            </div>
        </nav>
        <div class="container contactbg" style="background-image: url(image/bgimage.jpg); background-size: cover;">
            <p style="height:50px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                <h2>Vinson Wang - Director</h2>
                    <p><span class="big">Email:</span><span>   vinsonwang@goldlandinvestment.com.au</span></p>
                    <p><span class="big">Phone:</span><span>   02 8387 4564</span></p>
                    <p><span class="big">Mobile:</span><span>   0452026666</span></p>  
                <br>
                <h2>Vincent Chen - Director</h2>
                    <p><span class="big">Email:</span><span>   vincentchan@goldlandinvestment.com.au</span></p>
                    <p><span class="big">Phone:</span><span>   02 8387 4564</span></p>
                    <p><span class="big">Mobile:</span><span>   0404881338</span></p> 
                <br>
                <h2>Iverson Ting - Sales Director</h2>
                    <p><span class="big">Email:</span><span>   iversonting@goldlandinvestment.com.au</span></p>
                    <p><span class="big">Phone:</span><span>   02 8387 4564</span></p>
                    <p><span class="big">Mobile:</span><span>   0421745440</span></p> 
                <br>
                <h2>George Zhao - Sales Manager</h2>
                    <p><span class="big">Email:</span><span>   georgezhao@goldlandinvestment.com.au</span></p>
                    <p><span class="big">Phone:</span><span>   02 8387 4564</span></p>
                    <p><span class="big">Mobile:</span><span>   0452406877</span></p> 
                <br>
                <h2>Louisa Liu - Senior Migaration Consultant</h2>
                    <p><span class="big">Email:</span><span>   louisaliu@goldlandinvestment.com.au</span></p>
                    <p><span class="big">Phone:</span><span>   02 8387 4564</span></p>
                    <p><span class="big">Mobile:</span><span>   0424100528</span></p> 
                </div>
            <div class="col-sm-2"></div>
            </div>
            <p style="height:30px;">
        </div>
        
        
        
        <?php include('footer.php'); ?>