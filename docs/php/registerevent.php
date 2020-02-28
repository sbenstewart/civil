<?php
require_once 'dbconfig.php';
$event2 = $_POST['event1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    session_start();
    if(!isset($_SESSION["cid"]))
    {
      echo "Please login / register.";
      exit();
    }
    else
    {
      $cid2=$_SESSION["cid"];
      $count = $conn->exec("insert into registrations(cid, id) values ('$cid2', '$event2')");
      foreach ($conn->query("SELECT name from user where cid='$cid2'") as $row)
      {
        $name = $row['name'];
      }
      echo "Registered succesfully for $event2 as $name";
    
        if(strcmp($event2,'EVENTS')==0)
        {
          //echo "Do not mail them";
          exit();
        }

        if(strcmp($event2,'Building Information')==0)
        {
          //echo "Building mail";
          $details = "Building Information and Modelling";
        }

        if(strcmp($event2,'Pre Stressed Concrete Bridges')==0)
        {
          //echo "Bridge mail";
          $details = "Pre Stressed Concrete on Bridges";
        }

        if(strcmp($event2,'Steel Structures')==0)
        {
          //echo "Steel mail";
          $details = "Innovative Erection Methodologies of Steel Structures";
        }

        //now only workshops segment will come here
        //so send the mail
        $stmt = $conn->query("SELECT emailid from user where cid='$cid2'");
        $user = $stmt->fetch();
        $mail2 = $user[emailid];

          $to   = $mail2;
					$from = 'help@civilisationceg.in';

					$subject = "Workshop Registered";

					$headers = "From: " . $from . "\r\n";
					$headers .= "Reply-To: ". $from . "\r\n";
					$headers .= "CC: your_email\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$message = '<html><body>';
					$message .= '<h1>Civilisation 2020</h1>';
					$message .= "You have registered for the workshop on $details";
					$message .= "</body></html>";

					mail($to, $subject, $message, $headers);

					echo "<h3>Check your mail</h3>";
        
      }

} catch (PDOException $pe) {
    die("Could not connect to the server. Please check your internet connection.");
}
 // Connection Closed
?>
