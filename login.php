<script>
<?php

 if(isset($_GET['invalid']))
{
    ?>
    alert("There are error(s) in your form:email is invalid");
    <?php
     
}
    else if(isset($_GET['sinvalid']))
{
    ?>
    alert("There are error(s) in your form:school id is invalid");
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
  font-size: 125%
}
.menu-item:hover
{
background-color: white;
color:black;
}
</style>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 heading">
          <h1 class="headtext">ABC COMPANY</h1>
      </div>
      <div class="col-sm-12">
      </div>
    </div>
  </div>
<div class="row menu">
  <div class="col-sm-1"></div>
  <div class="col-sm-1 menu-item">
    About Us
  </div>
<div class="col-sm-1 menu-item">
    Donate
  </div>
  <div class="col-sm-1 menu-item">
    Schools
  </div>
  <div class="col-sm-6">
  </div>
  <div class="col-sm-2 menu-item">Username</div>
</div>
  

<div class="container-fluid" style="margin-top: 10px">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/b1.jpg" alt="Los Angeles" style="width:100%; height:580px;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/b2.jpg" alt="Chicago" style="width:100%;height:580px">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/b3.jpg" alt="New York" style="width:100%;height:580px;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
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

  </div>
  </form>
  </div>
  <div class ="col-sm- 1"></div>
</div>
</div>
 <div id="error"> <? echo $error.$successMessage; ?></div>
</body>
