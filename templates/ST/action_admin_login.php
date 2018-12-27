<?php

$con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error()); 

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE username='$username' and password='$password'";


$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);

$temp = mysqli_fetch_array( $result );

if($count == 0)
{
	 session_start();
	 $_SESSION["message"]="Invalid Username or Password";
	 header("location:admin_login.php");
} 
else
{
	session_start();
	$_SESSION['admin'] = $temp;
	header("location:admin.php");	
}

?>
