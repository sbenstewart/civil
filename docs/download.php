<?php
require_once 'dbconfig.php';
$name2 = $_POST['name1'];
$mail2 = $_POST['mail1'];
$phone2 = $_POST['phone1'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";

    if (isset($_POST['event1_download'])) {
      $sql = "SELECT * FROM my_table_name LIMIT 20";

      //Prepare our SQL query.
      $statement = $pdo->prepare($sql);

      //Executre our SQL query.
      $statement->execute();

      //Fetch all of the rows from our MySQL table.
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

      //Get the column names.
      $columnNames = array();
      if(!empty($rows)){
          //We only need to loop through the first row of our result
          //in order to collate the column names.
          $firstRow = $rows[0];
          foreach($firstRow as $colName => $val){
              $columnNames[] = $colName;
          }
      }

      //Setup the filename that our CSV will have when it is downloaded.
      $fileName = 'mysql-export.csv';

      //Set the Content-Type and Content-Disposition headers to force the download.
      header('Content-Type: application/excel');
      header('Content-Disposition: attachment; filename="' . $fileName . '"');

      //Open up a file pointer
      $fp = fopen('php://output', 'w');

      //Start off by writing the column names to the file.
      fputcsv($fp, $columnNames);

      //Then, loop through the rows and write them to the CSV file.
      foreach ($rows as $row) {
          fputcsv($fp, $row);
}

//Close the file pointer.
fclose($fp);


} else if (isset($_POST['accomodation_download'])) {
    //download accomodation
} else {
    //no button pressed
}



} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
