<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Quest | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  
</head>
<body>

<body  style="background-image:url('background.jpg');background-size:cover;overflow:none">


<?php include "navbar.php" ?>




<br clear="all">

<div class="row" style="float:none">

<div class="col-xs-2">

</div>


<div class="col-xs-8">
<form style="margin-top:10px">
<input type="text" placeholder="Type Food To Search" style="background:black;opacity:0.7;width:85%;height:40px;
border-right:none;border:1px solid indigo;color:teal;font-size:15px;">
<span>
<button style="height:40px;background:#007daa;border:2px solid #007daa;
width:10%;margin-left:-5px;padding-top:1px;opacity:0.8;padding-bottom:3px" class="glyphicon glyphicon-search">
</button></span></input>

</form>
</div>

</div>


<div class="row">


<div class="col-xs-2">


<div class="panel panel-info" style="background:black;opacity:0.8;margin-left:5px">
  <div class="panel-heading">Most Searched</div>
  <div class="panel-body">Food 1</div>
  <hr>
  <div class="panel-body">Food 2</div>
  
</div>

</div>

<div class="col-xs-8" style="margin-top:2px;">


<!-- cau slider from here-->

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:20px" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="border:2px solid green;border-radius:5px">
    <div class="item active">
      <img src="back.jpg"  style="height:400px;width:100%" class="img-responsive">
      <div class="carousel-caption">
        <!-- Content Here -->
		<h3>Hello</h3>
		<p> We are here to help you.</p>
		 <button type="button" class="btn btn-success">Get to know more..</button>
      </div>
    </div>

    <div class="item">
      <img src="jumb.jpeg"  style="height:400px;width:100%" class="img-responsive">
      <div class="carousel-caption">
        <h3>Our Pricing</h3>
		<p>Compare Pricing With Our Enginee</p>
         <button type="button" class="btn btn-success">Get to know more..</button>
      </div>
    </div>

    <div class="item">
      <img src="food.jpg" style="height:400px;width:100%" class="img-responsive">
      <div class="carousel-caption">
        <h3>Heading Here</h3>
        <p>Type Some Text</p>
		 <button type="button" class="btn btn-success">Get to know more..</button>
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
  
  
 </div> <!--Crausoal-->

</div>

<div class="col-xs-6">



  
</div>

</div>

<div class="jumbotron" style="padding:20px;height:10px;background:#544340;margin-top:50px;opacity:0.7;margin-bottom:-5px;">
<h3 style="margin-top:-12px;color:teal">Copy Right Protected Inc. @FoodMania</h3>
</div>
</body>
</html>