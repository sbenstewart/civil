<?php
require_once 'dbconfig.php';


try {
    /*$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

      $cid2=$_SESSION["cid"];
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$event2')");
      foreach ($conn->query("SELECT name from user where cid='$cid2'") as $row)
      {
        $name = $row['name'];
      }*/
      if($json = json_decode(file_get_contents("php://input"), true)) {
     print_r($json);
     $data = $json;
 } else {
     //print_r($_POST);
     $data = $_POST['data'];
     print_r($data);
     $json = json_decode($data, true);
     print_r($json);
 }



} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
