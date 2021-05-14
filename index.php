<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
            
        <title>DietBot</title>
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="indexstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <nav class="navbar navbar-inverse navbar-fixed-top" id="main-nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">DietBot</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="banner-image" style="background:url(bg.jpg); background-size: cover;background-repeat:no-repeat; background-position:  center">
            <div class="container">
                <div id="inner-banner-image">
                    <div id="banner-content">
                        
                        <h1>Confused what to eat and what to avoid ??</h1>
                        <p id="main">Here's your answer to stay healthy</p>
                        <a href="login.php">
                            <button type="button" class="btn btn-danger btn-lg active" href="login.php">Talk to DietBot</button>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--
        <footer>
            <div class="container">
                <p class="foot">Copyright © DietBot food recommender. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>
        -->
        
    </body>
</html>
