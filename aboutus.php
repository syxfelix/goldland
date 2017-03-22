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
        <title></title>
        <style type="text/css">
            h1 {font-family: 'Signika', sans-serif; }
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
                font-size: 30px;
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
                                <li><a href="parkone.php">Park One</a></li>
                                <li><a href="landmark.php">The Landmark</a></li>
                                <li><a href="bayside_botany.php">Bayside Botany</a></li>
                                <li><a href="essence.php">Essence</a></li>
                                <li><a href="centra.php">Centra</a></li>
                                <li><a href="monarch.php">Monarch Residences</a></li>
                                <li><a href="bloom.php">Bloom</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="aboutus.php">About Us</a></li>
                        <li><a href="career.php">Career</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div></div>
            </div>
        </nav>
        
        
        <div class="container-fluid" style="background: url('landmark_img/8.jpg') repeat; background-size: 100%; height:500px; weight:300px;">
            <div class="jumbotron">
                <p style="height:250px;"><h1>Goldland Investment Group </h1>
                </p>
            </div>
        </div>
        
        <div class="container" style="background: rgba(229,229,229,0.3);">
            <p style="height:100px;">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <div style="margin-bottom: -15px;"><img src="image/melb.jpg" style="height:200px; width:350px;"></div><br>
                    <div style="margin-bottom: -15px;"><img src="landmark_img/8.jpg" style="height:200px; width:350px;"></div><br>
                    <div><img src="image/goldcoast.jpg" style="height:200px; width:350px;"></div>
                    
                </div>
                <div class="col-sm-6">
                    <p><span class="big">Goldland Investment Group</span><span> is the company that focus on the investment, migration, 
                    development and selling properties.  The office is located in Sydney CBD. 
                    &nbsp;We&nbsp;offer unparalleled services to developers,&nbsp;</span><span> being full-service consultants specializing
                    in on/off-market channel sales.&nbsp;Comparing with other sales agents, 
                    Goldland Investment Group has deep cooperation relations of many developers in both Sydney,
                    Melbourne and Brisbane.The main purpose is to create the first-class enterprise, 
                    cultivating the most talented people and giving customers the highest quality services, 
                    in order to become Australian leading real estate company.</span></p>
                    <p style="height: 20px">
                    <p><span class="big">金地投资集团</span><span> 是一家致力于投资、移民、房地产开发及销售为一体的多元化公司。
                        总办公室设立在繁华的悉尼市中心，内部销售人员约20多人，与其他传统的销售公司不同，
                        金地集团与悉尼及墨尔本和布里斯班多家开发商都有着密切的合作关系。
                        金地集团秉承着创建一流企业，培养一流人才，给客户最高品质的服务为宗旨，
                        打造澳洲房产界内的领先公司。</p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <p style="height:50px;">
        </div>
        
        <?php include('footer.php'); ?>
