<?php

$first_name = $_POST['FirstName'];
$last_name = $_POST['LastName'];
$email = $_POST['EmailAddress'];
$password = $_POST['SetAPassword'];
$db = 'Frosthack_Website';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   echo '<p>Connected successfully</p>';
   $sql = "INSERT INTO LoginDetails"." (First_Name, Last_Name, email, password1) VALUES ('$first_name', '$last_name', '$email','$password')";
      if ($conn->query($sql) === TRUE) {
         echo "Inserted in Frosthack_Website successfully";
      } else {
         echo "Error inserting in table: " .mysqli_error($conn);
      }
      header("Location: hack_signup_page.html");
?>