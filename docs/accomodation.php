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
                        <h1 class="entry-title">Accommodation</h1>
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
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Organisers</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Rules</li>
                    <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_about">Register</li>
                </ul>

                <div class="tabs-container">
                    <div id="tab_details" class="tab-content">

                        <h2 class="entry-header">Instructions</h2>
                        <ul>
                        <li>On reaching the campus, report immediately to the Registration Desk for registration process and if accommodation is needed, approach the accommodation desk.</li>
                        <li>It is mandatory to bring your College ID.</li>
                        <li>At the time of check-in, the caution deposit of Rs.100 should be paid (which will be refunded at the time of check-out)</li>
                        <li><strong>The charge for a day's stay will be Rs.200 (24 hours only).</strong></li>
                        <li>After Accommodation registration and payment of applicable fees, rooms/dormitories will be allotted by the Civilisation 2020 Accommodation team.</li>
                        <li>During check-out the participants are required to return all the utilities (provided at the time of check-in) in order to redeem their refundable-deposit.</li>
                        <li>Refund of Caution deposit money will be made at the sole discretion of Civilisation Accommodation team.</li>
                        <li>If the room is not vacated on time, you will have to pay for the next day also.</li>
                        </ul>
                    </div>

                    <div id="tab_venue" class="tab-content">

                        <div class="flex flex-wrap justify-content-between">
                            <div class="single-event-details">

                                <div class="single-event-details-row">
                                    <label>Price:</label>
                                    <p>Rs. 200 per day</p>
                                </div>

                                <div class="single-event-details-row">
                                    <label>Contact:</label>
                                    <ul>
                                        <li>Bharath<br>8489808900</li>
                                        <li>Muhammad Mukhthar M K<br>8903936211</li>
                                        <li>Thamizharasi<br>7010413102</li>
                                    </ul>
                                </div>

                            </div>

                            <div class="single-event-map">
                                <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15549.298267114855!2d80.2387098!3d13.0149915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x937189c596205078!2sCEG%20Hostels!5e0!3m2!1sen!2sin!4v1577168574013!5m2!1sen!2sin" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div id="tab_organizers" class="tab-content">
                        <h2 class="entry-header">Rules to be followed</h2>

                                              <p>
                                                <ul>
                                                  <li>Only non-Chennai participants will be provided accommodation services. Participants must register online for availing our accommodation services.</li>
                                                  <li>Registration for accommodation is not part of the Events registration, and is to be done separately.</li>
                                                  <li>Accommodation services will be available from 6 PM on 4<sup>th</sup> March, 2020 to 8 PM on 7<sup>th</sup> March, 2020.</li>
                                                  <li>Accommodation will be provided on a sharing basis. Any requests for individual rooms will not be entertained. However, we will try to accommodate students from the same college together in rooms and dorms (if possible).</li>
                                                  <li>For Boys: Accommodation will be provided inside the campus. Incase there is no availability of space in our campus accommodation will be provided outside the college (i.e., at hotels).</li>
                                                  <li>For Girls: Accommodation will be provided inside the college.</li>
                                                  <li>Services will be offered on "First Register First Serve" basis.</li>
                                                  <li>Accommodated students can have their food at their own expense in canteens and food stalls that are available. Food will not be provided by the Civilisation 2020 team.</li>
                                                  <li>Mattresses and buckets will be provided. However, participants are encouraged to carry their own blankets since it is the month of March and nights might be cold.</li>
                                                  <li>Random checks will be made to avoid any illegal stay in the campus. Any participant failing to produce his/her Accommodation Receipt will be fined and disqualified.</li>
                                                  <li>Participants are responsible for their belongings during their stay. Neither the Civilisation'20 Accommodation team nor the institute will take responsibility for any loss of property incurred.</li>
                                                  <li>Girls in-time is 8.30 PM. Boys in-time is 9.30 PM.</li>
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
                            $print2 ="<p><strong>You are currently logged in as ".$_SESSION["name"]."</strong></p>";
                            }
                            echo  $print2;
                        ?>
                        <div class="entry-content flex">
                            <a href="accomodation-signup.php" class="btn gradient-bg flex justify-content-center align-items-center">Register</a>
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
                                    State the destination as "Anna University Kotturpuram Gate.
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
                                    There is no prepaid auto service at Egmore station.<br>
                                    Ola and Uber services will also be available.
                                    </li>
                            </ul>
                        </li>

                        <li>FROM KOYAMBEDU/CMBT:
                            <ul>
                                    <li>CMBT expands as Chennai Moffusil Bus Terminus. Lot of buses are available either directly to Anna University or indirectly via T. Nagar or Guindy.</li>
                                    <li>Board bus 23M, PP49, T70, and 149 which are direct to Anna University. These buses are not so frequent.</li>
                                    <li>Board bus to T.Nagar (27C, M27) and from there get 5B, 19C, 19B, 47 , 47A , 47D to Anna University.</li>
                                    <li>You can use metro to travel Guindy from Koyambedu, it takes only 15 minutes.</li>
                                    <li>Board bus to Guindy(M70, M70D, B70, C70, D70, M170C, 170C) and then board buses are M21G, 21G, PP21, M19, M49, 54F, 577, 549 from Guindy to Anna University. Or you can take a share auto to Anna University from Guindy bus stop which you can pay only 20 rupees. This is most recommended buses since these buses are very frequent.</li>
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
                        </ol>
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
