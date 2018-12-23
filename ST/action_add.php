<?php 
$con=mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or
     die("Could not connect: " . mysql_error());

$event = $_POST['event']; 
$location = $_POST['location'];  
$mobile = $_POST['mob']; 
$start = $_POST['s'];
$end = $_POST['e'];
$email = $_POST['email'];
$time = $_POST['time'];
$info = $_POST['info'];
$poster = $_POST['poster'];



// $qry = "INSERT INTO `event` (`event`, `location`, `mobile`, `start`, `end`, `email`, `time`, `info`) VALUES ('$event', '$location', '$mobile', '$start', '$end', '$email', '$time', '$info');";
$qry = "INSERT INTO `event` (`event`, `location`, `mobile`, `email`, `start`, `end`, `time`, `info`, `poster`) VALUES ('$event', '$location', '$mobile', '$email', '$start', '$end', '$time', '$info', '$poster');";

if(mysqli_query($con,$qry)){
  session_start();
$_SESSION['msg'] = "Successfully Added!";
	$url='admin.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
else{
	session_start();
	$_SESSION['msg'] = "Event with same name exists. Try again!!";
	$url='add_form.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}

?>