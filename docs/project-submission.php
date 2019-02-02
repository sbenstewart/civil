<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-header">

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

                <div class="row elements-wrap">
                    <div class="col-12 accordion-and-tabs-wrap">
                        <div class="entry-header">
                            <h2 class="entry-title">Project Display</h2>
                        </div><!-- entry-header -->

                        <div class="entry-content">
                            <div class="row">
                              <div class="col-12 col-lg-7 mt-5 mt-lg-0">
                                  <div class="tabs">
                                      <ul class="tabs-nav flex">
                                          <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">Details</li>
                                          <!--<li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>-->
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li>
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Registration</li>
                                      </ul><!-- tabs-nav -->

                                      <div class="tabs-container">
                                          <div id="tab_details" class="tab-content">

                                              <h2 class="entry-header">TOPIC:</h2>
                                              <p>Innovative projects related to Civil Engineering.</p>

                                                <h2 class="entry-header">FORMAT:</h2>
                                                <ol>
                                                  <li>In morning session, the project should be displayed with the working models and in afternoon session the presentation should be done for your project.</li>
                                                  <li>Working model is mandatory.</li>
                                                  <li>The softcopy of the abstract should be submitted to projectdisplay.c19@gmail.com on or before February 22,2019.You will receive a acknowledgment mail, if you are selected.</li>
                                                  <li>The presentation time per team is 20 minutes.</li>
                                                  <li>Maximum four participants per team.</li>
                                                </ol>
                                                <h2 class="entry-header">RULES:</h2>
                                                <ol>
                                                  <li>College ID card is mandatory.</li>
                                                  <li>Decision of judges will be final and will not be subjected to further any discussion.</li>
                                                </ol>




                                          </div>

                                          <!--<div id="tab_venue" class="tab-content">
                                              <h2 class="entry-header">10 years a mission</h2>

                                              <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim.</p>
                                          </div>-->

                                          <div id="tab_organizers" class="tab-content">
                                              <h2 class="entry-header">Call for any doubts or queries</h2>

                                              <ul>
                                                <li>Nivaitha&emsp;8754712634</li>
                                                <li>Senthamizhselvi&emsp;8248176795</li>
                                            </ul>
                                          </div>

                                          <div id="tab_about" class="tab-content">
                                            <h2 class="entry-header">Click the button below to register.</h2>
                                            <p>If you have registered for any workshop, you can attend all the events conducted for the symposium. The registration entitiles you to attend all the technical and non-technical events.</p>
                                            <?php
                                            // Start the session

                                            if(isset($_SESSION["cid"]))
                                            {
                                              $print2 .="<div><p><b><strong>You are currently logged in as ".$_SESSION["name"]."</strong></b></p></div>";
                                            }
                                            else {
                                              $print2 .="<p><b><strong>You must be logged in to register online or onsite.</strong></b></p>";
                                            }
                                            echo  $print2;
                                            ?>


                                              <form id="registration" class="entry-content">

                                              <!--<div class="entry-content flex">-->
                                                  <input type="hidden" value="EVENTS" id="event" />
                                                  <input class="btn gradient flex justify-content-center align-items-center" type="button" onclick="regEvent()" value="Pay OnSite"></input>
                                                  <br>

                                                  <?php
                                                  // Start the session

                                                  if(isset($_SESSION["cid"]))
                                                  {
                                                    $print .="<div><a href='https://www.townscript.com/e/events-232334'><input class='btn gradient flex justify-content-center align-items-center' type='button'  value='Pay and Register'></input></a></div>";
                                                  }
                                                  else {
                                                    $print .="<div><a href='login.php'><input class='btn gradient flex justify-content-center align-items-center' type='button'  value='Pay and Register'></input></a></div>";
                                                  }
                                                  echo  $print;
                                                  ?>
                                                  <!--<a href="#" class="btn white flex justify-content-center align-items-center">Load More</a>
                                                  <a href="#" class="btn border-blu flex justify-content-center align-items-center">Load More</a>
                                                  <a href="#" class="btn color-border flex justify-content-center align-items-center">Load More</a>-->
                                              <!--</div>-->
                                              </form>

                                              </div>
                                      </div>
                                  </div>
                              </div><!-- col-7 -->
                                <!--<div class="col-12 col-lg-5">
                                    <div class="accordion-wrap type-accordion">
                                        <h3 class="entry-title active flex justify-content-between">How do we register for the event?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>There will be online registration for CIVILISATION’19. The participant must include the registration number of CIVILISATION’19 in the drawing file failing which the team will be disqualified.</p>
                                        </div>

                                        <h3 class="entry-title flex justify-content-between">How many members can be there in a team?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>The team can comprise of a minimum of 2-3 members.</p>
                                        </div>

                                        <h3 class="entry-title flex justify-content-between">Can a team have members of different college?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>No, a team cannot have members from a different college.</p>
                                        </div>
                                        <h3 class="entry-title flex justify-content-between">Will I get a certificate?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>Top 2 teams will receive cash prize and certificate of merit.</p>
                                        </div>
                                    </div>
                                </div><!-- col-5 -->


                            </div><!-- row -->
                        </div><!-- entry-content -->
                    </div><!-- col-12 -->
                </div><!-- row elements-wrap -->

                <div class="row elements-wrap">
                    <!--<div class="col-12">
                        <div class="entry-header">
                            <h2 class="entry-title">Milestones</h2>
                        </div>

                        <div class="milestones">
                            <div class="row flex flex-wrap justify-content-between">
                                <div class="d-col-n mt-5 mt-lg-0">
                                    <div class="counter-box">
                                        <div class="flex justify-content-center">
                                            <div class="start-counter" data-to="390" data-speed="2000"></div>
                                        </div>

                                        <h3 class="entry-title">Hours of Music</h3>
                                    </div>
                                </div>

                                <div class="d-col-n mt-5 mt-lg-0">
                                    <div class="counter-box">
                                        <div class="flex justify-content-center">
                                            <div class="start-counter" data-to="68" data-speed="2000"></div>
                                        </div>

                                        <h3 class="entry-title">DJ's Playing</h3>
                                    </div>
                                </div>

                                <div class="d-col-n mt-5 mt-lg-0">
                                    <div class="counter-box">
                                        <div class="flex justify-content-center">
                                            <div class="start-counter" data-to="120" data-speed="2000"></div>
                                            <div class="counter-k">K</div>
                                        </div>

                                        <h3 class="entry-title">Visitors</h3>
                                    </div>
                                </div>

                                <div class="d-col-n mt-5 mt-lg-0">
                                    <div class="counter-box">
                                        <div class="flex justify-content-center">
                                            <div class="start-counter" data-to="8" data-speed="2000"></div>
                                        </div>

                                        <h3 class="entry-title">Stages</h3>
                                    </div>
                                </div>

                                <div class="d-col-n mt-5 mt-lg-0">
                                    <div class="counter-box">
                                        <div class="flex justify-content-center">
                                            <div class="start-counter" data-to="325" data-speed="2000"></div>
                                            <div class="counter-k">K</div>
                                        </div>

                                        <h3 class="entry-title">Followers</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-12 -->
                    <div class="row elements-wrap">
                    <!--    <div class="col-12 buttons-wrap">
                            <div class="entry-header">
                                <h2 class="entry-title">Buttons</h2>
                            </div>

                            <div class="entry-content flex">
                                <a href="#" class="btn gradient flex justify-content-center align-items-center">Load More</a>
                                <a href="#" class="btn white flex justify-content-center align-items-center">Load More</a>
                                <a href="#" class="btn border-blu flex justify-content-center align-items-center">Load More</a>
                                <a href="#" class="btn color-border flex justify-content-center align-items-center">Load More</a>
                            </div>
                        </div>-->
                    </div><!-- row elements-wrap -->

                </div><!-- row elements-wrap -->

                <!--<div class="row elements-wrap">
                    <div class="col-12">
                        <div class="entry-header">
                            <h2 class="entry-title">Loaders</h2>
                        </div>

                        <div class="entry-content elements-container">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="circular-progress-bar">
                                        <div class="circle" id="hard_work">
                                            <strong></strong>
                                            <h3 class="entry-title">Hard Work</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="circular-progress-bar">
                                        <div class="circle" id="good_music">
                                            <strong></strong>
                                            <h3 class="entry-title">Good Music</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="circular-progress-bar">
                                        <div class="circle" id="power">
                                            <strong></strong>
                                            <h3 class="entry-title">Power</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="circular-progress-bar">
                                        <div class="circle" id="fun_time">
                                            <strong></strong>
                                            <h3 class="entry-title">Fun times</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script type='text/javascript' src='js/main.js'></script>
</body>
</html>
