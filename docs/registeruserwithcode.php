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
$password2 = $_POST['password1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = "SELECT COUNT(*) from ambassador where code='$code2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
          foreach ($conn->query("SELECT aid from ambassador where code='$code2'") as $row)
          {
            $id = $row['aid'];
          }
          $count = $conn->exec("insert into user(name, emailid, phoneno, aid, college, year, dept, course, password) values ('$name2', '$mail2', '$phone2', '$id', '$college2', '$year2', '$dept2', '$course2', '$password2')");
          echo "Registered as $id. Login to your account.";
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
