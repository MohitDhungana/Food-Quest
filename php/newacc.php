<?php
$fname="";
$lname="";
$username="";
$password="";
$email="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["pwd"];
}

if($fname!="" && $lname!="" &&  $username!="" && $password!="" 
	&& $email!="")
	{

// Create connection
$conn = new mysqli("localhost","root","","database");


// multiple parameter instertion using prepared statemtn.
$stmt = $conn->prepare("INSERT INTO login(fname, lname,user,password,email) VALUES (?, ?, ?,?,?)");
$stmt->bind_param("sssss", $firstname, $lastname, $username,$password,$email);

$stmt->execute();

$stmt->close();
$conn->close();
	}
	
	echo $fname;

$fname="";
$lname="";
$username="";
$password="";
$email="";
?>