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
var $aid2;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    $sql = "SELECT COUNT(*) from ambassador where code='$code2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
          foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
          {
            $aid2 = $row['aid'];
          }

    }






    $sql = "SELECT COUNT(*) from user where cid='$cid2' and emailid='$mail2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {

          $count = $conn->exec("update user set name='$name2', emailid='$mail2', phoneno='$phone2', aid='$aid2', college='$college2', year='$year2', dept='$dept2', course='$course2' where cid='$cid2' ");
          echo "succesfully updated your details."


          foreach ($conn->query("SELECT cid from user where emailid='$mail2'") as $row)
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

          

          }
          /* No rows matched -- do something else */
          else {
            echo "cid and mail did not match our records. Please register again.";
          }




          //echo "Form Submitted succesfully $id";

        }

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
