<?php
session_start();
if(!isset($_SESSION['user'])){
	$_SESSION['message']="Your session has expired";
	header("location:login.php");
}

$temp =  $_GET['event'];

$con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error());

$user_mobile = $_SESSION['user']['mobile'];


$tempqry = "SELECT * FROM event WHERE event='$temp'";
$tempresult=mysqli_query($con,$tempqry);
$c_event = mysqli_fetch_array( $tempresult ); 


$location = $c_event['location'];  
$e_mobile = $c_event['mobile']; 
$start = $c_event['start'];
$end = $c_event['end'];
$email = $c_event['email'];
$time = $c_event['time'];
$info = $c_event['info'];
$poster = $c_event['poster'];

$qry1 = "SELECT * FROM registrations WHERE mobile='$user_mobile' and event='$temp'";


$result=mysqli_query($con,$qry1);
$count=mysqli_num_rows($result);

if($count==0){

$qry = "INSERT INTO `registrations` (`event`, `mobile`, `start`, `end`, `time`, `info`, `location`, `poster`, `email`,`event_mobile`) VALUES ('$temp', '$user_mobile', '$start', '$end', '$time', '$info', '$location', '$poster', '$email', '$e_mobile')";


if(mysqli_query($con,$qry)){
	$_SESSION['message1']="Successfully registered!";
	$url='http://localhost/INVICTUS/ST/client.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	} 
	else{  
		echo " NOT inserted";
	}


}else{
	$_SESSION["msg1"]="Already Registered!!";
	 header("location:http://localhost/INVICTUS/ST/client.php");

}
	mysqli_close($con);

	

?>