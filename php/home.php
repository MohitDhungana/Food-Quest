sefsdfdfsdfsdfsdf
<?php?>

<html lang="en">
<head>
  <title>Food Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="showdata.js"></script>
</head>
<body style="background-image:url(images/background.jpg)">
<nav class="navbar navbar-default" style="opacity:0.7">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="aboutus.html">About US</a></li>
		</ul>	
		<ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login or Register</a></li>
		</ul>
  </div>
  </nav>
<div class="container">
<div class="row" style="height:150px;">
<h1 style="text-align:center;font-size:70px;font-family:Segoe Script">Food Quest</h1>
<h2 style="text-align:center;font-family:Gabriola;">Compare any dishes you prefer</h2>
</div>
<form>
    <div class="form-group">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="search" value="search your dish here">
			</div>
			<div class="col-sm-2">
				<button type="button" class="btn btn-default" onclick="showdata()">
					<span class="glyphicon glyphicon-search"></span> Search
				</button>
			</div>
		</div>
		<div class="row" style="height:370px;margin-top:20px;">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
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
							<img src="images/momo.jpg" alt="momo" style="height:370px;width:100%;">
							<div class="carousel-caption">
								<h2>Buff Fried C MOMO</h2>
								<h3>Hotel Bajra and Bar</h3>
								<button type="button" class="btn btn-info">Know More</button>
							</div>
						</div>

						<div class="item">
							<img src="images/pizza.jpg" alt="pizza" style="height:370px;width:100%;">
							<div class="carousel-caption">
								<h2>Chicken Cheese Pizza</h2>
								<h3>Delecious Pizza Hut</h3>
								<button type="button" class="btn btn-info">Know More</button>
							</div>
						</div>
    
						<div class="item">
							<img src="images/italian.jpg" alt="lassi" style="height:370px;width:100%;">
							<div class="carousel-caption">
								<h2>Chicken Curry</h2>
								<h3>Hotel Godwari And Lounge</h3>
								<button type="button" class="btn btn-info">Know More</button>
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
			<div class="col-sm-2"></div>
		</div>
    </div>
</div>
</body>
</html>

	


