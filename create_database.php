<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
  
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully';
   $sql1 = "CREATE Database Frosthack_Website";
   // $retval = mysqli_query( $conn, $sql1 );
   // sql to create table
   if ($conn->query($sql1) === TRUE) {
      echo "Database created successfully with the name newDB";
      
   } else {
      echo "Error creating database: " . $conn->error;
   }
   $sql = "CREATE TABLE LoginDetails(
      First_Name VARCHAR(40) NOT NULL,
      Last_Name VARCHAR(40),
      email VARCHAR(30) PRIMARY KEY,
      password1 VARCHAR(30))";
      //mysqli_close($conn);
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Frosthack_Website");
      if ($conn->query($sql) === TRUE) {
         echo "Table". $table_name."  Created successfully";
       } else {
         echo "Error creating table: " .mysqli_error($conn);
       }

?>