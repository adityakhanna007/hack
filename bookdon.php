<?php

include 'connection.php';


{   $e=$_POST['email'];
    $un=$_POST['username'];
    $bk=$_POST['description'];
    
$i=$_GET['id'];
$sql="insert into donate (name,school,book) values ('$un','$i','$bk')";

mysqli_query($con,$sql);
$m=mail($i,"Donation Recieved","Your school recieved a donation from '$un','$e' .");
print_r($m);

}


?>