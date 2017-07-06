<?php
ob_start();
session_start();
$user=$_SESSION["userid"];


///two session variables userid for username and user for fname.

$db_pass="";
?>

<?php 
	$newpass=$_POST["newpass"];
	$oldpass= $_POST["oldpass"];
	
	if($newpass=="" || $oldpass=="")
	{
		echo "Empty Fields !!";
		exit();
		
	}
	
	else
	{
	
		$dbpwd="";
		$conn = new mysqli("127.0.0.1","root","","database");
		$sql = "SELECT user,password FROM login";
		$result = $conn->query($sql);
		
		while($row = $result->fetch_assoc())
		{
			if($row["user"]==$user)
			{
				$dbpwd=$row["password"];
			}
		}
		
		if($dbpwd==$oldpass)
		{
			
				$stmt = $conn->prepare("UPDATE login SET password = ?  WHERE user = ?");
				$stmt->bind_param('ss',$newpass,$user);
				$stmt->execute(); 
				$stmt->close();
			echo "Password Changed";
		}
		
		else
		{
			echo "Please type valid old password";
		}
			
	
		}
	
?>