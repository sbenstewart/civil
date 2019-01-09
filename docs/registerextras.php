<?php
require_once 'dbconfig.php';
$extras2 = $_POST['extras1'];

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
      if($extras2=='lunch')
      {
      //link cost only for lunch.
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$extras2')");
      }
      if($extras2=='tshirt')
      {
      //link cost only for tshirt.
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$extras2')");
      }
      if($extras2=='lunch-tshirt')
      {
      //link cost for both lunch and tshirt.
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$extras2')");
      }
      foreach ($conn->query("SELECT name from user where cid='$cid2'") as $row)
      {
        $name = $row['name'];
      }
      echo "Registered succesfully for $event2 as $name";
    }

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
