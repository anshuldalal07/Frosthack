<?php
session_start();
$email = $_SESSION['email'];
$db = 'Frosthack_Website';
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
    <title>GroupUp</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8d173e907f.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Open+Sans&family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="hack_home_page.css">
    <script src="app.js"></script>
    <style>
        h1{
            font-family: cursive;
            font-size: 3rem;
        }
    </style>
</head>
<body>
   
    <div class="container">
    <div class="header">
        <h1>Welcome
        <?php echo ucwords($data['First_Name']);?> 
            <?php echo ucwords($data['Last_Name']); ?>!
        </h1>
    </div>
        <div class="content">
            <div class="leftSubBox">
                <img src="friends2.svg" alt="Find Friends" width="520px">  
            </div>
            <div class="rightSubBox">
                <div class="links">
                    <div class="item">
                       <a href="myInfo.php"><button id="myAccount"> <i class="fas fa-user fa-3x"></i> MY ACCOUNT</button></a>
                    </div>
                    <div class="item">
                        <a href="myGroups.php"><button id="myGroups"><i class="fas fa-user-friends fa-3x"></i>MY GROUPS</button></a>
                    </div>
                    <div class="item">
                        <a href="choose_group.php"><button id="addGroups"><i class="fas fa-user-plus fa-3x"></i> ADD GROUPS</button></a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
   
  
</body>
</html>