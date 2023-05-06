<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<?php
include 'salman.php';
$sql = "select name,NBHD,image from chaletadd";
$query = mysqli_query($conn,$sql);
echo '<table width="50%" style="background-color: beige;" border="1" align="center">';

echo '<tr><th align="center">name</th><th>NBHD</th><th>image</th> </tr>';

while($row = mysqli_fetch_array($query)){
   echo '<tr>';
   echo '<td>'. $row['name'].'</td>';
   echo '<td>'. $row['NBHD']. '</td>';
   echo '<td><img src="cna.jpg"'.$row['image'].'"alt="chalt image" width=50 height="50"></td>';
   echo '</tr>';
}


echo '</table>';


?>
</body>
</html>