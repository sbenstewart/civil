<?php
require_once 'dbconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];

if (isset($_POST['name1'])) {
$query = mysql_query("insert into user(name, emailid, phoneno) values ('$name2', '$email2', '$phone2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($conn); // Connection Closed
?>
