<!DOCTYPE html>
<html lang="en">
<head>
  <title>We Compare For You | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>

<?php 
session_start(); ?>

<?php
include "navbar.php";
$user="";
$pwd="";
$dbpwd="sss";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$user=$_POST["username"];
	$pwd=$_POST["pwd"];
}
?>


<?php
$fname;
$conn = new mysqli("localhost","root","","database");

	$sql = "SELECT user,fname,password FROM login";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc())
	{
		if($row["user"]==$user)
		{
			$dbpwd=$row["password"];
			$fname=$row["fname"];
		}
	}
	
	if($dbpwd==$pwd &&  $pwd!="")
	{
		$_SESSION["user"] =$fname;
		$_SESSION["stat"] =1;
		echo "<script>window.location = 'login.php'</script>";
	}
?>


<div class="jumbotron" style="height:300px;margin-bottom:0px;padding-bottom:0px;overflow:hidden">

  <div class="row row1">
  
  <div class="col-xs-6">
  <img src="food.jpg" class="img-responsive img-thumbnail" style="margin-top:10px;width:300px;height:180px;"/>
  </div>
  
  <div class="col-xs-6">
  
  <h1  style="color:navy">Welcome</h1>
  <p class="text-danger">Compare the food qualities, prices with our best 
   comparision pricing enginee.</p>
  <button type="button" class="btn btn-success" style="white-space:normal;margin-top:2px">Get to know more..</button>

  </div>
  
  </div>
</div> <!-- jum -->



<!--<div class="container-fluid" style="margin-left:-14px;height:100%">-->

<div class="row" style="background-image:url('row2.jpg');background-size:cover;margin-top:2px">

<div class="col-xs-6">

<div class="well well-sm" style="margin-bottom:-3px;background:linear-gradient(pink,hotpink)">
<p style="text-align:center;font-size:20px;color:hotpink;">Our Features</p>
</div>
<!-- cau slider from here-->

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="border:5px solid green;border-radius:5px">
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
 
 <div class="col-xs-6" style="opacity:0.7;margin-top:2px">
 <<div class="jumbotron" style="background:lime">
 <h3 style="color:white">Start Exploring Our features</h3>
 
 <form style="border:2px solid pink;padding:5px;margin:10px" method="POST" action = "<?php echo 
 htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control"  placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-success">Login</button>
  </form>
  
 </div>
 <!--</div>-->
 
 
</div>

<div class="row">
<div class="col-xs-12" style="margin-top:-3px;opacity:0.9;background-image:url('navigation.jpg')
;height:auto;background-size:cover">
<p style="font-size:20px;padding-top:10px">@Copyright-Protected All Rights Reserved By FoodComp</p>
</div>
</div>


<!--</div> <!--Container -->






</body>
</html>