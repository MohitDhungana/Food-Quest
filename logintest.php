<?php

	$user=$_POST['login_username'];
	$pwd=$_POST['login_password'];
	
	if($user=="" || $pwd=="")
	{
		echo "Enter the Valid username and Password.";
		
	}
	
	else{
		
		$dbpwd="";
		
		$conn = new mysqli("127.0.0.1","root","","food quest");
		$sql = "SELECT User_Name,Password,First_Name,Last_Name,User_Id FROM consumer";
		$result = $conn->query($sql);
		$flag=0;
	
			while($row = $result->fetch_assoc())
			{
				if($row["User_Name"]==$user && $row["Password"] ==$pwd){
					
					//$fnanme = $row["First_Name"];
				//	$id = $row["User_Id"];
					$flag =1;
				}
					
	
			}
	
		if($dbpwd==$pwd &&  $pwd==$dbpwd)
		{
			session_start();
			//$_SESSION["user"]=$fname;
			//$_SESSION["userid"]=$userid;
			echo "<script>window.location = 'login.php'</script>";
		}
		else
		{
			echo "Invalid Username or password.";
		}
		
	$conn->close();	
}
	
	
	
?>