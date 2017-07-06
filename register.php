
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</head>

<style>
.modal-backdrop
{
  display: none !important;
  background-color: red;
  opacity:0;
  &.in{opacity:1 !important;}
}
body.modal-open
{
  overflow: visible;
  
}
.modal
{
	opacity:1 !important;
}
.nobck
{
	background:white;
	//opacity:0.8;
	border:1px solid green;
}
.purple
{
	color:purple;
}
.button
{
	border-radius:10px;
	width:110px;
	height:40px;
	color:indigo;
}
button:hover
{
	background:white;
	border:2px solid indigo;
}
<?php
ob_start();  ///check for reinitiating of session.
session_start(); 
	if($_SESSION['user']!='')
	{
		header('location:login.php');
	}
	else
	{
		session_destroy();
	}
?>
</style>

 <script src="script.js"> </script>

<?php
include "navbar.php";
?>




<body style="background-image:url('jumb.jpeg');background-size:cover;
background-width:100%;background-repeat:no-repeat"  class="img-responsive">

<div class="container-fluid">


	<h1 style="color:indigo;text-align:center;margin-top:50px">Please,Log In to expreience more features</h1>

<div class="row" style="margin-top:50px;padding:250px;padding-top:20px;padding-bottom:0px">


<div class="col-xs-12">

<div style="border:2px solid black;border-radius:8px;background:black;height:290px;
 opacity:0.7;padding:5px;margin:20px;padding:10px">
			
	<p style="color:teal;font-size:20px;text-align:center">Log In</p>
    <form method="POST" action="logintest.php">
	<div class="form-group"><br>
	<p id="loger" align="center" style="color:red;font-size:15px"></p>
      <label for="email">User Name:</label> 
      <input type="text" class="form-control"  placeholder="Enter Username" name="login_username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="login_password">
    </div>
	
    <button  class="btn btn-info" name="login">Login</button>
	</form>
	
	  <button class="btn btn-info" data-toggle="modal" data-target="#myModal" style="align:right;" name="register">Register</button>
	  
	  </div>

  <!-- Modal -->
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register User</h4>
        </div>
        <div class="modal-body">
		
		<!-- Modal Body from here -->
        
	<div>		
		  <form method="POST" action= "php/regtest.php" >
		
		
			<p name="reger" style="color:red;font-size:15px" align="center"></p>
			<div class="form-group">
			<label  class="purple">Hotel Member</label> <br>
			<input type="radio"> User<br>
			<input type="radio">User</br>
			</div>

			<p id="reger" style="color:red;font-size:15px" align="center"></p>
			<div class="form-group">
			<label  class="purple">Firstname</label>
			<input   class="form-control nobck"  placeholder="Enter Firstname" name="fname"/>
			</div>
	
			<div class="form-group">
			<label  class="purple">Lastname</label>
			<input   class="form-control nobck"  placeholder="Enter Lastname" name="lname"/>
			</div>
	
		<div class="form-group">
		<label  class="purple">Username</label>
		<input   class="form-control nobck"  placeholder="Enter Username" name="username"/>
		</div>
	
		<div class="form-group">
		<label for="email" class="purple">Email</label>
		<input type="email" class="form-control nobck"  placeholder="Enter email" name="email"/>
		</div>
	
		<div class="form-group">
		<label  class="purple">Password</label>
		<input type="password" class="form-control nobck" placeholder="Enter Password" name="password" />
		</div>
	
		<div class="form-group">
		<label for="pwd" class="purple">Retype Password</label>
		<input type="password" class="form-control nobck" name="repwd" placeholder="Retype The password"/>
		</div>
	
		<button type="submit" class="nobck button" name="register_user">
		Register User
		</button>
	
  
  </form>
  </div>
        </div>
      </div>
      
    </div>
  </div>
  

	
  </div>
  
  </div>
  
</div>

	<div style="margin-top:50px">
	<h3 style="margin-top:30px;">@Copyright-Protected All Rights Reserved By Dev-Prodigies</h3>
	</div>

</div>
</body>
</html>