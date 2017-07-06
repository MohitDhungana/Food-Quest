<?php
	
	echo"<br>  inside logintest.php";
	$user=$_POST['login_username'];
	$pwd=$_POST['login_password'];
	
	if($user=="" || $pwd=="")
	{
		echo "Enter the Valid username and Password.";
		
	}
	
	else{
		
		$dbpwd="";
		
		$conn = new mysqli("127.0.0.1","root","","food quest");
		$sql = "SELECT User_Name,Password FROM consumer";
		$result = $conn->query($sql);
		$flag=0;
	
			while($row = $result->fetch_assoc())
			{
				if($row["User_Name"]==$user && $row["Password"] ==$pwd)
					$flag =1;
	
			}
	
		if($flag==1)
		{
			//echo"<br> You are logged in";
			session_start();
			$_SESSION["user"]=$fname;
			$_SESSION["userid"]=$userid;
			echo "<script>window.location = '../../suraj/memberpage.html'</script>";
		}
		else
		{
			echo "Invalid Username or password.";
		}
		
	$conn->close();	
}
	
	
	
?>