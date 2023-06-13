<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>


h1{
text-align: center; color: rgb(0, 0, 0); font-size: 50px;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
form{
text-align: center; font-size: 30px;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
input{
font-size: 20px;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
label{
font-size: 20px;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
 
</style>
</head>
<body>
<h1>Electricity Bill</h1>
<form>
<label for="">Enter the consumer number</label>
<input type="text" name="consumer_number" id="">
<br>
<label for="">Enter the consumer name</label>
<input type="text" name="consumer_name" id="">
<br>
<label for="">Enter the previous month reading</label>
<input type="text" name="previous_month_reading" id="">
<br>
<label for="">Enter the current month reading</label>
<input type="text" name="current_month_reading" id="">
<br>
<input type="submit" value="submit" name="submit">


<?php
if(isset($_GET['submit'])){
$consumer_number = $_GET['consumer_number'];
$consumer_name = $_GET['consumer_name'];
$previous_month_reading = $_GET['previous_month_reading'];
$current_month_reading = $_GET['current_month_reading'];
$units = $current_month_reading - $previous_month_reading;
$total_amount = 0;
if($units <= 100){
$total_amount = $units * 3;
}
 
else if($units > 100 && $units <= 200){
$total_amount = 100 * 3 + ($units - 100) * 4;
}
else if($units > 200 && $units <= 300){
$total_amount = 100 * 3 + 100 * 4 + ($units - 200) * 5;
}
else if($units > 300){
$total_amount = 100 * 3 + 100 * 4 + 100 * 5 + ($units - 300) * 6;
}
echo "<br>";
echo "Consumer Number: ".$consumer_number; echo "<br>";
echo "Consumer Name: ".$consumer_name; echo "<br>";
echo "Previous Month Reading: ".$previous_month_reading; echo "<br>";
echo "Current Month Reading: ".$current_month_reading; echo "<br>";
echo "Units Consumed: ".$units; echo "<br>";
echo "Total Amount: ".$total_amount;
}
?>


</form>
</body>
</html>
