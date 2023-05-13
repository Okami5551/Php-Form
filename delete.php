<?php
include 'salman.php';
$id = $_GET['$id'];
$sql = "delete from chaletadd where id='$id' ";
if(mysqli_query($conn,$sql)){
    echo '<script >';
    echo 'alert("message successfully sent");';
    echo'window.location.href ="home.php";';
    echo '</script>';


}else{
    echo "no";
}
mysqli_close($conn);
?>