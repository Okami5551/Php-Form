<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sol.css">
    <title>Document</title>
</head>
<body>
<?php
include 'salman.php';
$id = $_GET['$id'];
$sql = "select * from chaletadd where id='$id' ";
$query = mysqli_query($conn,$sql);
echo '<table width="50%" style="background-color: beige;" border="1" align="center" class="sol">';

echo '<tr><th align="center">ID</th><th>NAME</th><th>PHONE</th> <th>CITY</th> <th>NBHD</th> <th>STREET</th> <th>IMAGE</th> </tr>';


while($row = mysqli_fetch_array($query)){
echo '<tr>';
echo '<td>' . $row['id']. '</td>';
echo '<td>' . $row['name']. '</td>';
echo '<td>' . $row['phone']. '</td>';
echo '<td>' . $row['city']. '</td>';
echo '<td>' . $row['NBHD']. '</td>';
echo '<td>' . $row['street']. '</td>';
echo '<td> <img src="'. $row['image']. '"alt="chalet image" width="50" height="50"></td>';
echo '</tr>';  
}
echo '</table>';

mysqli_close($conn);
?>
</body>
</html>