<!DOCTYPE html>
<html>
  <head>
  <title>AdminPage</title>
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
      color : red;
      width : 100%;
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
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="http://localhost/INVICTUS/ST/index.php" class="navbar-brand">  INVICTUS</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-nav-demo">
        <ul class="nav navbar-nav">
          <li><a href="http://localhost/INVICTUS/ST/admin_about.php">About</a></li>
          <li><a href="http://localhost/INVICTUS/ST/admin_contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/INVICTUS/ST/signup.php">Sign Up</a></li>
          <li><a href="http://localhost/INVICTUS/ST/admin_login.php">Admin Login</a></li>
          <li><a href="http://localhost/INVICTUS/ST/login.php">Login</a></li>
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


    $temp1 =  $_GET['event'];
    // echo $temp;
    $con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error());

     $sql="SELECT * FROM event WHERE event='$temp1'";


       $result=mysqli_query($con,$sql);
       $count=mysqli_num_rows($result);




       while($temp = mysqli_fetch_array( $result ))
       {
         
        $event_name = $temp['event'];
        $start = $temp['start'];
        $end = $temp['end'];
        $email = $temp['email'];
        $time = $temp['time'];
        $info = $temp['info'];
        $poster = $temp['poster'];
        $mobile = $temp['mobile'];
        $location = $temp['location'];


        echo "<div class='row'><div class='col-lg-8 col-sm-6'><table><tr><td><h1>Event Name:</h1></td><td><h1>$event_name</h1></td></tr>";
        echo "<tr><td>Start Date:</td><td>$start</td></tr>";
        echo "<tr><td>End Date:</td><td>$end</td></tr>";
        echo "<tr><td>Time:</td><td>$time</td></tr>";
        echo "<tr><td>Location:</td><td>$location</td></tr>";
        echo "<tr><td>Contact Email:</td><td>$email</td></tr>";
        echo "<tr><td>Contact Mobile:</td><td>$mobile</td></tr>";
        echo "<tr><td>Info:</td><td>$info</td></tr></table></div>";
        echo "<div class='col-lg-4 col-sm-6'><img src='$poster'  alt = 'pic'></img></div></div>";
        
      }

  ?>
  </div>
  </div>
    
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>