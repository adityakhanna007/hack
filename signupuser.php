<?php
include 'connection.php';
$username=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['confirmpass'];
$sql="insert into user (Username,Email,Password) values ('$username','$email','$pass')";
mysqli_query($con,$sql);
header('location:login.php?added');

?>