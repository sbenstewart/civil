<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$code2 = $_POST['code1'];
$college2 = $_POST['college1'];
$year2 = $_POST['year1'];
$dept2 = $_POST['dept1'];
$course2 = $_POST['course1'];
$cid2 = $_POST['cid1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    $sql = "SELECT COUNT(*) from ambassador where code='$code2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
          foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
          {
            $id = $row['aid'];
          }
          $count = $conn->exec("insert into user(name, emailid, phoneno, aid, college, year, dept, course) values ('$name2', '$mail2', '$phone2', '$id', '$college2', '$year2', '$dept2', '$course2')");
          /*foreach ($conn->query("SELECT cid from user where emailid='$mail2'") as $row)
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
          }*/
          echo "Form Submitted succesfully $id";

        }
        /* No rows matched -- do something else */
        else {
          echo "The referal code is incorrect.";

        }
    }
    else {
      echo "Submission failed. Try later.";
    }



} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
