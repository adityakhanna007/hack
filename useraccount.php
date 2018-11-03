<?php
session_start();
if(!$_SESSION['username'])
header('location:login.php');
?>
<html>
<head>
  
<title>
  USER PROFILE
</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div>
    <h1 style="text-align: center">
      WELCOME
    </h1>
    <h2 style="text-align: center">
      <?php echo $_SESSION['username'];?>
    </h2>
    <h2 style="text-align: center">
      <?php
      
      $username=$_SESSION['username'];
      ?>
<div class="row">
      <div class ="col-sm-11"></div>
      <div class="col-sm-1">
        <form action="lout.php">
       <input type="submit" class="btn btn-success form-control"value="Log Out">
     </form>
       <form action="schools.php">
       <input type="submit" class="btn btn-primary form-control"value="Donate">
     </form>
      </div>
    </h2>
  </div>

<div class="container-fluid">
  <h1 style="text-align:center;">Earlier Contributions By You</h1>
  <br>
  <div class= "table-responsive">
    <table class=" table table-striped table-hover table-bordered">
      <tr>
     
      <th>NAME</th>
      <th>SCHOOL ID</th>
      <th>MONEY</th>
      <th>BOOKS</th>
      <th>SPORTS</th>
    </tr>
      <?php
      include 'connection.php';
      $sql="select * from donate where name='$username' order by id DESC";
       $res=mysqli_query($con,$sql);
       while($row=mysqli_fetch_assoc($res))
       {
        ?>
        <tr>
       
         <td><?php echo $row['name']?></td>
         <td><?php echo $row['school']?></td>
         <td><?php echo $row['money']?></td>
         <td><?php echo $row['book']?></td>
         <td><?php echo $row['sports']?></td>
       </tr>
       <?php
       }

       

      ?>

    </table>
  </div>
</div>
</body>
