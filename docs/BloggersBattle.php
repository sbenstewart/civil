<?php session_start(); ?>
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
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

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
                                <li><a href="Projectdisplay.php">PROJECTS</a></li>
                                <li><a href="about.php">ABOUT</a></li>
                                <?php
                                // Start the session

                                if (isset($_SESSION["cid"])) {
                                    $print1 = '<li class="d-lg-none"><a href="php/logout.php">LOGOUT</a></li>';
                                } else {
                                    $print1 = '<li class="d-lg-none"><a href="login.php">LOGIN</a></li>';
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

                            if (isset($_SESSION["cid"])) {
                                $print1 = '<a class="btn gradient-bg" href="php/logout.php">LOGOUT</a>';
                            } else {
                                $print1 = '<a class="btn gradient-bg" href="login.php">LOGIN</a>';
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
                            <h1 class="entry-title">BLOGGERS’ BATTLE</h1>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .site-header -->

    <div class="container mb-5">

        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="tabs-nav flex">
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organisers</li>
                    </ul>

                    <div class="tabs-container">
                        <div id="tab_details" class="tab-content">


                            <p>
                                <strong>"If you want to change the world, pick up your pen and write." - Martin Luther King </strong><br />
                                The mode of writing has changed a lot over years, but not the writing itself. Come and make a change by your way of penning down!
                            </p>
                            <h2 class="entry-header">FORMAT:</h2>

                            <ol>
                                <li>Essays should be mailed in PDF format to the e-mail address: <a href="mailto:civilisceg@gmail.com"> civilisceg@gmail.com </a></li>
                                <li>The blog should be mailed with the subject name <b>"blog topic name".</b></li>
                                <li>The mail should contain the Name, Register number, Branch name and contact details of the Participant.</li>
                                <li>Deadline for the submission of articles : 28/02/2020 (Friday) </li>
                            </ol>




                            <h2 class="entry-header">RULES:</h2>
                            <ul>
                                <li>Plagiarism is strictly not encouraged. Any kind of plagiarism will make you disqualified for the competition.</li>
                                <li>Late submissions will not be accepted.</li>
                                <li>Only one submission per person is allowed.</li>
                                <li>The participants can be from any department.</li>
                                <li>Decision of the Jury will be final and binding.</li>
                                <li>The blog topics should be one of the topics enlisted in the website (<a href='https://civilisceg.wordpress.com/'>civilisceg.wordpress.com</a>).</li>
                                <li>Word count: 1000 to 1500 words.</li>

                            </ul>
                            <p>The winning participant will be awarded in the valediction ceremony. It is mandatory for the winning participant.</p>
                           <!-- <h2 class="entry-header">Prize :</h2>
                            <ul>
                                <dl>
                                    <dd>
                                        <li><dt>1st Prize : <strong>2000 INR</strong></li>
                                        <li><dt>2nd Prize : <strong>1500 INR</strong></li>
                                </dl>
                            </ul> -->

                            <h2 class="entry-header">BENEFITS:</h2>
                            <p>The beta articles under each topic will be published in the official e-magazine of the Department of Civil Engineering 'CIVILIS'.</p>
                           

                        </div>

                        <div id="tab_organizers" class="tab-content">
                            <h2 class="entry-header">Contact:</h2>
                            <ul>
                                <div class="row">
                                    <div class="col-2">
                                            <li>Shreenidhi<br>9790810518</li> 
                                            <li>Ishwrya<br>7598404668</li> 
                                    </div>            
                                </div>
                            </ul>
                            <p>Mail your entries to <a href="mailto:civilisceg@gmail.com">civilisceg@gmail.com</a></p>
                            <p>Mail your queries to <a href="mailto:eventsc2020@gmail.com">eventsc2020@gmail.com</a></p>

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
                        <a href="#">
                            <p class="entry-title">Civilisation 2020</p>
                        </a>
                    </figure>

                    <nav class="footer-navigation">
                        <ul class="flex flex-wrap justify-content-center align-items-center">
                            <li><a href="#workshops">WORKSHOPS</a></li>
                            <li><a href="#events">EVENTS</a></li>
                            <li><a href="#lectures">LECTURES</a></li>
                            <li><a href="Projectdisplay.php">PROJECTS</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                        </ul>
                    </nav>

                    Made with <i class="fa fa-heart" aria-hidden="true"></i> in <a href="https://www.google.com/maps/place/College+of+Engineering,+Guindy/@13.0169607,80.2036514,13z/data=!4m5!3m4!1s0x3a52679f0d20f797:0x59f9f10c66e02a19!8m2!3d13.01094!4d80.2354462" target="_blank">Chennai</a>
                    <div class="footer-social">
                        <ul class="flex flex-wrap justify-content-center align-items-center">
                            <li><a href="https://fb.com/au.civilisation"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/civilisation_20"><i class="fa fa-instagram"></i></a></li>
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
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z" /></svg></span>
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
