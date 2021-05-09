<?php
session_start();
$msg = $_POST['message'];
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$email = $_SESSION["email"];
$group = $_SESSION["group"];
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);   
   if( !$conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   $sql = "CREATE TABLE chats(
    email VARCHAR(30) ,
    group1 VARCHAR(30) , 
    msg VARCHAR(200), 
    time1 TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

    if($conn->query($sql) == TRUE)
    {
       
    }
    $sql_insert = "INSERT INTO chats (email, group1, msg) VALUES ('$email','$group','$msg')";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>My Groups</title>
   <link rel="stylesheet" href="signUpPageStyling.css">
   <style>
   ::-webkit-scrollbar{
       width:0.8rem;
      } 
    
   ::-webkit-scrollbar-track{
      background-color: transparent;
   }

   ::-webkit-scrollbar-thumb{
      background-color:#fe706273 ;
      width:1rem;
      height:1rem;
      border-radius: 2rem;
      background-clip: content-box;
   }

   ::-webkit-scrollbar-thumb:hover{
      background-color:#fe7062c2;
   }
   
   
   #box2 .box1 {
    width:90%;
    height:2rem;
    margin:1rem;
    margin-top: 1rem;
    padding:1rem;

    
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius:1rem;
    border-style: solid;
    border-left: none;
    border-right: none;
    border-bottom:none;
    background-color: #130a7f;
    border-width: 0.5rem;
    color:#e9effd;
    border-top-color: #fe7062;
    min-height:4rem;
    width:100%;
    letter-spacing: 0.1rem;
    font-weight: 600;
    font-size: 80%;
    

    outline:none;
    box-shadow: 3px 3px 25px 1px rgba(128, 128, 128, 0.603);
    transition-property: color,background-color;
    transition-duration: 1s;
    transform-style: ease-in;
    font-family: cursive;
}

/* .mainBox{
    width:auto;
} */

#box2 h1{
  font-size: 110%;
}

.formall{
  overflow-wrap: anywhere;
  letter-spacing: 0.1rem;
  text-align: center;
  color:#130a7f;

}

.container1 h1{
  color:#fe7062;
}

.header h1{
  font-size: 4rem;
  color:#130a7f;
}

h1{
   font-family: cursive;
}

#box2 .box1:hover{
    background-color: white;
    color:#4245e6;
}
body{
   height:auto;
   
}

.form1{
  font-size: 100%;
}



   </style>
</head>

<body>

<div class="mainBox">
      <div class="container">
         <h1>
         <?php
         if ($conn->query($sql_insert) === TRUE) {
           echo "Message sent successfully";
         } 
         else {
           echo "Error".mysqli_error($conn);
         }
         ?>
         </h1>
      </div>
   </div>
</body>

</html>
