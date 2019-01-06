<?php
require_once 'dbconfig.php';
$mail2 = $_POST['mail1'];

function random_num($size) {
	$alpha_key = '';
	$keys = range('A', 'Z');

	for ($i = 0; $i < 2; $i++) {
		$alpha_key .= $keys[array_rand($keys)];
	}

	$length = $size - 2;

	$key = '';
	$keys = range(0, 9);

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $alpha_key . $key;
}

$code=random_num(6);

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
    $sql = "SELECT COUNT(*) from user where emailid='$mail2'";
    if ($res = $conn->query($sql)) {

        /* Check the number of rows that match the SELECT statement */
        if ($res->fetchColumn() > 0) {
          $count = $conn->exec("update user set password='$code' where emailid='$mail2'");
          echo "New password is $code";
        }
    }
    else {
        echo "No such mail id found in the server. Please register.";
    }


} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
