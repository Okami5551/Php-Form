<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="sa.css">
    <title>Chalet From</title>
</head>
<body>
<div class="box" align="center">

<legend><h1>Add Chalet</h1></legend>



<div>


<form action="Chalet.php" method="post" enctype="multipart/form-data">
Name:<input type="text"  name="name" required> <br> <br>
Phone:<input type="tel"  name="tel" required> <br> <br>
City:<select name="city" required>
<option value="Riyadh">Riyadh</option>
<option value="Jeddah">Jeddah</option>
<option value="Dammam">Dammam</option>
<option value="Tabuk">Tabuk</option>
</select>
<br> <br>
NBHD:<input type="text" name="NBHD" required> <br> <br>
Street:<input type="text" name="str" required> <br> <br>
Image:<input type="file" name="img" required > <br> <br>
<input type="submit" name="submit" value="submit"  > <br> <br>   
</form>
<?php

if(isset($_POST['submit'])){
$fileloc = 'image/';
$filename = time() . '_' . basename($_FILES["img"]["name"]);
$filepath = $fileloc . $filename;
$imgsize = basename($_FILES["img"]["type"]);
$imgtype = strtolower(basename($_FILES["img"]["type"]));


if($imgsize < 2000000){
    echo '<script >';
    echo 'alert("image size no more 2GB");';
    echo '</script>';
}else{

if( ( $imgtype !='png' && $imgtype !='jpg' && $imgtype !='jpeg') and !empty($_FILES["img"]["name"]) ){
    echo '<script >';
    echo 'alert("png and jpg only");';
    echo '</script>';
}else{




include 'salman.php';
$name = $_POST['name'];
$phone = $_POST['tel'];
$city = $_POST['city'];
$NBHD = $_POST['NBHD'];
$street = $_POST['str'];


move_uploaded_file($_FILES["img"]["tmp_name"],$filepath);
$sql = "insert into chaletadd (name, phone, city, NBHD, street, image) values('$name', '$phone', '$city', '$NBHD', '$street', '$filepath')";

if(mysqli_query($conn,$sql)){
    echo '<script >';
    echo 'alert("The Chalet successfully sent");';
    echo'window.location.href ="home.php";';
    echo '</script>';
}else{
    echo "error";
}

}
mysqli_close($conn);
}
}

?>
</div>
   </div> 
</body>
</html>