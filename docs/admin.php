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

<body class="contact-page">
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
                                <li><a href="admin-login.php">ADMIN LOGIN</a></li>



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
                        <h2 class="entry-title">Admin</h2>

                        <!--<ul class="breadcrumbs flex align-items-center">
                            <li><a href="#">Home</a></li>
                            <li>Contact</li>
                        </ul><!-- .breadcrumbs -->
                    </div><!-- entry-header -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page-header -->

    <div class="container">
        <div class="main-content">
            <!--<div class="contact-page-map">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div><!-- map -->

            <!--<div class="contact-details">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/phone.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Phone
                                    </div>
                                    <div class="entry-content">
                                        +45 677 8993000 223
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/mail.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        E-mail
                                    </div>
                                    <div class="entry-content">
                                        office@template.com
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-lg-0">
                            <div class="contact-medium flex align-items-center">
                                <figure class="contact-icon">
                                    <img src="images/place.jpg" alt="phone icon">
                                </figure>

                                <div class="contact-content">
                                    <div class="entry-title">
                                        Address
                                    </div>
                                    <div class="entry-content">
                                        Main Str. no 45-46, b3, 56832,<br>
                                        Los Angeles, CA
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->
                </div>
            </div><!-- contact-details -->

            <div class="get-in-touch">
                <!--<div class="entry-header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Get in touch</h2>
                    </div>
                </div>

                <div class="entry-content">
                    <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus.
                        Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                        Integer accumsan sodales odio, id tempus velit ullamcorper id.</p>
                </div>-->

                <div class="contact-form">
                    <div class="row">
                        <!--<div class="col-12">
                            <input type="text" placeholder="Your name" id="name">
                        </div>

                        <div class="col-12">
                            <input type="text" placeholder="Phone number - Ten digits only" id="phone">
                        </div>

                        <div class="col-12">
                            <input type="email" placeholder="Your email" id="mail">
                        </div>-->

                        <form action="download-registrations.php" method="post">
                        <div class="col-12 submit  flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print102 .="<input type='submit' name='sample' value='Registrations' class='btn'>";
                          }
                          echo  $print102;
                          ?>
                        </div>
                        </form>



                        <form action="download-tall-structures.php" method="post">
                        <div class="col-12 submit  flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print2 .="<input type='submit' name='sample' value='Tall Structures' class='btn'>";
                          }
                          echo  $print2;
                          ?>
                        </div>
                        </form>

                        <form action="download-solid-waste.php" method="post">
                        <div class="col-12 submit  flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print3 .="<input type='submit' name='sample' value='Solid Waste Management' class='btn'>";
                          }
                          echo  $print3;
                          ?>
                        </div>
                        </form>

                        <form action="download-ground-improvement.php" method="post">
                        <div class="col-12 submit  flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print4 .="<input type='submit' name='sample' value='Ground Improvement' class='btn'>";
                          }
                          echo  $print4;
                          ?>
                        </div>
                        </form>

                        <form action="download-event.php" method="post">
                        <div class="col-12 submit  flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print5 .="<input type='submit' name='sample' value='Event list download button' class='btn'>";
                          }
                          echo  $print5;
                          ?>
                        </div>
                        </form>
                        <form action="download-accomodation.php" method="post">
                        <div class="col-12 submit flex justify-content-center">
                          <?php

                          if(isset($_SESSION["admin"]))
                          {
                            $print6 .="<input type='submit' name='sample' value='Accomodation list download button' class='btn'>";
                          }
                          echo  $print6;
                          ?>
                        </div>
                      </form>
                      <form action="download-ambassador.php" method="post">
                      <div class="col-12 submit flex justify-content-center">
                        <?php

                        if(isset($_SESSION["admin"]))
                        {
                          $print7 .="<input type='submit' name='sample' value='Ambassador list download button' class='btn'>";
                        }
                        echo  $print7;
                        ?>
                      </div>
                    </form>


                    </div><!-- row -->
                </div><!-- contact-form -->
            </div><!-- newsletter-subscribe -->
        </div><!-- main-content -->
    </div><!-- container -->

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
