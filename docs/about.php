<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Civilisation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is the official website of Civilisation CEG, a nation level intercollege technical symposium conducted by the Society of Civil Engineers in association with the department of Civil Engineering, College of Engineering Guindy.">
    <meta name="author" content="Ben Stewart S">
    <meta name="keywords" content="civilisation,ceg,symposium,2020,civil,ben stewart,chennai,guindy,college">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!--Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/toastr.min.css">
    <script src="js/custom.js"></script>
</head>
<body class="single-event-page">
<header class="site-header">
<div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="index.php"><img src="images/weblogo.png" alt="CIVIL"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="index.php#workshops">WORKSHOPS</a></li>
                            <li><a href="index.php#events">EVENTS</a></li>
                            <li><a href="index.php#lectures">LECTURES</a></li>
                            <li><a href="accomodation.php">ACCOMMODATION</a></li>
                            <li><a href="about.php">CONTACT</a></li>
                            <?php
                            // Start the session

                            if(isset($_SESSION["cid"]))
                            {
                                $print1 ='<li class="d-lg-none"><a href="php/logout.php">LOGOUT</a></li>';
                            }
                            else {
                                $print1 ='<li class="d-lg-none"><a href="signup.php">LOGIN</a></li>';
                            }
                            echo  $print1;
                            ?>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">

                        <?php
                            // Start the session

                            if(isset($_SESSION["cid"]))
                            {
                                $print1 ='<a class="btn gradient-bg" href="signup.php">LOGOUT</a>';
                            }
                            else {
                                $print1 ='<a class="btn gradient-bg" href="signup.php">LOGIN</a>';
                            }
                            echo  $print1;
                            ?>


                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header single-event-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">About.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">
    
    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">CEG</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">SCE</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Civilisation</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">                      
                        <h2 class="entry-header">College of Engineering, Guindy</h2>
                        <p>Owing to its strong industry - academia relations, excellent research culture and world class faculty and state-of-the-art infrastructure, CEG has been known for its diversity of students from all walks of life. Allowing students to embark on a journey to broaden their minds and visions into contributing to the development of a better world has indeed been the top priorities of this institiution. Living upto its motto of PROGRESS THROUGH KNOWLEDGE, it has been at the fore cutting edge of research, technology and innovation in shaping the world the way it is at present and thriving for a better future.</p>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <div id="tab_details" class="tab-content">
                            <h2 class="entry-header">Society of Civil Engineers</h2>
                            <p>Society of Civil Engineers (SCE) is an organisation constituting of students alongside the guidance of the esteemed faculty of Civil Engineering of CEG, Anna University. Raising the standards of the society every year, the students continue to uphold their motive of CONQUERING HORIZONS. SCE presents a golden opportunity for the students of Civil Engineering in the college with a platform to unravel their potential and knowledge in the latest trends and developments.</p>
                        </div>
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <h2 class="entry-header">Symposium</h2>
                        <p>A one of the kind technical fest of CEG that provides a forum for students from across the nation to showcase their sophisticated knowledge in innovation and their abilities to incorporate that into the feilds of Civil Engineering. It serves as a medium to bring their propositions into reality and to bridge the gap between imagination and practicality.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details1">Old JS</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue1">Current JS</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers1">Website Devs</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details1" class="tab-content">                      
                        <h2 class="entry-header">Joint Secretaires</h2>
                        <p><ul>
                            <li>Sundar M&emsp;8489732365</li>
                            <li>Vijayalakshmi G&emsp;8531924272</li>
                        </ul></p>
                    </div>

                    <div id="tab_venue1" class="tab-content">
                        <div id="tab_details" class="tab-content">
                            <h2 class="entry-header">Joint Secretaires</h2>
                        <p><ul>
                            <li>Sundar M&emsp;8489732365</li>
                            <li>Vijayalakshmi G&emsp;8531924272</li>
                        </ul></p>    
                        </div>
                    </div>

                    <div id="tab_organizers1" class="tab-content">
                        <h2 class="entry-header">Website Developers</h2>
                        <p>Being one of the best freelancing website developers, we at Enigma strive to provide the best possible services to you.</p>
                        <p><ul>
                            <li>Dhanush&emsp;9578365727</li>
                            <li>Sivakailash&emsp;8754186770</li>
                            <li>Santhosh G&emsp;9080347501</li>
                            <li>Ben Stewart S&emsp;9489408090</li>
                        </ul></p>  
                    </div>

                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-12">
            <div class="upcoming-events">
                <div class="upcoming-events-header">
                    <h4>Upcoming Events</h4>
                </div>

                <div class="upcoming-events-list">
                    <div class="upcoming-event-wrap flex flex-wrap justify-content-between align-items-center">
                        <figure class="events-thumbnail">
                            <a href="#"><img src="images/upcoming-1.jpg" alt=""></a>
                        </figure>

                        <div class="entry-meta">
                            <div class="event-date">
                                25<span>February</span>
                            </div>
                        </div>

                        <header class="entry-header">
                            <h3 class="entry-title"><a href="#">Blockchain Conference</a></h3>

                            <div class="event-date-time">May 29, 2018 @ 8:00 Pm - May 30, 2018 @ 4:00 Am</div>

                            <div class="event-speaker">Speackers: Maria Williams, Luis Smith, James Doe</div>
                        </header>

                        <footer class="entry-footer">
                            <a href="#">Buy Tikets</a>
                        </footer>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><p class="entry-title">Civilisation 2020</p></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#workshops">WORKSHOPS</a></li>
                            <li><a href="#events">EVENTS</a></li>
                            <li><a href="#lectures">LECTURES</a></li>
                            <li><a href="accomodation.php">ACCOMMODATION</a></li>
                            <li><a href="about.php">CONTACT</a></li>
                    </ul>
                </nav>

                Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>
                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="https://fb.com/au.civilisation"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="tel:+91‭8489732365‬"><i class="fa fa-phone"></i></a></li>
                                <li><a href="mailto:help@civilisationceg.in?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-address-book"></i></a></li>-->
                                <li><a href="https://api.whatsapp.com/send?phone=91‭9092859699‬"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://goo.gl/forms/7aUhSw8LaI6rfAn52"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/main.js'></script>
<script type='text/javascript' src='js/toastr.min.js'></script>

</body>
</html>