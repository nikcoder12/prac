<?php
$servername="localhost";
$username="root";
$password="";
$mydb="mydatabase";

$conn=new mysqli($servername,$username,$password,$mydb);
if($conn->connect_error){
    die("error".$conn->connect_error);
}
$sql="INSERT INTO TEMP (firstname,lastname) VALUES('Param','singh')";

if($conn->query($sql)==TRUE){
    echo"sucess";
}
else{
    echo"unsuccess";
}

?>