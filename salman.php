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

<legend><h1>Chalet Booking Website</h1></legend>
<h2>Booking page</h2>


<div class="inputbox" >


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Name: <input type="text" class="inputbo" name="name"> <br> <br>
Number: <input type="tel" class="inputbo" name="tel"> <br> <br>
City: <input type="text" class="inputbo" name="city"> <br> <br>
days: <input type="radio" class="inputbox" name="days" value="one day"> <label>One Day</label>  
       <input type="radio" class="inputbox" name="days" value="two days"> <label>Two Days</label> 
       <input type="radio" class="inputbox" name="days" value="three days"> <label>Three Days</label> 
       <br> <br>
Would you like some services? <input type="text" class="inputbox" name="services"> <br> <br>
<input type="submit" class="sub" name="submit" value="Send"> <br> <br>


</form>
<?php
if(isset($_POST['submit'])) {


        echo $_POST['name']. "<br> <br>";
        echo $_POST['tel']. "<br> <br>";
        echo $_POST['city']. "<br> <br>";
        echo $_POST['days']. "<br> <br>";
        echo $_POST['services']. "<br> <br>";
}

?>
</div>
   </div> 
</body>
</html>