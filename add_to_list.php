<?php
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$group = $_POST["group"];
   if( !$conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }  
    $sql_insert = "INSERT INTO available_groups (course_group) VALUES ('$group')";
    if ($conn->query($sql_insert) === TRUE) {
       echo "Inserted successfully";
   } 
   else {
       echo "Error inserting in table: " .mysqli_error($conn);
   } 

   header("Location: choose_group.php")
?>