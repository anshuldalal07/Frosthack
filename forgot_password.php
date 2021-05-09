<?php
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo '<p>Connected successfully</p>';
$email_to = $_POST["email"];
$email_subject = "GroupUp Login Password";
$sql_query = "select password1 as pass from LoginDetails where email='".$email_to."'";
$result = mysqli_query($conn, $sql_query) or die( mysqli_error($conn));
$row = mysqli_fetch_array($result);
$count = $row['pass'];

$email_message = "Your Password is: ".$count."\r\n";
$email_from = "System generated mail";
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
if( mail($email_to, $email_subject, $email_message, $headers) ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }
?>
