<?php
$fname="";
$lname="";
$username="";
$pwd="";
$email="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$pwd=$_POST["passwd"];
}

if($fname!="" && $lname!="" &&  $username!="" && $pwd!="" && $email!="")
{

$servername = "localhost";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli("localhost", "root", "", "foodlist");


// prepare and bind
$stmt = $conn->prepare("INSERT INTO  login(user, fname, lname,password,email) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss",$username,$fname,$lname,$pwd,$email);


$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();

}
	
else
{
		echo "unsuccessfull";
}
echo "<script>window.location = 'register.php'</script>";
?>