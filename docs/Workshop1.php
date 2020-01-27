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

                <div class="col-2 col-lg-8 order-3 order-lg-2">
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
                            <li><a href="about.php">ABOUT</a></li>
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

                <div class="col-lg-2 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">

                        <?php
                            // Start the session

                            if(isset($_SESSION["cid"]))
                            {
                                $print1 ='<a class="btn gradient-bg" href="php/logout.php">LOGOUT</a>';
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
                        <h1 class="entry-title">Building Information & Modelling</h1>
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
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organisers</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">
                    <div class="row mb-3">
                        <div class="col-6 col-md-3 order-md-2 col-lg-3 order-lg-2 col-xl-3 order-xl-2 align-self-center mt-1">
                            <figure class="events-thumbnail text-center">
                                <img class="figure-img img-fluid" src="images/lt.png" alt="">
                            </figure> 
                        </div>
                        <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                            <p>This event is conducted by</p>

                            <h2 class="entry-header">LARSEN & TOUBRO</h2>
                            <!--<p><strong>Vice President, Head of Public Space Business Unit of L&T Construction.</strong></p>-->
                            <p>
                            Building Information Modelling (BIM), is an intelligent 3D digital model-based process that gives Architecture, Engineering, and Construction (AEC) professionals the insight and tools to more efficiently plan, design, construct and manage buildings and infrastructure. In this fast paced world where Innovation and Artificial Intelligence parallel each other, we here at Anna University hope to provide the students that visit us with all the necessary skills to stay ahead of the rest. Conducted by L&T, this workshop is one of our signature events for Civilisation’20.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="entry-header">INSTRUCTIONS:</h2>
                            <ul>
                                <li>Both online & onspot payments are available.</li>
                                <li>The fee per workshop will be 700 INR.</li>
                                <li>Food (Lunch only) and T shirts can be availed only for online registration.</li>
                                <li>T-shirt will cost 150 INR & Food will cost 100 INR.  They are not inclusive of the workshop fee.</li>
                                <li>Students who wish to register on spot are requested to be present 1 hour before commencement of the workshop.</li>
                                <li>All participants are requested to be present at the venue well before 15 minutes of commencement of workshop.</li>
                                <li>Participants are not allowed to enter the session after 30 minutes of commencement of session.</li>
                                <li>Certificates will be provided only after completion of the afternoon session.</li>
                                <li>Group registrations can be done only on spot.</li>
                                <li>College ID & Civilisation ID (will be provided) are mandatory.</li>
                                <li>Usage of mobile phones, electronic gadgets etc are strictly prohibited during course of event.</li>
                            </ul>
                            <!--<<p><strong>You will learn about the Statue of Unity.</strong></p>-->
                        </div>
                    </div>
                    </div>

                    <div id="tab_venue" class="tab-content">

                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">


                                <div class="single-event-details-row">
                                    <label>Venue:</label>
                                    <p>Vivek Auditorium</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Time:</label>
                                    <p>10 AM – 4 PM</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Time:</label>
                                    <p>5<sup>th</sup> March 2020</p>
                                </div>



                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3858741907034!2d80.2341250145436!3d13.011081590829994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52679f425b23db%3A0xe116c31bfc5cb0cb!2sVivekananda%20Auditorium!5e0!3m2!1sen!2sus!4v1578238631469!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <h2 class="entry-header">Contact:</h2>
                        <ul>
                            <li>Nishi<br>994471757</li>
                            <li>Ishwrya<br>7598404668</li>
                        </ul>
                        <p>You can also mail us at <a href="mailto:civilisation20.workshops@gmail.com">civilisation20.workshops@gmail.com</a></p>

                    </div>

                    <div id="tab_about" class="tab-content">
                        <p><strong>Click the button below to register.</strong></p><br>
                        <p>The workshop has been scheduled for March 5.</p><br>
                        <p>The workshop costs INR 700 for one indiviual. Group registrations have to be done onspot. T-Shirts and Food can be availed only for online payments.</p>
                        <?php
                        // Start the session

                            if(isset($_SESSION["cid"]))
                            {
                            $print2 ="<p><strong>You are currently logged in as ".$_SESSION["name"]."</strong></p>";
                            }
                            else {
                                $print2 ="<p><strong>You must be logged in to register online or onspot.</strong></p>";
                              }
                            echo  $print2;
                        ?>

<form id="registration" class="entry-content">

<!--<div class="entry-content flex">-->
    <input type="hidden" value="Building Information & Modelling" id="event" />
    <input class="btn gradient-bg flex justify-content-center align-items-center" type="button" onclick="regEvent()" value="Pay onspot"></input>
    <br>
    <?php
    // Start the session
    if(isset($_SESSION["cid"]))
    {

    $print ='
    <div class="entry-content flex">
        <a href="https://www.townscript.com/e/c20workshop1" class="btn gradient-bg flex justify-content-center align-items-center">Pay and Register</a>
    </div>
    ';
    }
    else {
    $print ='
    <div class="entry-content flex">
        <a href="login.php" class="btn gradient-bg flex justify-content-center align-items-center">Pay and Register</a>
    </div>
    ';
    }
    echo  $print;
    ?>


<!--</div>-->
</form>




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
                            <li><a href="about.php">ABOUT</a></li>
                    </ul>
                </nav>

                Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>
                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                                <li><a href="https://fb.com/au.civilisation"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/civilisation20"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="tel:+919176224940"><i class="fa fa-phone"></i></a></li>
                                <li><a href="mailto:civilisation2020ceg@gmail.com?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
                                <!--<li><a href="#"><i class="fa fa-address-book"></i></a></li>-->
                                <li><a href="https://api.whatsapp.com/send?phone=919176224940"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://forms.gle/DoiPfyzcotmjpasa6"><i class="fa fa-github"></i></a></li>
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
