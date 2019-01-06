<?php
require_once 'dbconfig.php';
$mail2 = $_POST['mail1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    

    foreach ($conn->query("SELECT cid from user where emailid='$mail2' and password='$password2'") as $row)
    {
      $id = $row['cid'];

    $cookie_name = "user";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30*31), "/");//one month

    if(!isset($_COOKIE[$cookie_name]))
    {
      //echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    else
    {
      echo "Cookie '" . $cookie_name . "' is set!";
      echo "Value is: " . $_COOKIE[$cookie_name];
    }

  }
    echo "Form Submitted succesfully $id";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
