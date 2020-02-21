<?php

$to   = "sbenstewart@gmail.com";
$from = 'help@civilisationceg.in';

$subject = "Password Changed";

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "CC: your_email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<h1>Civilisation 2020</h1>';
$message .= "Password is ";
$message .= "</body></html>";

mail($to, $subject, $message, $headers);

?>
