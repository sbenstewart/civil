<?php
require_once 'dbconfig.php';
$password2 = $_POST['password1'];
$mail2 = $_POST['mail1'];

try {

  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  $sql = "SELECT COUNT(*) from user where emailid='$mail2'";
  if ($res = $conn->query($sql)) {

      /* Check the number of rows that match the SELECT statement */
      if ($res->fetchColumn() > 0) {
        foreach ($conn->query("SELECT cid,name,password from user where emailid='$mail2'") as $row)
        {
          $passwordIsCorrect = password_verify($password2, $row['password']);
          if ($passwordIsCorrect == false)
          {
          echo "Incorrect Password";
          break;
          }
          $id = $row['cid'];
          $name = $row['name'];
          session_start();
          $_SESSION["cid"]=$id;
          $_SESSION["name"]=$name;
          echo "Logged in as ";
          echo $_SESSION["name"];
          echo " with cid ";
          echo $id;
          echo ". Please note this number for future reference.";

          /*session is started if you don't write this line can't use $_Session  global variable*/
        }

        }
        /* No rows matched -- do something else */
        else {
        echo "User name is incorrect.";

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
