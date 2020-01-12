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
                        <h1 class="entry-title">Bridge Battle</h1>
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
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organisers</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">


                        <!--<p><strong>“Trials teach us what we are; they dig up the soil,and let us see what we are made of.” - Charles Spurgeon</strong></p>
                        <p>
                        Soil mechanics is an art of science and Engineering. The observation of the performance of the soil is an essential part of any construction not only in laboratory and also in field.<br>
                        Are you a genius in mechanics of soil and hydraulics?<br>
                        Can you build a model with deep knowledge of that?<br>
                        Then open your skills in making the model!!!<br>
                      </p>-->

                        <h2 class="entry-header">FORMAT:</h2>
                        <ol>
                            <li>PRELIMS:
                                <ul>
                                    <li>A written round consisting of questions based on bridge construction problems, statements and technical with a duration of 45 minutes.</li>
                                </ul>
                            </li>
                            <li>FINALS:
                                <ul>
                                    <li>The final round will be the model construction with a duration of 4 hours.</li>
                                </ul>
                            </li>
                        </ol>
                        <h2 class="entry-header">Description:</h2>
                        <ol>
                            <li>PRELIMS:<br>
                              In Prelims, the participant’s basic knowledge on the below mentioned subjects will be tested.
                                <ul>
                                    <li>Preliminary round which involves a questionnaire related to Structural Analysis, Soil Mechanics, RCC(Reinforced Cement and Concrete), Highways, Hydraulics and Hydrology and Construction techniques & practices.</li>
                                    <li>A team of maximum 3 members not necessarily from the same college can take part in the event.</li>
                                    <li>If there is tie between 2 or more teams the evaluation will be based upon * (Star) question. A team which has the maximum number of star questions will be given priority.</li>
                                    <li>If there is a tie in the * (Star) question, the evaluation will be based on the marks obtained in each section in the following order of priority:</li>
                                    <ol>
                                      <li>Structural Analysis</li>
                                      <li>RCC</li>
                                      <li>Construction techniques & practices</li>
                                      <li>Soil Mechanics</li>
                                    </ol>
                                    <li>The prelims shall be conducted for maximum time period of 2.30 hours.</li>
                                    <li>The top 5or 6 participants qualify to finals.</li>
                                </ul>
                            </li>
                            <li>FINALS:<br>
                              In this round the participant’s deep knowledge in Structural Analysis and RCC will be tested by asking them to construct a bridge model.
                                <ul>
                                    <li>The participants have to make a model based on the problem statement which will be provided on spot.</li>
                                    <li>The model will be tested for Structural parameters and aesthetics of the structure.</li>
                                </ul>
                            </li>
                        </ol>

                        <h2 class="entry-header">RULES:</h2>
                        <ol>
                          <li>PRELIMS:
                          <ul>
                            <li>A team of maximum 4 participants are allowed either from same college or even different college.</li>
                            <li>Do not use mobile phones. The team will be disqualified in case of any malpractices.</li>
                            <li>‘*’ (STAR) Questions will be used for tie-breaks.</li>
                          </ul>
                        </li>
                        <li>FINALS:<br>
                          <ul>
                            <li>The model must be completed within the given time.</li>
                            <li>Only the materials provided must be used.</li>
                            <li>In case of any discrepancies, the decision taken by the Judges and organisers will be finals.</li>
                          </ul>
                          NOTES:<br>College ID and Civilization ID (will be provided) is mandatory.</li>
                        </ol>

                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <h2 class="entry-header">Contact:</h2>
                        <ul>
                        <li>Logapriya K&emsp;7395976262</li>
                        <li>Aarthi M&emsp;9677173008</li>
                        <li>Azhagurani A&emsp;7846941902</li>
                        </ul>

                    </div>

                    <div id="tab_about" class="tab-content">
                        <p><strong>Click the button below to register.</strong></p><br>
                        <p>The registrations will be open till the 3rd of March.</p><br>
                        <p>If you have registered for any one event, you can attend all the events conducted during the symposium. This registration entitles you to attend all the technical and non-technical events.</p>
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
    <input type="hidden" value="EVENTS" id="event" />
    <input class="btn gradient-bg flex justify-content-center align-items-center" type="button" onclick="regEvent()" value="Pay onspot"></input>
    <br>
    <?php
    // Start the session
    if(isset($_SESSION["cid"]))
    {

    $print ='
    <div class="entry-content flex">
        <a href="https://www.townscript.com/e/tall-structures-232334" class="btn gradient-bg flex justify-content-center align-items-center">Pay and Register</a>
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
                            <li><a href="about.php">CONTACT</a></li>
                    </ul>
                </nav>

                Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>
                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                                <li><a href="https://fb.com/au.civilisation"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/civilisation20"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="tel:+919176224940"><i class="fa fa-phone"></i></a></li>
                                <li><a href="mailto:sceceg1932@gmail.com?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
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
