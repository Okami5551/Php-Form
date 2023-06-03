<?php
session_start();
?>
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
$id = $_SESSION['id'];
$name = $_SESSION['username'];
$level = $_SESSION['level'];

echo ' <a href="logout.php"  ><button>log out</button> </a>';

if(isset($id)){
include 'salman.php';
$sql = "select id,name,NBHD,image from chaletadd";
$query = mysqli_query($conn,$sql);
echo '<table width="50%" style="background-color: beige;" border="1" align="center" class="sol">';

echo '<tr><th align="center">name</th><th>NBHD</th><th>image</th><th>detalis</th>';
if($level == 1){
    echo '<th>delete</th>';
}
echo '</tr>';

while($row = mysqli_fetch_array($query)){
   echo '<tr>';
   echo '<td>'. $row['name'].'</td>';
   echo '<td>'. $row['NBHD']. '</td>';
   echo '<td><img src="'.$row['image'].'"alt="chalt image" width=50 height="50"></td>';
   echo '<td><a href="detalis.php?$id='.$row[0].'"><button class="button-10"> Detalis</button> </a></td>';
    if($level == 1){
   echo '<td><a href="delete.php?$id='.$row[0].'"><button class="button-10">Delete</button> </a> </td>';
    }
   echo '</tr>';
}


echo '</table>';

mysqli_close($conn);
}else{
   header('location:log.php');
}
?>
</body>
</html>