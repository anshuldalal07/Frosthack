<?php
session_start();
$email = $_SESSION['email'];
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$group = $_POST["group"];
   if( !$conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }  
   $sql = "CREATE TABLE GroupDetails(
    email VARCHAR(30) ,
    group1 VARCHAR(30) NOT NULL, PRIMARY KEY (email,group1))";
    if ($conn->query($sql) === TRUE) {
        echo "Table". $table_name."  Created successfully";
      } else {
        echo "Error creating table: " .mysqli_error($conn);
      }
    $sql_insert = "INSERT INTO GroupDetails (email, group1) VALUES ('$email','$group')";
    if ($conn->query($sql_insert) === TRUE) {
       echo "Inserted successfully";
     } else {
       echo "Error inserting in table: " .mysqli_error($conn);
     }
     header("Location: choose_group.php");   
?>