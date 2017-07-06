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
<?php session_start(); ?>
<body style="background:green">
<?php 

	if($_SESSION["user"]=="")
	{
			//echo "<script>window.location = 'index.php'</script>";
	}
?>
<div class="row">
<div class="col-xs-6">
<div class="panel"></div>
</div>
</div>
</body>
</html>
