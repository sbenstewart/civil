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
                        <h1 class="entry-title">About</h1>
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
                        <h2 class="entry-header">225<sup>th</sup> year of CEG</h2>
                        <p>Located at the Heart of Chennai, is our very own College of Engineering Guindy, a dream and desire that students all across Tamil Nadu aspire to touch. Founded in 1794, CEG holds laurels of being amongst the top ten institutions in the country, with a rich history spanning over 225 years. Living up to its motto of “PROGRESS THROUGH KNOWLEDGE”, it has been at the fore with it’s cutting-edge research, technology and innovation in shaping the world. True to its esteem, even today CEG stands as a beacon of light to students who wish to make a change in the world.</p>
                    </div>

                    <div id="tab_venue" class="tab-content">
                        <div id="tab_details" class="tab-content">
                            <h2 class="entry-header">Society of Civil Engineers</h2>
                            <p>SCE  is the student run organisation from Anna university for future Civil Engineers of the world. Raising the standards of the Society every year, the students continue to uphold their motive of Conquering Horizons with the judicious combination of events that our Society conducts every year, with vision that the student community is to benefit. SCE as an organisation, envisions to instill the perfect qualities in a leader, eventually enabling them to be the trailblazers of tomorrow.  Fortified with a core team of creative and bold minds, Society of Civil Engineers challenges, tests and motivates its members to follow their goals and revolves around the ideals of innovation and leadership. </p>
                        </div>
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <h2 class="entry-header">Symposium</h2>
                        <p>A one of a kind National level Technical Symposium of College of Engineering, Guindy, Anna University, that provides a forum for students from across the nation, to showcase their sophisticated knowledge in innovation and their abilities to incorporate that into fields of civil engineering. We students conduct events and workshops every year that inculcates the very essence of civil engineering in each and every student that walks in. Supported by our beloved faculty, together we strive to make Civilisation live up to its reputation of being the most renowned Symposium all across South India.  Civilisation also serves as a medium to bring in innovative propositions of young and budding civil engineers into reality and to bridge the gap between imagination and practicality. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="tabs">
                <ul class="tabs-nav flex">
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details1">Faculty</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue1">Students</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details1" class="tab-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <figure class="events-thumbnail text-center">
                                <img class="figure-img img-fluid" src="images/diomond-icon.png" alt="">
                            </figure>                      
                            <h2 class="entry-header text-center">President</h2>
                            <p class="text-center">
                               Dr.G.Ravikumar<br>Professor
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <figure class="events-thumbnail text-center">
                                <img class="figure-img img-fluid" src="images/diomond-icon.png" alt="">
                            </figure>                         
                            <h2 class="entry-header text-center">Treasurer</h2>
                            <p class="text-center">
                                Dr.G.Dhinagaran<br>Assistant Professor
                            </p>
                        </div>
                    </div>
                    </div>

                    <div id="tab_venue1" class="tab-content">
                        <div id="tab_details" class="tab-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">                      
                                <h2 class="entry-header">General Secretaries</h2>
                                <p><ul>
                                    <li>Akshaya M</li>
                                    <li>Surya K</li>
                                </ul></p>
                            </div>
                            <div class="col-lg-6 col-md-6">                      
                                <h2 class="entry-header">Joint Secretaries </h2>
                                <p><ul>
                                    <li>Subhiksha Sri S</li>
                                    <li>Pon Muthu Ram R</li>
                                </ul></p>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-6 col-md-6">                      
                                <h2 class="entry-header">Assistant Secretaries</h2>
                                <p><ul>
                                    <li>Jothika K</li>
                                    <li>Varun S</li>
                                </ul></p>
                            </div>
                        </div>   
                        </div>
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