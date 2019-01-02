<?php
require_once 'dbconfig.php';
$event2 = $_POST['event1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    $cookie_name = "user";
    if(!isset($_COOKIE[$cookie_name]))
    {
      echo "Please register.";
      exit();
    }
    else
    {
      echo "Cookie '" . $cookie_name . "' is set!";
      echo "Value is: " . $_COOKIE[$cookie_name];
      $count = $conn->exec("insert into registrations(cid, id) values ('$_COOKIE[$cookie_name]', '$event2')");
      foreach ($conn->query("SELECT name from user where cid='$_COOKIE[$cookie_name]'") as $row)
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
