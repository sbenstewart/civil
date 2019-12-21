<?php
require_once 'dbconfig.php';
$password2 = $_POST['password1'];
$mail2 = $_POST['mail1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
    //echo "insert into user(name, emailid, phoneno, college, year, dept, course) values ('$name2', '$mail2', '$phone2', '$college2', '$year2', '$dept2', '$course2')";
    //echo "SELECT cid from admin where emailid='$mail2' and password='$password2'";

    foreach ($conn->query("SELECT cid,password from admin where emailid='$mail2'") as $row)
    {
      //to be used to find new admin password hash
      //$loaded = password_hash($password2, PASSWORD_BCRYPT);
      //echo $loaded;
      $passwordIsCorrect = password_verify($password2, $row['password']);
      if ($passwordIsCorrect == false)
      {
      echo "Incorrect password";
      break;
      }
      $id = $row['cid'];
      session_start();
      $_SESSION["admin"]=$id;

      echo "Logged in as ";
      echo $_SESSION["admin"];
      break;
      /*session is started if you don't write this line can't use $_Session  global variable*/
    }
  

} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
