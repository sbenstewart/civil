<!DOCTYPE html>
<html>
<head>
	<title>AddEvent</title>
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

  <script>
    function validate(){
    var startDate = document.getElementById("sd").value;
    var endDate = document.getElementById("ed").value;
    if ((Date.parse(startDate) > Date.parse(endDate))) {
          alert("End date should be greater than Start date");
          document.getElementById("ed").value = "";
      }
  }


  </script>

</head>
<body background="2.jpg" style="background-size:1920px 1000px;">
<?php 
  session_start();
  if(!isset($_SESSION['admin'])){
    $_SESSION["message"]="Your session has expired";
    header("location:admin_login.php");
  }
?>
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
                <a href="admin.php" class="navbar-brand">  INVICTUS</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-nav-demo">
                <ul class="nav navbar-nav">
                    <li><a href="admin_about.php">About</a></li>
                    <li><a href="admin_contact.php">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="add_form.php">Add Event</a></li>
                    <li><a href="logout.php">Logout</a></li>
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

	    <form action="action_add.php" method="POST">
          <div class="form-group col-md-6">
            <label for="first">Event Name:</label>
              <input type="text" name="event" id="event" required placeholder="Invictus" class="form-control" maxlength="30">
          </div> 
          <div class="form-group col-md-6">
              <label>Location:</label>
              <input type="text" name="location" id="" required class="form-control" maxlength="50">
          </div>
          <div class="form-group col-md-3">
            <label for="start">Event Date:</label>
            <input type="date" name="s" class="form-control" id="sd" required>            
          </div>
          <div class="form-group col-md-3">
            <label for="end">End Date:</label>
            <input type="date" name="e" class="form-control" id="ed" required>            
          </div>
          <div class="form-group col-md-3">
            <label for="time">Start Time:</label>
            <input type="time" name="time" class="form-control" required>      
          </div>

          <div class="form-group col-md-3">
            <label for="mob">Contact Mobile:</label>
            <input type="mobile" name="mob" id="mob" required placeholder="XXXXXXXXXX" class="form-control" maxlength="10">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Contact Email:</label>
              <input type="email" name="email" id="email" required placeholder="abc@xyz.com" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <label for="info">Event Description:</label>
            <textarea class="form-control" name="info" rows="3" required></textarea>
          </div>
          <div class="form-group col-md-6">
              <label>Poster Link:</label>
              <input type="text" name="poster" required class="form-control">
          </div>    
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" onclick="validate()">Add This In</button>
          </div>
    </form> 

	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>




