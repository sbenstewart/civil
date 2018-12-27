<!DOCTYPE html>
<html>
	<head>
	<title>AdminPage</title>
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
    img {
    width: 100%;
    height: 270px;
    }

  </style>

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
			<div class="col-md-4" style="text-align: center; color: green"><?php
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
	
	<div class="row" id="events">
	<?php 
		$con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error());

      $sql="SELECT * FROM event WHERE 1";


      $result=mysqli_query($con,$sql);
      $count=mysqli_num_rows($result);




      while($temp = mysqli_fetch_array( $result ))
      {
        $link = "http://localhost/INVICTUS/ST/view_users.php/?event=";
        $link = $link. "" .$temp['event'];
        $src = $temp['poster'];

      //link for deleting
      $link2 = "http://localhost/INVICTUS/ST/delete.php/?event=";
      $link2 = $link2. "" .$temp['event'];
        
      echo "<div class='col-lg-4 col-sm-6' style='text-align: center'><p><a href = '$link'><img src='$src'  alt = 'ADD An IMAGE'></img></a>";
      
      echo "<br><br>";
      
        echo "<a href = '$link2'><button type='button' class='btn btn-primary'>Delete ".$temp['event']."</button></a>";
        echo "</p></div>";
        echo "";
        
      }

	?>
	</div>
  </div>
    
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
