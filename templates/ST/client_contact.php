<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    body { padding-top: 70px; }
    .jumbotron {
      color: #2c3e50;
      background: #ecf0f1;

    }
    .navbar-inverse {
      background: #2c3e50;
      color: white;
    }
    .navbar-inverse .navbar-brand, .navbar-inverse a{
      color:white;
    }
    .navbar-inverse .navbar-nav>li>a {
      color: white;
    } 

  </style>

</head>
<body background="2.jpg" style="background-size:1920px 1000px;">
<?php 
  session_start();
  if(!isset($_SESSION['user'])){
    $_SESSION["message"]="Your session has expired";
    header("location:login.php");
  }
?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="client.php" class="navbar-brand">  INVICTUS</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="client_about.php">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php">My Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
	<div class="jumbotron">
    	<h1><i class="fa fa-camera-retro"></i></span> INVICTUS </h1>
    	<p>The Unconquerable Spirit of Sportsmanship</p> 
    	<br>
    </div>
  	<div class="jumbotron">
    	<h3>Contact us now!</h3>
    	<br>
    	<p>Feel free to contact us at the following e-mail address:</p>
    	<p> invictus.help@gmail.com </p>
    	<p> We are happy to help with any difficulties or answer any queries you might have!</p>
   	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>