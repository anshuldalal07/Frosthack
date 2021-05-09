<?php

session_start();
$email = $_SESSION['email'];
// $firstName = $_SESSION['First_name'];
// $lastName = $_SESSION['Last_Name'];
$db = 'frosthack_website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if( !$conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $records = mysqli_query($conn,"select * from LoginDetails where email = '".$email."'"); 
   $data = mysqli_fetch_array($records);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="myInfo.css">
  <style>
    body{
      background-color:white;
    }
    
    .cover{
      background-color: white;
    }

    .entry{
      border:0.2rem solid #fe7062;
      font-family: cursive;
    }
  </style>
</head>
<body>
    <div class="cover">
   <div class="container">
       <div class="heading">
            YOUR DETAILS
       </div>

       <div class="bottom">
            <div class="left">
                    <div class="entry">First Name</div>
                    <div class="entry">Last Name</div>
                    <div class="entry">E-Mail</div>
            </div>
            <div class="right">
                    <div class="entry"><?php echo ucwords($data['First_Name']);?></div>
                    <div class="entry"><?php echo ucwords($data['Last_Name']);?></div>
                    <div class="entry"> <?php echo $data['email'];?> </div>
                    
            </div>
       </div>
   </div>
    </div>

   
</body>
</html>
