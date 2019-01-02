<?php
require_once 'dbconfig.php';
$date2 = $_POST['date1'];
$time2 = $_POST['time1'];
$hours2 = $_POST['hours1'];

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
      $count = $conn->exec("insert into accomodation(id, entrydate, entrytime, hours) values ('$_COOKIE[$cookie_name]', '$date2', '$time2' ,'$hours2')");
      foreach ($conn->query("SELECT name from user where cid='$_COOKIE[$cookie_name]'") as $row)
      {
        $name = $row['name'];
      }
      echo "Accomodation registered succesfully for $name";
    }

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
