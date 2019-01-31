<?php
require_once 'dbconfig.php';


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    if($json = json_decode(file_get_contents("php://input"), true)) {
     //print_r($json);
     $data = $json;
 } else {
     //print_r($_POST);
     $data = $_POST['data'];
     $json = json_decode($data, true);
     if(is_array($json[0]))
     {
       foreach ($json as $temp) {
         $email=$temp['userEmailId'];
         $price=$temp['ticketPrice'];
         $event=$temp['eventName'];
         echo $email;
         echo $price;
         echo $event;
         foreach ($conn->query("SELECT cid from user where emailid='$email'") as $row)
         {
           $cid = $row['cid'];
         }
         echo $cid;
         echo "insert into registrations(cid, id) values ('$cid', '$event')";
         $count = $conn->exec("insert into registrations(cid, id) values ('$cid', '$event')");
       }
     }
      else {
     $email=$json['userEmailId'];
     $price=$json['ticketPrice'];
     $event=$json['eventName'];
     echo $email;
     echo $price;
     echo $event;
     foreach ($conn->query("SELECT cid from user where emailid='$email'") as $row)
     {
       $cid = $row['cid'];
     }
     echo $cid;
     echo "insert into registrations(cid, id) values ('$cid', '$event')";
     $count = $conn->exec("insert into registrations(cid, id) values ('$cid', '$event')");
   }

 }



} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
