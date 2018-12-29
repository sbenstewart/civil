<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];
$connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
$db = mysql_select_db("database", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysql_query("insert into user(name, emailid, phoneno) values ('$name2', '$email2', '$phone2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>
