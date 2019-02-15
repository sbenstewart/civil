<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Civil Symposium!</title>

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
                                  $print1 .="<li><a href='logout.php'>LOGOUT</a></li>";
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
                        <h2 class="entry-title">ACCOMMODATION</h2>

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
                            <h2 class="entry-title">Details</h2>
                        </div><!-- entry-header -->

                        <div class="entry-content">
                            <div class="row">
                              <div class="col-12 col-lg-7 mt-5 mt-lg-0">
                                  <div class="tabs">
                                      <ul class="tabs-nav flex">
                                          <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">Details</li>
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Venue</li>
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Rules</li>
                                          <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                                      </ul><!-- tabs-nav -->

                                      <div class="tabs-container">
                                          <div id="tab_details" class="tab-content">
                                              <h2 class="entry-header">Instructions</h2>

                                              <ul>
                                                <li>On reaching the campus, report immediately to the Registration Desk for registration process and if accommodation is needed, approach the accommodation desk.</li>
                                                <li>It is mandatory to bring your college ID card.</li>
                                                <li>At the time of check-in, the caution deposit of Rs.100 should be paid (which will be refunded at the time of check-out)</li>
                                                <li><b><strong>The charge for a day's stay will be Rs.300 (24 hours only).</strong></b></li>
                                                <li>After Accommodation registration and payment of applicable fees, rooms/dormitories will be allotted by the Civilisation 2019 Accommodation team.</li>
                                                <li>During check-out the participants are required to return all the utilities (provided at the time of check-in) in order to redeem their refundable-deposit.</li>
                                                <li>Refund of Caution deposit money will be made at the sole discretion of Civilisation Accommodation team.</li>
                                                <li>No refund will be provided for the cancellation of room.</li>
                                                <li>If the room is not vacated on time, you will have to pay for the next day also.</li>
                                              </ul>
                                          </div>

                                          <div id="tab_venue" class="tab-content">
                                            <h2 class="entry-header">Call for any doubts or queries</h2>
                                            <ul>
                                              <li>Bharath&emsp;8489808900</li>
                                              <li>Muhammad Mukhthar M K&emsp;8903936211</li>
                                              <li>Thamizharasi&emsp;7010413102</li>
                                          </ul>

                                          </div>

                                          <div id="tab_organizers" class="tab-content">
                                              <h2 class="entry-header">Rules to be followed</h2>

                                              <p>
                                                <ul>
                                                  <li>Only non-Chennai participants will be provided accommodation services. Participants must register online for availing our accommodation services.</li>
                                                  <li>Registration for accommodation is not part of the Events registration, and is to be done separately.</li>
                                                  <li>Accommodation services will be available from 6 PM on 3rd March,2019 to 8 PM on 6th march, 2019.</li>
                                                  <li>Accommodation will be provided on a sharing basis. Any requests for individual rooms will not be entertained. However, we will try to accommodate students from the same college together in rooms and dorms (if possible).</li>
                                                  <li>For Boys: Accommodation will be provided inside the campus. Incase there is no availability of space in our campus accommodation will be provided outside the college (i.e., at hotels).</li>
                                                  <li>For Girls: Accommodation will be provided inside the college.</li>
                                                  <li>Services will be offered on "First Register First Serve" basis.</li>
                                                  <li>Accommodated students can have their food at their own expense in canteens and food stalls that are available. Food will not be provided by the Civilisation 2019 team.</li>
                                                  <li>Mattresses and buckets will be provided. However, participants are encouraged to carry their own blankets since it is the month of March and nights might be cold.</li>
                                                  <li>Random checks will be made to avoid any illegal stay in the campus. Any participant failing to produce his/her Accommodation Receipt will be fined and disqualified.</li>
                                                  <li>Participants are responsible for their belongings during their stay. Neither the Civilisation,2019 Accommodation team nor the institute will take responsibility for any loss of property incurred.</li>
                                                  <li>Girls in-time is 8.30 PM.</li>
                                                  <li>Accommodation team has the right to cancel or wait-list accommodation while processing your request.</li>
                                                  <li>Smoking and drinking is strictly prohibited inside the Accommodation site.</li>
                                                  <li>Any act of misbehaviour inside the campus will be severely dealt with, leading to the immediate expulsion of the team (in question) from the campus and cancellation of registration.</li>
                                                  <li>Any damage caused by the participants to institute property during their stay will result in forfeiture of the caution deposit and/or recovery of the amount due to the damage (whichever is higher)</li>
                                                </ul>
                                              </p>
                                          </div>

                                          <div id="tab_about" class="tab-content">
                                              <h2 class="entry-header">Registration</h2>
                                              <p>Click the button below to register.</p>
                                              <?php
                                              // Start the session

                                              if(isset($_SESSION["cid"]))
                                              {
                                                $print2 .="<div><p><b><strong>You are currently logged in as ".$_SESSION["name"]."</strong></b></p></div>";
                                              }
                                              echo  $print2;
                                              ?>
                                              <div class="entry-content flex">
                                                  <a href="accomodation-signup.php" class="btn gradient flex justify-content-center align-items-center">Register</a>
                                                  <!--<a href="#" class="btn white flex justify-content-center align-items-center">Load More</a>
                                                  <a href="#" class="btn border-blu flex justify-content-center align-items-center">Load More</a>
                                                  <a href="#" class="btn color-border flex justify-content-center align-items-center">Load More</a>-->
                                              </div>
                                              <br>
                                              <h2 class="entry-header">TO REACH CEG</h2>
                                              <ol>
                                                <li>FROM CHENNAI CENTRAL:
                                                  <ul>
                                                          <li>By Bus<br>
                                                          Board 19G opposite to the railway station and ask for Anna University/Gandhi Mandapam.
                                                          This bus is not that frequent.
                                                          Board PP21(during 4 am to 7 am) at the bus stop just outside the railway station and ask for
                                                          Anna University/Gandhi Mandapam. This bus is of very low frequency.
                                                          Board 15B,15G,15F at the central bus stop and reach Broadway Bus Stand. Board 21G (or)
                                                          21L from Broadway to Anna University. The buses are very frequent here and it is the
                                                          recommended mode of reaching the University from Central.
                                                          </li>
                                                          <li>By Train<br>
                                                          There is no direct train to Anna University. You have to reach Guindy and then board a bus
                                                          to Anna University.
                                                          Trains to Guindy depart from the Park Railway Station opposite to the Chennai Central
                                                          Railway Station.
                                                          Step out of the Guindy Railway Station (by taking a right in the crossover meant for
                                                          pedestrians) and cross the road using the subway. Right near the subway you’ll find a lane
                                                          towards the right side wherein you can find the bus stop. Board M21G, 21G, PP21, M19,
                                                          M49, 54F, 577, 549,T70 and get down at Anna University.
                                                          You’ll also find share autos to Anna University near the subway which would cost you Rs.
                                                          20.
                                                          You can also board the MRTS (Flying train) from the Park Town which is adjacent to
                                                          government hospital and alight at Kasturibai Nagar Railway Station from where you can get a
                                                          Share auto or a bus next to the Madhya Kailash Temple outside the Kasturibai Nagar station
                                                          to Anna University. (Kindly note PARK is different from PARK TOWN)
                                                          </li>
                                                          <li>By Auto/Taxi<br>
                                                          In case you have too much luggage, try Auto or Taxi. You can also avail the facility of
                                                          prepaid auto service .The fare will be around Rs.160.
                                                          State the destination as “Anna University Kotturpuram Gate.
                                                          </li>
                                                    </ul>
                                                </li>
                                                <li>FROM EGMORE RAILWAY STATION:
                                                  <ul>
                                                          <li>By Bus<br>
                                                          In Egmore, near Pantheon Road and Haals Road junction, you can get 23C and the
                                                          frequency of this bus is high. Travel time might be 45-50 minutes.
                                                          </li>
                                                          <li>By Train<br>
                                                          You can take Electric train to Guindy. Step out of the Guindy Railway Station (by taking a
                                                          right in the crossover meant for pedestrians) and cross the road using the subway. Right near
                                                          the subway you’ll find a lane towards the right side wherein you can find the bus stop. Board
                                                          M21G, 21G, PP21, M19, M49, 54F, 577, 549 and get down at Anna University.
                                                          You’ll also find share autos to Anna University near the subway which would cost you Rs.20.
                                                          </li>
                                                          <li>By Auto/Taxi<br>
                                                            The auto fare will be approximately Rs 120. Fix the rate before boarding.
                                                            There is no prepaid auto service at Egmore station.
                                                          </li>
                                                    </ul>
                                                </li>

                                                <li>FROM KOYAMBEDU/CMBT:
                                                  <ul>
                                                          <li>CMBT expands as Chennai Moffusil Bus Terminus. Lot of buses are available either directly to Anna University or indirectly via T. Nagar or Guindy.</li>
                                                          <li>Board bus 23M, PP49, T70, and 149 which are direct to Anna University. These buses are not so frequent.</li>
                                                          <li>Board bus to T.Nagar (27C, M27) and from there get 5B, 19C, 19B, 47 , 47A , 47D to Anna University.</li>
                                                          <li>You can use metro to travel Guindy from Koyambedu, it takes only 15 minutes.</li>
                                                          <li>Board bus to Guindy(M70, M70D, B70, C70, D70, M170C, 170C) and then board buses are M21G, 21G, PP21, M19, M49, 54F, 577, 549 from Guindy to Anna University. Or you can take a share auto to Anna University from Guindy bus stop which you can pay only 20 rupees. . This is most recommended buses since these buses are very frequent.</li>
                                                    </ul>
                                                </li>

                                                <li>FROM PERUNGULATHUR:
                                                  <ul>
                                                          <li>For persons from southern districts of Tamil Nadu, since the buses take the Bypass road to CMBT after 6 am, you cannot get down at the kathipara junction.</li>
                                                          <li>Rather you can get down at Perungalathur and board 577 or PP21 to Anna University. These buses are not frequent.</li>
                                                          <li>You can travel to guindy from the perungalathur by using this buses which are 549,M79.these are the buses to Guindy from Perangalathur.</li>
                                                          <li>You may also take a train to Guindy from the Perungalathur junction just behind the bus stop and and then board M21G, 21G, PP21, M19, M49, 54F, 577, 549 from Guindy to Anna University. Or you can take a share auto from Guindy bus stop to Anna University which would cost you Rs. 20.</li>
                                                  </ul>
                                                </li>

                                                <li>FROM KATHIPARA JUNCTION:
                                                  <ul>
                                                          <li>Persons coming from southern districts of Tamil Nadu can get down at Kathipara Junction, if your bus doesn’t take the bypass road before tambaram.</li>
                                                          <li>Board 21G, PP21 to Anna University. This is the recommended way.</li>
                                                          <li>Board any bus to Guindy (next stop) and catch M21G, 21G, PP21, M19, M49, 54F, 577, and 549 to Anna University. Or you can take a share auto to Anna University which would cost you Rs. 20.</li>
                                                  </ul>
                                                </li>


                                              </div>
                                      </div>
                                  </div>
                              </div><!-- col-7 -->



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

                <div class="row elements-wrap">
                    <div class="col-12">



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
