<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About us</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="elements-page">
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="#">CIVIL</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>
                                <li><a href="index.php#home">HOME</a></li>
                                <li><a href="index.php#workshops">WORKSHOPS</a></li>
                                <li><a href="index.php#events">EVENTS</a></li>
                                <li><a href="index.php#lectures">LECTURES</a></li>
                                <li><a href="accomodation.php">ACCOMMODATION</a></li>
                                <li><a href="about.php">CONTACT</a></li>
                                <?php
                                // Start the session

                                if(isset($_SESSION["cid"]))
                                {
                                  $print1 .="<li><a href='php/logout.php'>LOGOUT</a></li>";
                                }
                                else {
                                  $print1 .="<li><a href='signup.php'>LOGIN</a></li>";
                                }
                                echo  $print1;
                                ?>


                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">
                        <h2 class="entry-title">About</h2>

                        <!--<ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>Elements</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- .entry-header -->
                </div><!-- .col-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="main-content">
            <div class="container">
                <!--<div class="row elements-wrap">
                    <div class="col-12 buttons-wrap">
                        <div class="entry-header">
                            <h2 class="entry-title">Buttons</h2>
                        </div>

                        <div class="entry-content flex">
                            <a href="#" class="btn gradient flex justify-content-center align-items-center">Load More</a>
                            <a href="#" class="btn white flex justify-content-center align-items-center">Load More</a>
                            <a href="#" class="btn border-blu flex justify-content-center align-items-center">Load More</a>
                            <a href="#" class="btn color-border flex justify-content-center align-items-center">Load More</a>
                        </div>
                    </div>
                </div><!-- row elements-wrap -->

                <div class="row elements-wrap">
                    <div class="col-12 accordion-and-tabs-wrap">
                        <!--<div class="entry-header">
                            <h2 class="entry-title">Accordions & tabs</h2>
                        </div><!-- entry-header -->

                        <div class="entry-content">
                            <div class="row">


                                <div class="col-12 col-lg-7 mt-5 mt-lg-0">
                                    <div class="tabs">
                                        <ul class="tabs-nav flex">
                                            <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">CEG</li>
                                            <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">SCE</li>
                                            <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Civilisation</li>
                                            <!--<li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">About the event</li>-->
                                        </ul><!-- tabs-nav -->

                                        <div class="tabs-container">
                                            <div id="tab_details" class="tab-content">
                                                <h2 class="entry-header">College of Engineering, Guindy</h2>

                                                <p>Owing to its strong industry - academia relations, excellent research culture and world class faculty and state-of-the-art infrastructure, CEG has been known for its diversity of students from all walks of life. Allowing students to embark on a journey to broaden their minds and visions into contributing to the development of a better world has indeed been the top priorities of this institiution. Living upto its motto of PROGRESS THROUGH KNOWLEDGE, it has been at the fore cutting edge of research, technology and innovation in shaping the world the way it is at present and thriving for a better future.</p>
                                            </div>

                                            <div id="tab_venue" class="tab-content">
                                                <h2 class="entry-header">Society of Civil Engineers</h2>

                                                <p>Society of Civil Engineers (SCE) is an organisation constituting of students alongside the guidance of the esteemed faculty of Civil Engineering of CEG, Anna University. Raising the standards of the society every year, the students continue to uphold their motive of CONQUERING HORIZONS. SCE presents a golden opportunity for the students of Civil Engineering in the college with a platform to unravel their potential and knowledge in the latest trends and developments.</p>
                                            </div>

                                            <div id="tab_organizers" class="tab-content">
                                                <h2 class="entry-header">Symposium</h2>

                                                <p>A one of the kind technical fest of CEG that provides a forum for students from across the nation to showcase their sophisticated knowledge in innovation and their abilities to incorporate that into the feilds of Civil Engineering. It serves as a medium to bring their propositions into reality and to bridge the gap between imagination and practicality.</p>
                                            </div>

                                            <!--<div id="tab_about" class="tab-content">
                                                <h2 class="entry-header">10 years a mission</h2>

                                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim.</p>
                                            </div>-->
                                        </div>
                                    </div>
                                </div><!-- col-7 -->

                                <div class="col-12 col-lg-7 mt-5 mt-lg-0 top-buffer">
                                    <div class="tabs">


                                        <div class="tabs-container">
                                            <div id="tab_details" class="tab-content">
                                                <h2 class="entry-header">Joint Secretaires</h2>

                                                <p><ul>
                                                  <li>Sundar M&emsp;8489732365</li>
                                                  <li>Vijayalakshmi G&emsp;8531924272</li>
                                              </ul></p>
                                            </div>



                                            <!--<div id="tab_about" class="tab-content">
                                                <h2 class="entry-header">10 years a mission</h2>

                                                <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim.</p>
                                            </div>-->
                                        </div>
                                    </div>
                                </div><!-- col-7 -->


                            </div><!-- row -->
                        </div><!-- entry-content -->
                    </div><!-- col-12 -->
                </div><!-- row elements-wrap -->






            </div><!-- container -->
    </div><!-- main-content -->



        <footer class="site-footer">
            <div class="footer-cover-title flex justify-content-center align-items-center">
                <h2>CIVIL</h2>
            </div><!-- .site-footer -->

            <div class="footer-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="entry-title">
                                <a href="#">SYMPO!</a>
                            </div><!-- entry-title -->

                            <div class="entry-mail">
                                <a href="mailto:help@civilisationceg.in?Subject=Hello%20again" target="_top">help@civilisationceg.in</a>
                            </div><!-- .entry-mail -->

                            <div class="copyright-info">
                                This site is made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" style="color: #7443A1;" target="_blank">Chennai</a>
                            </div><!-- copyright-info -->

                            <div class="footer-social">
                                <ul class="flex justify-content-center align-items-center">
                                    <li><a href="https://fb.com/au.civilisation"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="tel:+91‭8489732365‬"><i class="fa fa-phone fa-rotate-90"></i></a></li>
                                    <li><a href="mailto:help@civilisationceg.in?Subject=Help%20Needed" target="_top"><i class="fa fa-envelope"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-address-book"></i></a></li>-->
                                    <li><a href="https://api.whatsapp.com/send?phone=91‭9092859699‬"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="https://goo.gl/forms/7aUhSw8LaI6rfAn52"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- footer-social -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- footer-content-wrapper -->
        </footer><!-- site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>
