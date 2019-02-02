<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is the official website of Civilisation CEG, a nation level intercollege technical symposium conducted by the Society of Civil Engineers in association with the department of Civil Engineering, College of Engineering Guindy.">
    <meta name="author" content="Ben Stewart S">
    <meta name="keywords" content="civilisation,ceg,symposium,2019,civil,ben stewart">

    <title>Civil Symposium!</title>

    <!--Preloader-->
    <script rel="preload" src='https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.8.0/bodymovin.min.js'></script>
    <script rel="preload" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!--Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>


</head>

<body>
  <div class="preloader-wrapper">
  <div id="preloader">
  </div>
  </div>

    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <img src="images/weblogo.png">
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
                                <li><a href="#home">HOME</a></li>
                                <li><a href="#workshops">WORKSHOPS</a></li>
                                <li><a href="#events">EVENTS</a></li>
                                <li><a href="#lectures">LECTURES</a></li>
                                <li><a href="accomodation.php">ACCOMODATION</a></li>
                                <li><a href="about.php">CONTACT</a></li>
                                <?php
                                // Start the session

                                if(isset($_SESSION["cid"]))
                                {
                                  $print1 .="<li><a href='login.php'>LOGOUT</a></li>";
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

    <div class="hero-content" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-10">
                    <div class="entry-header">
                        <!--<h2>Symposium!</h2>

                        <div class="entry-meta-date">

                        </div><!-- .entry-meta-date -->
                    </div><!-- .entry-header -->


                    <!--<div class="countdown flex flex-wrap justify-content-between" data-date="2018/06/06">
                        <div class="countdown-holder">
                            <div class="dday"></div>
                            <label>Days</label>
                        </div>

                        <div class="countdown-holder">
                            <div class="dhour"></div>
                            <label>Hours</label>
                        </div>

                        <div class="countdown-holder">
                            <div class="dmin"></div>
                            <label>Minutes</label>
                        </div>

                        <div class="countdown-holder">
                            <div class="dsec"></div>
                            <label>Seconds</label>
                        </div>
                    </div><!-- .countdown -->
                </div><!-- .col-12 -->

            </div><!-- row -->

            <!--<div class="row">
                <div class="col-12 ">
                    <div class="entry-footer">
                        <a href="#" class="btn">Buy Tickets</a>
                        <a href="#" class="btn current">See Lineup</a>
                    </div>
                </div>
            </div>-->
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section" id="workshops">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Workshops</h2>
                        </div><!-- entry-title -->

                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                  <center>
                                    <a href="#"> <img src="images/tall buildingsCompressed.jpg" alt=""> </a>
                                  </center>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Tall Structures
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Ensure that the building is able to stand up safely, able to function without excessive deflections or movements which may cause fatigue of structural elements, cracking or failure of fixtures, fittings or partitions, or discomfort for occupants. </p>
                                            <a href="tall-structures.php" target="_blank" class="btn">Register</a>
                                        </div><!-- entry-content -->


                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-image d-md-none">
                                      <center>
                                        <a href="#"> <img src="images/GroundAlterResized.jpg" alt=""> </a>
                                      </center>
                                    </figure><!-- featured-image -->

                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Ground Improvement Techniques
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Force the ground to adopt project requirements by altering the natural state of soil, state of having to alter the design response to the ground natural limitations. Save construction cost and  implementation time.</p>
                                            <a href="ground-improvement-techniques.php" target="_blank" class="btn">Register</a>
                                        </div><!-- entry-content -->


                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->

                                <figure class="featured-image d-none d-md-block">
                                  <center>
                                    <a href="#"> <img src="images/GroundAlterResized.jpg" alt=""> </a>
                                  </center>
                                </figure><!-- featured-image -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                  <center>
                                    <a href="#"> <img src="images/WasteManagementResized.jpg" alt=""> </a>
                                  </center>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Solid Waste Management
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>What direction should India's waste management take? What does the future hold in store? Are landfills the answer? Is Waste-to-energy technology still a good bet? Why segregation is the key?</p>
                                            <a href="solid-waste-management.php" target="_blank" class="btn">Register</a>
                                        </div><!-- entry-content -->


                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->
                        </div><!-- lineup-artists -->
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row" id="events">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Non-Tech Events</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <center>
                                    <a href="corporate-roadies.php" target="_blank"> <img src="images/corporateroadies.jpg" alt="">
                                  </center>
                                    <!--<a href="sample-event-workshop.html" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Corporate Roadies</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="quriosity.php" target="_blank"> <img src="images/Quriosity.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.html" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Quriosity</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="kollyQuiz.php" target="_blank"> <img src="images/kollywoodQuiz.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Kollywood Quiz</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <center>
                                    <a href="cricket.php" target="_blank"> <img src="images/CricketQuiz.jpg" alt="">
                                  </center>
                                    <!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Cricket Quiz</h2></a>
                            </div><!-- artist-single -->



                        <!--<div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>-->
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
          </div>

            <div class="row" id="events-tech">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Tech Events</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">


                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="bridge-battle.php" target="_blank"> <img src="images/BridgeBattle.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Bridge Battle</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="primametry.php" target="_blank"> <img src="images/primmatery.png" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Primametry</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="archibuildo.php" target="_blank"> <img src="images/archibuildo.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>ArchiBuildo</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="confloat.php" target="_blank"> <img src="images/Confloat.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Confloat</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="geowiz.php" target="_blank"> <img src="images/geowiz.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Geowiz</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="paper-presentation.php" target="_blank"> <img src="images/PaperPresentation.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Paper Presentation</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="bob-the-builder.php" target="_blank"> <img src="images/BobTheBuilder.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Bob the Builder</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="walk-in.php" target="_blank"> <img src="images/walkin.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Walk In</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="breaker-of-codes.php" target="_blank"> <img src="images/BreakerOfCode.png" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Breaker of Codes</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="crackTheCause.php" target="_blank"> <img src="images/CrackTheCause.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Crack the Cause</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="posterize.php" target="_blank"> <img src="images/Detour.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Posterize</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="acropolis.php" target="_blank"> <img src="images/acropolis.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Acropolis</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="defacto.php" target="_blank"> <img src="images/defacto.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Defacto</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="EcoQuiz.php" target="_blank"> <img src="images/EcoQuiz.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Eco Quiz</h2></a>
                            </div><!-- artist-single -->



                            <!--<div class="row justify-content-center">
                                <div class="see-complete-lineup">
                                    <div class="entry-footer">
                                        <a href="#" class="btn">See all lineup</a>
                                    </div>
                                </div>
                            </div>-->


                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
          </div>

            <div class="row" id="events-online">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Online Events</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">


                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="poster-designing.php" target="_blank"> <img src="images/posterdesigning.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.php" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Poster Designing</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="draft-decree.php" target="_blank"> <img src="images/Draftdecree.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.html" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure><!-- featured-image -->

                                <h2>Draft Decree</h2></a>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                  <center>
                                  <a href="online-quiz.php" target="_blank"> <img src="images/OnlineQuiz.jpg" alt="">
                                </center><!--<a href="sample-event-workshop.html" target="_blank" class="box-link"> <img src="images/box.jpg" alt=""> </a>-->
                                </figure>

                                <h2>Online Quiz</h2></a>
                            </div><!-- artist-single -->

                        </div><!-- the-complete-lineup-artists -->

                        <!--<div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>-->
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->


        </div><!-- container -->



        <!--<div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <img src="images/button.png" alt="">
                </div>
            </div>
        </div>-->

        <div class="home-page-last-news" id="ambassador">
          <div class="row">
            <div class="container">
              <div class="lineup-artists-headline">
                  <div class="entry-title">
                      <p>JUST THE BEST</p>
                      <h2>Ambassadors</h2>
                  </div><!-- entry-title -->

                  <div class="lineup-artists">
                      <div class="lineup-artists-wrap flex flex-wrap">
                          <figure class="featured-image">
                            <center>
                              <a href="#"> <img src="images/ambassador.png" alt=""> </a>
                            </center>
                          </figure><!-- featured-image -->

                          <div class="lineup-artists-description">
                              <div class="lineup-artists-description-container">
                                  <div class="entry-title">
                                      Ambassador Programme
                                  </div><!-- entry-title -->

                                  <div class="entry-content">
                                      <p>Be a part of the Symposium. Signup, share the referal code with your friends and classmates and get a free ticket to attend all events. The plan is subject to changes. </p>
                                      <a href="ambassador.php" target="_blank" class="btn">Register</a>
                                  </div><!-- entry-content -->
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="lineup-artists">
                              <div class="lineup-artists-wrap flex flex-wrap">
                                  <figure class="featured-image">
                                    <center>
                                      <a href="#"> <img src="images/planning.png" alt=""> </a>
                                    </center>
                                  </figure><!-- featured-image -->

                                  <div class="lineup-artists-description">
                                      <div class="lineup-artists-description-container">
                                          <div class="entry-title">
                                              Project Demonstration
                                          </div><!-- entry-title -->

                                          <div class="entry-content">
                                              <p>You can display your projects during the symposium alongside the very best workshops and events.</p>
                                              <a href="project-submission.php" target="_blank" class="btn">Register</a>
                                          </div><!-- entry-content -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                          <div class="lineup-artists">
                              <div class="lineup-artists-wrap flex flex-wrap">
                                  <figure class="featured-image">
                                    <center>
                                      <a href="#"> <img src="images/home.png" alt=""> </a>
                                    </center>
                                  </figure><!-- featured-image -->

                                  <div class="lineup-artists-description">
                                      <div class="lineup-artists-description-container">
                                          <div class="entry-title">
                                              Accomodation
                                          </div><!-- entry-title -->

                                          <div class="entry-content">
                                              <p>Providing you the best possible stay during the symposium. Register as quickly as possible as we have only a limited number of accomodation slots available.</p>
                                              <a href="accomodation.php" target="_blank" class="btn">Register</a>
                                          </div><!-- entry-content -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </div>
                        <div class="home-page-last-news" id="lectures">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Guest Lectures</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                              <center>
                                <a href="#"> <img src="images/guest-lecture.png" alt="fesival+celebration"> </a>
                              </center>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">TBA</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">Lecture</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> Coming Soon</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">2 hours</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>The guest lecture list will be announced shortly. We are working hard to schedule them to cause the least inconvenience for those who attend the workshops and events.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->





                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>
</div>

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
    <script type='text/javascript' src="js/main.js"></script>
    <script type='text/javascript' src="js/loader.js"></script>

</body>
</html>
