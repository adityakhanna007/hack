<?php

include 'connection.php';
if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        header('location:books.php?sinvalid');}

else
{   $e=$_POST['email'];
    $un=$_POST['username'];
    $sp=$_POST['description'];
    
$i=$_GET['id'];
$sql="insert into donate (name,school,sports) values ('$un','$i','$sp')";
mysqli_query($con,$sql);
header('location:thanku.php');
}


?>