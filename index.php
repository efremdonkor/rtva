<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Restoration Temple, Dumfries, Virginia :: ICGC - The International Central Gospel Church
        </title>

        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <!--                <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
                        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css.map">
                        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
                        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css.map">
                        <link type="text/css" rel="stylesheet" href="css/bootstrap.css.map">                
                        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css.map">-->
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            var mn = $("#holdnav");
            mns = "main-nav-scrolled";
            hdr = $('#coverhead').height();
            $(window).scroll(function () {
                if ($(this).scrollTop() > hdr) {
                    mn.addClass(mns);
                } else {
                    mn.removeClass(mns);
                }
            });
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <div class="site-container">
            <div class="container-fluid" id="holdnav">
                <nav class="navbar navbar-inverse navbar-fixed-top">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="images/ICGC Rest.png" class="img-responsive"/></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right" id="navigate">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">New Here?</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Ministries</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Contact US</a></li>
<!--                            <span class="glyphicon glyphicon-user"></span> 
                            <span class="glyphicon glyphicon-log-in"></span> -->
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid" id="coverhead">
                <h1>The Lord will make you Bigger, Better and Greater !!!</h1>                
            </div>

            <div class="container-fluid" id="msg">
                <div class="container">
                    <div class="col-md-8">
                        <br />
                          <h2 class="text-success page-header bg-success">Message from Pastor John Sarsah</h2>
                        <p>I will like to take the opportunity to welcome you to this warm and vibrant church, International Central Gospel Church in Dumfries, Virginia. I am excited that you are here.<br><br>In Leviticus 25:10, God says, <q>And you shall ... proclaim liberty throughout all the land...It shall be restoration for you...</q> Simply, this scripture is telling us that we are in our season 
                            of recovering all that we have been denied by any force, be it spirit or human. This is the inspiration for Restoration Temple and it is the message we bring to the community, the county and the state - it is 
                            our prophetic season of restoration. God will give you reason to celebrate.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="images/js.jpg" class="img-responsive img-circle"/>
                    </div>
                </div>
            </div>

            <div class="container-fluid" id="coreValues">
                <div class="container">
                    <h1 class="page-header text-uppercase">Our Philosophy</h1>
                </div>
                <div class="container">
                    <div class="col-md-4">
                        <div class="row">
                            <span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="page-header">Practical Christianity</h3>
                            <p>We believe that Christianity must be the way of life of the believer and not in the least a religion. Christianity, we believe is not a myth or fable but practical, pragmatic and enjoyable 
                                life ordained by God. By practical, we mean we teach our members to practice what the Word says so our <q>light can shine before man</q> (Matthew 5:14-16</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="page-header">Human Dignity</h3>
                            <p>God is a dignified God and He created mankind in His image and likeness. As people created in God's image and likeness, we have His dignity and must carry ourselves in a noble way so as to properly represent Him on earth (Genesis 1:26-28; Ephesians 5:1-6)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <span class="glyphicon glyphicon-king" aria-hidden="true"></span>
                        </div>
                        <div class="col-lg-12">
                            <h3 class="page-header">Excellence</h3>
                            <p>With us at ICGC, excellence is a way of life. As children of the Most High God and the highest element of His creation, it is wise that we do all things excellently
                                and to the best of our potential. The apostle Paul in 1 Corinthians 14:40 encourages believers to <q>let all things be done decently <i>(excellently)</i> and in order.</q></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
