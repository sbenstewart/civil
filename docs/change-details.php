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
<body class="contact-page">
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
                            <li><a href="#workshops">WORKSHOPS</a></li>
                            <li><a href="#events">EVENTS</a></li>
                            <li><a href="#lectures">LECTURES</a></li>
                            <li><a href="accomodation.php">ACCOMMODATION</a></li>
                            <li><a href="about.php">CONTACT</a></li>
                            <li class="d-lg-none"><a href="signup.php">LOGIN</a></li>
                            <?php
                            // Start the session

                            if(isset($_SESSION["cid"]))
                            {
                                $print1 .='<li class="d-lg-none"><a href="signup.php">LOGOUT</a></li>';
                            }
                            else {
                                $print1 .='<li class="d-lg-none"><a href="signup.php">LOGIN</a></li>';
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
                                $print1 .='<a class="btn gradient-bg" href="signup.php">LOGOUT</a>';
                            }
                            else {
                                $print1 .='<a class="btn gradient-bg" href="signup.php">LOGIN</a>';
                            }
                            echo  $print1;
                            ?>


                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Edit.</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->



<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="contact-form">
                <form class="row">

                    <div class="col-12">
                        <input type="number" placeholder="Your cid (Required)" id="cid">
                    </div><!-- col-4 -->

                    <div class="col-12">
                        <input type="email" placeholder="Your email (Required)" id="mail">
                    </div><!-- col-6 -->

                      <div class="col-12">
                          <input type="text" placeholder="Your name" id="name">
                      </div><!-- col-4 -->

                      <div class="col-12">
                          <input type="text" placeholder="Phone number - Ten digits only" id="phone">
                      </div>



                      <div class="col-12">
                          <input type="text" placeholder="College" id="college">
                      </div><!-- col-6 -->

                      <div class="col-12">
                      <select id="course">
                        <option value="">Select your course</option>
                        <option value="B.E.">B.E.</option>
                        <option value="M.E.">M.E.</option>
                        <option value="Research Scholar">Research Scholar</option>
                        <option value="Other">Other</option>
                      </select>
                      </div>


                      <div class="col-12">
                      <select id="year">
                        <option value="">Select your year</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      </div>


                      <div class="col-12">
                          <input type="text" placeholder="Department" id="dept">
                      </div><!-- col-6 -->

                      <div class="col-12">
                          <input type="text" placeholder="Referal code (optional)" id="code">
                      </div><!-- col-6 -->



                      <div class="col-12 submit flex justify-content-center">
                        <input type='button' onclick='editUser()' name='' value='Change' class='btn gradient-bg flex justify-content-center align-items-center'>
                       <!-- <?php
                        // Start the session

                        if(isset($_SESSION["cid"]))
                        {
                          $print2 .="<input type='button' onclick='editUser()' name='' value='Change' class='btn'>";
                        }
                        else {
                          $print2 .="<a href='login.php'><input type='button' name='' value='Login' class='btn'></a>";
                        }
                        echo  $print2;
                        ?> -->

                      </div>

                    
                    <div class="col-12 submit flex justify-content-center">
                        <a href="accomodation-signup.php" class="btn gradient flex justify-content-center align-items-center">Click here after signup for accomodation.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>

                <nav class="footer-navigation">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>

                Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>

                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
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