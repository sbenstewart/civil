<?php
require_once 'dbconfig.php';
$event2 = $_POST['event1'];

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
      $cid2=$_SESSION["cid"];
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$event2')");
      foreach ($conn->query("SELECT name from user where cid='$cid2'") as $row)
      {
        $name = $row['name'];
      }
      echo "Registered succesfully for $event2 as $name";
    }

} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
