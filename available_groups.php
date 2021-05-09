<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
  
 
   $sql = "CREATE TABLE available_groups(
    course_group VARCHAR(30) PRIMARY KEY
    )";
    //mysqli_close($conn);
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Frosthack_Website");
    if ($conn->query($sql) === TRUE) {
       echo "Table". $table_name."  Created successfully";
     } else {
       echo "Error creating table: " .mysqli_error($conn);
     }
     $sql = "INSERT INTO available_groups (course_group) VALUES ('IDS'),('FLAT'),('DS303'),('ADP')";
     
     if ($conn->query($sql) === TRUE) {
        echo "Inserted in successfully";
      } else {
        echo "Error inserting in table: " .mysqli_error($conn);
      }
?>