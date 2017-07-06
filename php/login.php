<?php
$user="";
$pwd="";
$dbpwd="sss";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$user=$_POST["usrname"];
	$pwd=$_POST["pwd"];
}

$fname;
$conn = new mysqli("127.0.0.1","root","","database");

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
	}
	else
	{
	echo "<script>window.location = 'register.php'</script>";
	}
?>