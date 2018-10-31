<?php
include 'connection.php';
  if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            header('location:reg_new_user.php?invalid');}
else
{
    $username=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['confirmpass'];
$sql="insert into user (Username,Email,Password) values ('$username','$email','$pass')";
mysqli_query($con,$sql);
header('location:login.php?added');
    
}


?>