<html lang="en">


<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "food quest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM food";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  //      echo "Dish Name=" . $row["Food_Name"]. " <br> Description=: " . $row["Food_Description"]."<br><br><br>";
		$file_location = $row["Food_Image"];
//		echo readfile("$file_location");
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<?php  echo " the image is:".$file_location ?>





<head>
  <title>Food Quest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body data-spy="scroll" style="background-image:url(images/background.jpg)">
<nav class="navbar navbar-default" style="opacity:0.7">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="aboutus.html">About US</a></li>
		</ul>
			<div class="dropdown" style="float:right">
				<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:7px">Welcome Member
				<span class="caret"></span></button>
					<ul class="dropdown-menu">
					<li><a href="#">Logout</a></li>
					<li class="divider"></li>
					<li><a href="#">Change password</a></li>
					</ul>
			</div>
	  
		</ul>
  </div>
  </nav>
<div class="container-fluid">
	<div class="jumbotron"style="backfround-color:white;height:75%;overflow-y:scroll">
		<img src="<?php echo $file_location?>" style="height:300px;width:300px;">
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">click to add dishes</button>
	</div>
</div>
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title"style="text-align:center;font-family:Gabriola;">You can add your contents here</h1>
        </div>
        <div class="modal-body">
			<form class="form-horizontal"method="POST" action = "write_dish_info.php" enctype="multipart/form-data">
	<div class="form-group">
      <label class="control-label col-sm-2" for="foodname">Dish Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="dishname" placeholder="Enter dish name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price:</label>
      <div class="col-sm-8">          
        <input type="number" class="form-control" name="dishprice" id="dishprice"placeholder="Enter dish price">
      </div>
    </div>
    <div class="form-group">        
      <label class="control-label col-sm-2" for="image">Dish image:</label>
      <div class="col-sm-8">          
			<input type="file" name="image" id="image" style="margin-top:5px";>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="price">Dish Description:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" name="description" placeholder="Describe about your dish here" rows="3" cols="10"></textarea>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  

 </body>
 </html>
 