<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<div id="bg"></div>
<?php
$ms1 = $ms2 = $ms3 = "";
if(isset($_POST['sub'])){
$user = $_POST['username'];
$pass = $_POST['pass'];

if(empty($user)){
$ms1 = "Please enter username";
}

if(empty($pass)){
    $ms2 = "Please enter password";
}

if($ms1 == "" && $ms2 == ""){
include 'salman.php';
$sql = "select * from registration where username='$user' and pass='$pass'";
$query = mysqli_query($conn,$sql);
$rslt = mysqli_fetch_assoc($query);
$row_num = mysqli_num_rows($query);
if($row_num == 1){
    $_SESSION['id']= $rslt['id'];
    $_SESSION['username']= $rslt['name'];
    $_SESSION['level']= $rslt['level'];

    header('location:Chalet.php');
}else{
    echo "error";
}
}
}







    ?>


<form action="log.php" method="post"> 
   <div class="form-field">
    <input type="text" name="username" placeholder="Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="pass" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit" name="sub">Log in</button>
  </div>
</form>

  
</body>
</html>
