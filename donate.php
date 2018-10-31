<html>
<head>
<title>Donate for schools</title>
</head>
<style>

* {
  box-sizing: border-box;
}
.heading
{
background-color: #D35400  ;
height:125px;
margin:2px;
padding:5px; 
font-size: 30px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #FEF5E7 ; 
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.flip-card {
  margin-top: 3px;
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
.desc
{
  font-size: 20px;
}
#head
{
  padding:.1px;
  font-size: 50px;
}
</style>
<body>
  
          <div class= "heading"><h1><div id="head">Select To Donate</div></h1></div>
<div class="desc"><p>

A donation is a gift for charity, humanitarian aid, or to benefit a cause. A donation may take various forms, including money, alms, services, or goods such as clothing, toys, food, or vehicles.
You can select the category under which you want to contribute and proceed.</p></div>
<div class="row">    
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate1.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Give your share to show you care!</h1> 
      <a href="pay.php"  style="font-size: 30px;color: white">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate2.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Make it a rule never to give a child a book you would not read yourself.</h1> 
      <a href="books.php" style="font-size: 30px;color: white">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate3.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>A healthy mind resides in a healthy body; play sports!</h1> 
      <a href="sports.php" style="font-size: 30px;color: white">Donate</a>
    </div>
  </div>
</div>
</div>
<div class="column">  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/donate4.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>A healthy food for a wealthy mood.</h1> 
      <a href="food.php" style="font-size: 30px;color: white">Donate</a>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>