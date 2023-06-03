<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Registration </title> 
  <link rel="stylesheet" href="sign.css">
</head>
<body>
<?php
 $ms5 = $ms6 = "";
if(isset($_POST['sub'])){

  $username = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $password2 = $_POST['pass2'];

  if($password != $password2){
    $ms5 = 'mismatched passwords';
  }else{

    include 'salman.php';
    $sql1 = "SELECT * FROM registration WHERE username = '$username'";
    $query = mysqli_query($conn, $sql1);
      
    if(mysqli_num_rows($query) == 1){
      $ms6 = "username is already used";
    } else {
      $sql = "INSERT INTO registration (username, email, pass, level) VALUES ('$username', '$email', '$password',0)";
      $query = mysqli_query($conn, $sql);
      if($query){
      echo '<script >';
      echo 'alert("thank you for registration!");';
      echo'window.location.href ="log.php";';
      echo '</script>';
      }
    
  }
}
}


?>
<div class="wrapper">
  <h2>Registration</h2>
  <form action="sign.php" method="post">
    <div class="input-box">
      <input type="text" placeholder="Enter your username" required name="user"> 
    </div>
    <div class="input-box">
      <input type="text" placeholder="Enter your email" required name="email">
    </div>
    <div class="input-box">
      <input type="password" placeholder="Create password" required name="pass"> 
    </div>
    <div class="input-box">
      <input type="password" placeholder="Confirm password" required name="pass2"> 
    </div>
    
    <div class="input-box button">
      <input type="submit" value="Register Now" name="sub">
      <?php echo $ms5." ".$ms6;?>
    </div>
    <div class="text">
      <h3>Already have an account? <a href="log.php">Login now</a></h3>
    </div>
  </form>
</div>
</body>
</html>