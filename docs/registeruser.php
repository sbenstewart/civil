<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$code2 = $_POST['code1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
    {
      $aid = (int) $row['aid'];
    }
    echo "The ambassador is $aid with referal $code2";
    $count = $conn->exec("insert into user(name, emailid, phoneno, code) values ('$name2', '$mail2', '$phone2', '$code2')";
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
