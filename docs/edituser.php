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
    //echo "Connected to $dbname at $host successfully.";
    //echo "update user set name='$name2', phoneno='$phone2', college='$college2', year='$year2', dept='$dept2', course='$course2' where cid='$cid2' and  emailid='$mail2'";

    $count = $conn->exec("update user set name='$name2', phoneno='$phone2', college='$college2', year='$year2', dept='$dept2', course='$course2' where cid='$cid2' and  emailid='$mail2'");

    echo "Form Submitted succesfully $id";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
