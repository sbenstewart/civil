<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>  
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

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="text-align: center; color: green">
		<?php
		session_start();
		
		if(isset($_SESSION['msg']))
		{
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="text-align: center; color: red">
		<?php
		session_start();
		if(isset($_SESSION["message"]))
		{
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		}
		?>
		</div>
		<div class="col-md-4"></div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
				<a href="index.php" class="navbar-brand">  INVICTUS</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php">SignUp</a></li>
					<li><a href="admin_login.php">AdminLogin</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
	<div class="jumbotron">
    	<h1><i class="fa fa-camera-retro"></i></span> INVICTUS </h1>
    	<p>The Unconquerable Spirit of Sportsmanship</p> 
  	</div>
	<div>

	    <form action="action_login.php" method="POST">
	      <div class="form-group col-md-6">
		    <label for="mobile">Mobile:</label>
      		<input type="text" name="mobile" id="mobile" required placeholder="XXXXXXXXXX" class="form-control" maxlength="10">
		  </div>
		  
		  <div class="form-group col-md-6">
		    <label for="pass">Password:</label>
		    <input type="password" class="form-control" name="password" placeholder="Password"  maxlength="12">
		  </div>
		  
  		  <label>&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  		  <button type="submit" class="btn btn-primary">Get Me In</button>
		</form> 

	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
