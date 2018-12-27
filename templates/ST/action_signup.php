<?php 
$con=mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or
    die("Could not connect: " . mysql_error());
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$date = $_POST['date'];
$email = $_POST['email'];


// $qry = "insert into studentdb(enrol,name) values(".$_POST['txtname'].",'".$_POST['txtname']."')";

$qry = "INSERT INTO `user` (`firstName`, `lastName`, `mobile`, `email`, `password`, `dob`) VALUES ('$firstName', '$lastName', '$mobile', '$email', '$password', '$date');";


if(mysqli_query($con,$qry)){
	session_start();
$_SESSION['msg'] = "Successfully Registered! Now you can login!";
	$url='login.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
}
else{
	session_start();
	$_SESSION['msg'] = "This mobile number already exists. Try again!!";
	$url='signup.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	
}

?>