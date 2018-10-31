<script>
<?php
if(isset($_GET['added']))
{?>
    alert("Signup Successful");
    <?php
}

?>
</script>
<html>
    <head>
  
<title>
  FIRST PAGE
</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body
{
 
}
.heading
{
  background-image: url("images/b7.jpg");
  height: 100px;
  
}
.heading:hover
{
  background-image: url("images/b8.jpg");
}
.back
{
  margin-top:10px;
  width:100% ;
  height:400px;
}
.headtext
{
  font-family: 'Permanent Marker', cursive; 
  padding-top: 25px;
  position:relative;
  left:50px;
}
.menu
{
  height:auto;
  background-color:#333;;
  color:white;
  padding:17px;
    font-size: 125%;}
    .item
    {
        color:white;
        
    }
    .item:hover
    {
        color: black;
    }

.menu-item:hover
{
background-color: white;
color:black;
}
</style>
<body>
    <?php
include 'header.php';
include 'menu.php';
include 'slider.php';
?>
<div class="container-fluid" style="margin-top:10px;">
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-3"style="text-align: center; ">
    <h3>Login For User</h3>
        <br>
    <form method="post" action="check.php">
<div class="form-group" >
    <input class="form-control" type="text" name="email" placeholder="abc@xyz.com" required>
    <br>
    <input class="form-control" type="password" name="pass" placeholder="password" required>
    <br>
    <button class="form-control btn btn-primary" type="submit">Login</button>

  </div>
  </form>
      <h6 style="text-align:right ;font-size:20px"><a href="reg_new_user.php">New User?</a></h6>
  </div>
  
  <div class="col-sm-4"style="text-align: center;">
    <h3>Updates</h3>
  </div>
  
  <div class="col-sm-3" style="text-align: center;">
    <h3>Login for Schools</h3>
    <br>
    <form method="post" action="check2.php">
<div class="form-group" >
    <input class="form-control" type="text" name="semail" placeholder="school-id" required>
    <br>
    <input class="form-control" type="password" name="spass" placeholder="password" required>
    <br>
    <button class="form-control btn btn-success" type="submit">Login</button>
     <h6 style="text-align:right ;font-size:20px"><a href="reg_new_school.php">New User?</a></h6>

  </div>
  </form>
  </div>
  <div class ="col-sm- 1"></div>
</div>
</div>
 <div id="error"> <? echo $error.$successMessage; ?></div>
    <div class="about"><h1 style="font-size:30px;margin:30px;font-weight:bold" id="about us">ABOUT US</h1> </div>
</body>
    
