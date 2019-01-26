<?php
require_once 'dbconfig.php';
$date2 = $_POST['date1'];
$time2 = $_POST['time1'];
$hours2 = $_POST['hours1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    session_start();
    if(!isset($_SESSION["cid"]))
    {
      echo "Please login / register.";
      exit();
    }
    else
    {
      //echo "Logged in as ";
      //echo $_SESSION["cid"];
      $cid2=$_SESSION["cid"];

      $count = $conn->exec("insert into accomodation(id, entrydate, entrytime, hours) values ('$cid2', '$date2', '$time2' ,'$hours2') ON DUPLICATE KEY UPDATE entrydate='$date2', entrytime='$time2', hours='$hours2' ");
      foreach ($conn->query("SELECT name from user where cid='$cid2'") as $row)
      {
        $name = $row['name'];
      }
      echo "Accomodation registered succesfully for $name";
    }

} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
