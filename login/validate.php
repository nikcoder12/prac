<?php
require 'connection.php'; if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$remember=$_POST['remember'];
$sql = "SELECT login.email,login.pass FROM geu.login where login.email='$email' and login.pass='$password'";
$result = mysqli_query($con,$sql); if(mysqli_num_rows($result)>0)
{
if(isset($_POST['remember']))
{
setcookie('email',$email,time()+60*60*7); 
setcookie('pass',$password,time()+60*60*7); session_start();
 
$_SESSION['email']=$email;
$_SESSION['pass']=$password; header("location:welcome.php") ;
}
else
{
echo"email or password is invalid <br>click here to login again<a href='login.php'>TRY AGAIN</a>";
}}}
else
{
header("location:welcome.php");
}
?>
