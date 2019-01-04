<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];

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
    $count = $conn->exec("insert into ambassador(name, code, emailid, phoneno) values ('$name2', '$code', '$mail2', '$phone2') ON DUPLICATE KEY UPDATE emailid='$mail2', phoneno='$phone2'");
    foreach ($conn->query("SELECT code from ambassador where emailid='$mail2'") as $row)
    {
      $id = $row['code'];
    }

    echo "Form Submitted succesfully and the referal code is $id";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
