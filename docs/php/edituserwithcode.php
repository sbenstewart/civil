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

    $sql = "SELECT COUNT(*) from ambassador where code='$code2' and emailid!='$mail2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
          foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
          {
            $aid2 = $row['aid'];
          }
          $count = $conn->exec("update user set name='$name2', emailid='$mail2', phoneno='$phone2', aid='$aid2', college='$college2', year='$year2', dept='$dept2', course='$course2' where cid='$cid2'");

          echo "Details modified succesfully $id";

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
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
