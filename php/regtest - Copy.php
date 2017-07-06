<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$username=$_POST["user"];
	$pwd=$_POST["pwd"];
	$repwd=$_POST["repwd"];
	$email=$_POST["email"];
	
	$dbuser;
	
	$conn = new mysqli("127.0.0.1","root","","database");
	$sql = "SELECT user,password FROM login";
	$result = $conn->query($sql);
	
	$user_check=false;
	while($row = $result->fetch_assoc())
	{
		if($username==$row["user"])
		{
			$user_check=true;
			echo "User Already Exists";
			exit();
		}
	}
	
	if($fname=="" || $lname=="" ||  $username=="" || $pwd=="" || $email=="" || $repwd=="")
	{
		echo "Please fillup all the fields.";
		
	}
	
	else if($pwd!=$repwd)
	{
		echo "Please Enter same Password.";
	}
	
	else if($user_check==false)
	{
		$conn = new mysqli("localhost", "root", "", "database");
		
			$conn = new mysqli("localhost", "root", "", "database");
			$stmt = $conn->prepare("INSERT INTO  login(user, fname, lname,password,email) VALUES (?, ?, ?,?,?)");
			$stmt->bind_param("sssss",$username,$fname,$lname,$pwd,$email);
			$stmt->execute();
			echo "User Registred Succesfully.";
			$stmt->close();
			$conn->close();
	}
		
?>