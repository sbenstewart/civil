<?php 
  session_start();
  if(!isset($_SESSION['admin'])){
    $_SESSION["message"]="Your session has expired";
    header("location:admin_login.php");
  }


$temp =  $_GET['event'];

 $con= mysqli_connect("127.0.0.1","root","kevalkale1","invictus")or     die("Could not connect: " . mysql_error());
 $qry = "DELETE FROM event WHERE event='$temp'";	

 $qry1 = "DELETE FROM registrations WHERE event='$temp'";	



if(mysqli_query($con,$qry)&&mysqli_query($con,$qry1)){
	$_SESSION['message1']="Successfully deleted!";
	$url='http://localhost/INVICTUS/ST/admin.php';
    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';
	} 
	else{  
		echo " NO data to delete";
	}
?>
