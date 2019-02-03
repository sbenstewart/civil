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
                            <h2 class="entry-title">Paper Presentation</h2>
                        </div><!-- entry-header -->

                        <div class="entry-content">
                            <div class="row">
                              <div class="col-12 col-lg-7 mt-5 mt-lg-0">
                                  <div class="tabs">
                                      <ul class="tabs-nav flex">
                                          <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">Details</li>
                                          <!--<li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>-->
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizers</li>
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                                      </ul><!-- tabs-nav -->

                                      <div class="tabs-container">
                                          <div id="tab_details" class="tab-content">

                                              <p><strong><b>“If you’ve got an idea,<br> start it today .”<br>
                                                &emsp;&emsp;&emsp;&emsp;- Kevin Systrom ( founder of Instagram) </b></strong>
                                                <br>
                                                <br>
                                                Civil Engineers work in an intellectually demanding field that requires the ability to think logically and creatively. If you are someone who could persuade others with your speech, here is a platform to exhibit your technical know-how . Participate in this event and showcase your talents.
                                            <br>  </p>
                                            <h2 class="entry-header">TOPIC:</h2>
                                            <ul>
                                            <li>
                                              Open topic related to civil engineering
                                            </li>
                                            </ul>
                                            <br>
                                            <h2 class="entry-header">FORMAT:</h2>
                                            <ol>
                                              <li>PRESENTATION:
                                                <ul>
                                                  <li>The presentation time is for 8 mins and queries for 2 mins for each other.</li>
                                                  <li>Candidates should bring their identity card at the time of presentation.</li>
                                                  <li>Maximum two participants per team.</li>
                                                  <li>Presenter should be in their formal attire during the presentation.</li>
                                                </ul>
                                              </li>
                                              <li>PAPER SUBMISSION:
                                                <ul>
                                                  <li>The softcopy of the abstract should be submitted to paperpresentation.c19@gmail.com on or before Feb22,2019.</li>
                                                  <li>Working models, samples fetch you extra points.</li>
                                                  <li>Candidates should  bring hard copy and soft copy of the paper at the time of presentation.</li>
                                                  <li>Bring your soft copies in pendrive.</li>
                                                  <li>Judgement criteria : Based on the presentation, marks will be awarded to the teams.</li>
                                                </ul>
                                              </li>

                                            </ol>
                                            <h2 class="entry-header">RULES:</h2>
                                            <ol>
                                              <li>Civilization 19 ID is mandatory</li>
                                              <li>ID card is mandatory.</li>
                                              <li>Decision of the judges will be final and will not be subjected to further any discussion.</li>
                                              <li>Registration required.</li>
                                            </ol>



                                          </div>

                                          <!--<div id="tab_venue" class="tab-content">
                                              <h2 class="entry-header">10 years a mission</h2>

                                              <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim.</p>
                                          </div>-->

                                          <div id="tab_organizers" class="tab-content">
                                              <h2 class="entry-header">Call for any doubts or queries</h2>

                                              <ul>
                                                <li>	Govardhini&emsp;9994202202</li>
                                                <li>	Gopika&emsp;9952079512</li>
                                                <li>	Pavithra&emsp;9566801260</li>
                                            </ul>
                                          </div>

                                          <div id="tab_about" class="tab-content">
                                            <h2 class="entry-header">Click the button below to register.</h2>
                                            <p>If you have registered for any one event, you can also attend all the events conducted during the symposium. This registration entitiles you to attend all the technical and non-technical events.</p>
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
                                        <h3 class="entry-title active flex justify-content-between">Question1?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus.</p>
                                        </div>

                                        <h3 class="entry-title flex justify-content-between">Question2?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus.</p>
                                        </div>

                                        <h3 class="entry-title flex justify-content-between">Question3?<span class="arrow-r"></span></h3>

                                        <div class="entry-content">
                                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus.</p>
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
