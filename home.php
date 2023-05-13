<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sol.css">
    <title>home</title>
</head>
<body>
<?php
include 'salman.php';
$sql = "select id,name,NBHD,image from chaletadd";
$query = mysqli_query($conn,$sql);
echo '<table width="50%" style="background-color: beige;" border="1" align="center" class="sol">';

echo '<tr><th align="center">name</th><th>NBHD</th><th>image</th><th>detalis</th> <th>delete</th> </tr>';

while($row = mysqli_fetch_array($query)){
   echo '<tr>';
   echo '<td>'. $row['name'].'</td>';
   echo '<td>'. $row['NBHD']. '</td>';
   echo '<td><img src="'.$row['image'].'"alt="chalt image" width=50 height="50"></td>';
   echo '<td><a href="detalis.php?$id='.$row[0].'"><button class="main"> Detalis</button> </a></td>';
   echo '<td><a href="delete.php?$id='.$row[0].'"><button class="main">Delete</button> </a> </td>';
   echo '</tr>';
}


echo '</table>';

mysqli_close($conn);
?>
</body>
</html>