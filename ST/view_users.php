<!DOCTYPE html>
<html>
	<head>
	<title>MyEvents</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/INVICTUS/ST/css/style.css">
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
    img {
    width: 100%;
    height: 350px;
    }
    table {
      font-size: 25px;
      color : red; ;
    }
    h1 {
      color: green;
    }
    td {
      width: 300px;
      padding: 2px;
      border: 1px solid gray;
    }
  </style>

</head>
<body background="2.jpg" style="background-size:1920px 1000px;">
<?php 
  session_start();
  if(!isset($_SESSION['admin'])){
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
				<a href="http://localhost/INVICTUS/ST/client.php" class="navbar-brand">  INVICTUS</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
				<ul class="nav navbar-nav">
					<li><a href="http://localhost/INVICTUS/ST/client_about.php">About</a></li>
					<li><a href="http://localhost/INVICTUS/ST/client_contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://localhost/INVICTUS/ST/my_events.php">My Events</a></li>
					<li><a href="http://localhost/INVICTUS/ST/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

  <div class="container">
	<div class="jumbotron">
    	<h1><i class="fa fa-camera-retro"></i></span> INVICTUS </h1>
    	<p>Add here the suitable tag line html line #58</p> 
  </div>
	<div class="row" id="events">
    <?php
      $con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error());

      $current_event=$_GET['event'];

      echo "<h1>$current_event</h1>";

      $sql="SELECT * FROM registrations WHERE event='$current_event'";


      $result=mysqli_query($con,$sql);
      $count=mysqli_num_rows($result);


      while($temp = mysqli_fetch_array( $result ))
             {
               
              $event_name = $temp['event'];
              $mobile = $temp['mobile'];


            echo "<table><tr><td>Mobile:</td><td>$mobile</td></tr></table>";
            
            }

  ?>
	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
