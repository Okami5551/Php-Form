<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align="center">
<form action="okami.php" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name" >
Number: <input type="radio" name="num" value="1"> <label>1</label>
        <input type="radio" name="num" value="2"> <label>2</label>
        <input type="radio" name="num" value="3"> <label>3</label>
        <input type="radio" name="num" value="4"> <label>4</label>
        <br> <br>
        Nal: <input type="checkbox" name="nal[]" value="sol badguy"> <label>sol badguy</label>
<input type="checkbox" name="nal[]" value="ky"> <label>ky</label>
<input type="checkbox" name="nal[]" value="ken"> <label>ken</label>
<br>
        <input type="file" name="image" > <br>
<input type="submit" name="sub">


</form>
<?php
if(isset($_POST['sub'])){
    echo $_POST['name'] . "<br>";
    /*
  
    while($i <= $_POST['num']){
        echo $i;
        $i++;
    }*/
 
    for($i = 1; $i <=$_POST['num']; $i++){
        echo $i . "<br>";
    }
    foreach($_POST['nal'] as $v)
    echo $v ."" . "<br>";
    echo "<br> <br>";
    $fileloc = 'img.';
    $filename = basename($_FILES["image"]["name"]);
    $filepath = $fileloc . $filename;
    move_uploaded_file ($_FILES["image"] ["tmp_name"], $filepath);
    echo '<img src="'.$filepath.'" width=100 height="100">';

}

?>
</div>
</body>
</html>