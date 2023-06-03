<?php
$conn = mysqli_connect("localhost" , "root" , "" , "chalet");
if($conn ===false){
    die("error" . mysqli_connect_error());
}
?>