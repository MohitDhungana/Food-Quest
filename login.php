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
  
  
  <style>
	.card
	{
		background:#f20272;
		border-radius:8px;
		box-shadow:2px 2px 2px #d8c1ba;
		border:2px solid rgb(201, 64, 128);
		transition: 0.7s;
		width: 100%;
		border-radius: 5px;
		margin-top:12px;
		margin-left:10px;
		opacity:0.7;
	}
	
	.card:hover
	{
		transition: 1s;
		opacity:1;
	}
  
  <style>
	
	
  
  </style>
  
  	<script>
	
	$(document).ready(function(){
		
	$("#logout").click(function(){
	$.ajax({
		
		url:'php/logout.php',
		data:{},
		type:'POST',
		success:function(data)
		{
		$("#par").html(data);
		}
		
	});});
	
	
		$("#chgpwd").click(function(){
			
			$("#changepwd").slideToggle();
			
		});
	
	
	
	$("#chgbutt").click(function(){
	$.ajax({
		
		url:'php/changepassword.php',
		data:{oldpass:$("#oldpwd").val(),newpass:$("#newpwd").val()},
		type:'POST',
		success:function(data)
		{
		$("#chgstatus").html(data);
		}
		
	});
	
		$("#oldpwd").val("");
		$("#newpwd").val("");
	});
	
	
	
	$("#hidebutt").click(function(){
		
		$("#changepwd").slideToggle();
	});
	
	
	});
	
	</script>
  
  <?php
		session_start();
	
		if(!isset($_SESSION["user"]))
		{
			echo "<script>window.location = 'register.php'</script>";
		}
	///two session variables userid for username and user for fname.
	include "lognav.php";
	?>
	
	
<?php
$userid=$_SESSION['userid'];
function upload($imgname)
{
	$conn=mysqli_connect("localhost","root","","database");
	$stmt = $conn->prepare("UPDATE login SET image = ?  WHERE user = ?");
	$stmt->bind_param('ss',$imgname,$_SESSION['userid']);
	$stmt->execute(); 
	$stmt->close();
}
$image="";
function profile()
{
	$image="";
	$conn = new mysqli("127.0.0.1","root","","database");
	$sql = "SELECT image,user FROM login";
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc())
	{
	if($row["user"]==$_SESSION['userid'])
		{
			$image=$row["image"];
		}
	}
	
	if($image=="")
	{
		return "profile.jpg";
	}
	else
	{
		return $image;
	}
}
if(isset($_POST['Submit']))
{
	$_FILES['myfile'];   ///take file from name type myfile;
	$fname=$_FILES['myfile']['name']; ///takes file name
	$f_tmp=$_FILES['myfile']['tmp_name'];  ///temp_location.
	$f_size=$_FILES['myfile']['size']; ///file size
	$f_extenion=explode(".",$fname); ///seprator file name and ext inserted into array.
	$f_extenion=strtolower(end($f_extenion)); ///extension is stored in last array so taskes data from last array.
	$f_newfile=uniqid().'.'.$f_extenion; ///generates time based unique id and assigns file name
	$store="images/".$f_newfile;
	if($f_extenion=='jpg' || $f_extenion=='gif' || $f_extenion=='png')
	{
		if($f_size>=2000000)
		{
			echo "Max file size should be 1MB.";
		}
		else
		{
			if(move_uploaded_file($f_tmp,$store))
			{
				upload($store);
			}
		}
	}
	else
	{
		echo "Unable to upload.";
	}
	
}
?>
  
</head>
<body style="background-image:url('food.jpg');background-size:cover;">
<p id="par"></p> <!-- Handle Ajax Request in success method -->
<div class="row">
	<div class="col-xs-2">
	
		<div class="card" style="width:100%;padding:0px">
		<p style="text-align:left;color:white;font-size:15px;margin-bottom:2px"><?php echo "Hello ".$_SESSION["user"].","; ?></p>
		<hr><img src="<?php echo profile();?>" class="img-responsive" 
		style="width:100%;height:148px;border-radius:5px 5px;margin-bottom:-15px;margin-top:-15px">
		<hr>
		<p style="margin-bottom:15px;border-bottom:1px solid white;color:violet;font-size:15px;text-align:center;margin-top:-10px;"><?php echo "Username : ".$_SESSION["userid"];  ?></p>
		<!--<button class="btn btn-info btn-responsive" style="width:100%">Upload Photo</button>-->
		
		
		<form action="" method="post" enctype="multipart/form-data" style="background:purple;border-radius:8px;margin-top:-10px">
		
				<p style="color:indigo;font-size:15px;text-align:center;background:pink;">Upload Photo</p>
			<input type="file" name="myfile" value="Upload Image" />
			<p><input type="submit" name="Submit" value="Upload" /></p>
		</form>
		</div>
		
		
		
		
	
	</div>
	<div class="col-xs-8">
	
  <form style="margin-top:10px;">
	<input type="text" placeholder="Search User" style="background:black;opacity:0.7;width:90%;height:40px;
		border-right:none;border:1px solid indigo;color:teal;font-size:15px;">
	<span>
		<button style="height:40px;background:hotpink;border:2px solid hotpink;
		width:10%;margin-left:-5px;padding-top:1px;opacity:0.8;padding-bottom:3px" class="glyphicon glyphicon-search">
		</button>
	</span>
	</input>
	
	<button class="btn btn-info btn-responsive" style="margin-top:10px">Update Records </button>
	<button class="btn btn-primary btn-responsive" style="margin-top:10px">Delete Records </button>
	
	<h3 style="text-align:center">Add New Foodi tem to my records.</h3>
	
	<div  class="jumbotron" style="box-shadow:4px 4px 4px #d8c1ba;border-radius:8px;padding-left:12px">
	
	<span style="color:indigo;font-size:20px">Enter Food Name:</span><br>  <input type="text" style="width:80%" ></input><br><hr>
	<span style="color:indigo;font-size:20px">Enter Price:</span><br>  <input type="text"   style="width:80%"></input>
    	
	
	<br><br>
	<button class="btn btn-danger">Submit</button>
	
	</div>
	<div class="main-container">
	
	
	
	</div>
  </form>
  
	
	
	</div>
	<div class="col-xs-2">
	
	
		<div style="border:2px solid black;border-radius:8px;background:black;
		opacity:0.7;padding:5px;margin-top:50px;display:none" id="changepwd">
			
		<span style="color:teal;font-size:20px;opacity:1;margin-left:10px">Change Password</span>
		
			
		<p id="chgstatus" style="color:hotpink;font-size:15px;text-align:center"></p>
		
		<div class="form-group"><br>
		<p id="loger" align="center" style="color:red;font-size:15px"></p>
		<input type="password" class="form-control"  placeholder="Old Password" id="oldpwd">
		</div>
		<div class="form-group">
		<input type="password" class="form-control" placeholder="New Password" id="newpwd">
		</div>
		<button  class="btn btn-info" id="chgbutt">Change</button>
		<button  class="btn btn-info" id="hidebutt">Hide</button>
	
		</div>
		
  </div>
</div>
</body>
</html>