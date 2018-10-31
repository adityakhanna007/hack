<?php

include 'connection.php';
if ($_POST['sid'] && filter_var($_POST["sid"], FILTER_VALIDATE_EMAIL) === false) {
        header('location:reg_new_school.php?sinvalid');}
else
{
    $username=$_POST['sname'];
$id=$_POST['sid'];
$pass=$_POST['spass'];
$cpass=$_POST['confirmpass'];
$state=$_POST['state'];
$district=$_POST['district'];
$acc=$_POST['bankaccountno'];
$phone=$_POST['phone'];
$sql="insert into school (Name,School_ID,State,District,Acc_No,Phone,Password) values ('$username','$id','$state','$district','$acc','$phone','$pass')";
mysqli_query($con,$sql);
header('location:login.php?added');
}


?>