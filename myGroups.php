<?php
session_start();
$email = $_SESSION['email'];
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
   die('Could not connect: ' . mysqli_error($conn));
}
$records = mysqli_query($conn, "select * from groupDetails where email = '" . $email . "'");
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

h2{
  overflow-wrap: anywhere;
  font-family: cursive;
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

   </style>
</head>

<body>


   <div class="mainBox">
      <div class="container">
         <h1>GO TO GROUP</h1>
         <form class="form1" action="chat.php" method="post" required>
            <div class="box">
               <input type="text" name="group" autocomplete="off" minlength="1" placeholder=" " required>
               <label for="group" class="labelName">
                  <span class="content-name content">Group</span>
               </label>
            </div>
            <div class="box1">
               <input type="submit" value="GO TO GROUP">
            </div>
         </form>
      </div>
   </div>

   <div class="mainBox" id="box2">
      <div class="container">
         <h1>YOUR GROUPS</h1>
         <form class="form1" action="chat.php" method="post" required>
            <?php
            while ($data = mysqli_fetch_array($records)) {
               echo '<div class="box1"><h2>' .strtoupper($data['group1']) . '</h2></div>';
            }
            ?>
         </form>
      </div>
   </div>

</body>

</html>