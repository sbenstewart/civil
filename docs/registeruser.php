<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$code2 = $_POST['code1'];
$college2 = $_POST['college1'];
$year2 = $_POST['year1'];
$dept2 = $_POST['dept1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
    {
      $id = $row['aid'];
    }
    echo "$id";
    $count = $conn->exec("insert into user(name, emailid, phoneno, aid, college, year, dept) values ('$name2', '$mail2', '$phone2', '$id', '$college2', '$year2', '$dept2')");
    foreach ($conn->query("SELECT cid from user where name='$name2'") as $row)
    {
      $id = $row['cid'];
    }
    $cookie_name = "user";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30*31), "/");//one month

    if(!isset($_COOKIE[$cookie_name]))
    {
      echo "Cookie named '" . $cookie_name . "' is not set!";
    }
    else
    {
      echo "Cookie '" . $cookie_name . "' is set!";
      echo "Value is: " . $_COOKIE[$cookie_name];
    }

    echo "Form Submitted succesfully $id";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
