<?php
$db = 'Frosthack_Website';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose Groups</title>
  <link rel="stylesheet" href="signUpPageStyling.css">
  <style>
    body{
      height:auto;
      display:flex;
      flex-direction: column;
      align-items: center;
    }

    .mainBox{
      margin-top:4rem;
    }

    .container{
      padding:2rem;
    }

    #dropdown1{
      background-color: transparent;
      border:none;
      border-bottom:0.1rem solid #130a7f;
      outline:none;
      padding:0.5rem;
      width:100%;
      color:#130a7fbd;
      font-family: cursive;
    }

    h1,input,label{
      font-family: cursive;
      
    }
    label{
      color:#130a7fbd;
    }

  </style>
</head>

<body>

  <div class="mainBox">
    <div class="container">
      <h1>MAKE A NEW GROUP</h1>
      <form class="form1" action="add_to_list.php" method="post" required>
        <div class="box">
          <input type="text" name="group" autocomplete="off" minlength="1" placeholder=" " required>
          <label for="group" class="labelName">
            <span class="content-group content">Group Name</span>
          </label>
        </div>
        <div class="box1">
          <input type="submit" value="MAKE">
        </div>
      </form>
    </div>
  </div>




  <div class="mainBox">
    <div class="container">
      <h1>CHOOSE GROUPS</h1>
      <form class="form1" action="add_group.php" method="post" required>
        <div class="box1">
        <select id="dropdown1" name="group" required>
          <option value = ""disabled selected>PLEASE CHOOSE</option>
          <?php
          $records = mysqli_query($conn, "select * from available_groups");
          while ($data = mysqli_fetch_array($records)) {
            echo '<option>' . $data['course_group'] . '</option>';
          }
          ?>
        </select>
        </div>
        <div class="box1">
          <input type="submit" value="ENTER">
        </div>

      </form>
    </div>
  </div>



</body>

</html>