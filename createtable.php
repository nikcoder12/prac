<?php
$username="root";
$password="";
$servername="localhost";
$mydb="mydatabase";

$conn= new mysqli($servername,$username,$password,$mydb);

if($conn->connect_error){
    die("connection error". $conn->connect_error);
}

$sql="CREATE TABLE TEMP(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(60) NOT NULL,
    lastname VARCHAR(60) NOT NULL,
    reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if($conn->query($sql)==TRUE){
    echo "succesful";
}
else{
    echo "unsuccessful";
}
$conn->close();
?>