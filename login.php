<?php

$email = $_POST['email'];
$password = $_POST['password'];
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $sql_query = "select count(*) as cntUser from LoginDetails where email='".$email."' and password1='".$password."'";
    $result = mysqli_query($conn, $sql_query) or die( mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];

    if($count > 0){
        session_start();
        $_SESSION['email']=$email;
        header("Location: hack_welcome_page.php");
    }else{       
        header("Location: hack_login_page.html");
    }

?>