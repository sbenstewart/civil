<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    $count = $conn->exec("insert into user(name, emailid, phoneno) values ('$name2', '$mail2', '$phone2')");

    echo "Form Submitted succesfully $count";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
