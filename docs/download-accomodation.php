<?php
require_once 'dbconfig.php';
$table2 = $_POST["name"];
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $sql = "SELECT user.cid,user.name,user.emailid,user.phoneno,user.college,user.year,user.course,user.dept,accomodation.entrydate,accomodation.entrytime,accomodation.hours FROM accomodation INNER JOIN user ON accomodation.id = user.cid";
      //Prepare our SQL query.
      $statement = $conn->prepare($sql);
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
      $fileName = 'mysql-accomodation.csv';
      ob_clean();
      header("Pragma: no-cache");
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment;filename=accomodation.csv');

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
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
 // Connection Closed
?>
