<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$college2 = $_POST['college1'];
$year2 = $_POST['year1'];
$dept2 = $_POST['dept1'];
$course2 = $_POST['course1'];
$cid2 = $_POST['cid1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $sql = "SELECT COUNT(*) from user where cid='$cid2' and  emailid='$mail2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {

          $password2 = password_hash($password2, PASSWORD_BCRYPT);
          $count = $conn->exec("update user set name='$name2', phoneno='$phone2', college='$college2', year='$year2', dept='$dept2', course='$course2' where cid='$cid2' and  emailid='$mail2'");

          echo "Details modified succesfully $id";
          }

          else {
          echo "CID and email id do not match.";
          }

        }






} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
