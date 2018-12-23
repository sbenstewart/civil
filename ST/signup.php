<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>  
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
		<div class="col-md-4" style="text-align: center; color: red"><?php
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
					<li><a href="admin_login.php">Admin Login</a></li>
					<li><a href="login.php">Login</a></li>
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

	    <form action="action_signup.php" method="POST">
	      <div class="form-group col-md-6">
		  	<label for="first">First Name:</label>
	      	<input type="text" name="first-name" id="first-name" required placeholder="John" class="form-control" maxlength="20">
		  </div>
		  <div class="form-group col-md-6">
		  	<label for="last">Last Name:</label>
	      	<input type="text" name="last-name" id="last-name" required placeholder="Smith" class="form-control" maxlength="20">
		  </div>
	      <div class="form-group col-md-6">
		    <label for="mobile">Mobile:</label>
      		<input type="text" name="mobile" id="mobile" required placeholder="XXXXXXXXXX" class="form-control" maxlength="10">
		  </div>
		  <div class="form-group col-md-6">
		    <label for="pass">Password:</label>
		    <input type="password" class="form-control" id="pass" name="password" placeholder="Password" maxlength="12" minlength="6" required>
		  </div>
		  <div class="form-group col-md-6">
		    <label for="email">Email:</label>
      		<input type="email" name="email" id="email" required placeholder="abc@xyz.com" class="form-control">
		  </div>
		  
		  <div class="form-group col-md-6	">
		  	<label for="date">Date of Birth:</label>
		  	<input type="date" name="date" class="form-control">	  		
  		  </div>

  		  <div class="col-md-12">
  		  	<button type="submit" class="btn btn-primary">Get Me Registered</button>
  		  </div>
		</form> 

	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

