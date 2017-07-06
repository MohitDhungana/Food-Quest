<?php
	echo"<br> Inside regtest.php ";
	$dbc = mysqli_connect('127.0.0.1','root',null,'food quest')
		or die('Error connecting to MySQL server');
	
	//$query = "INSERT INTO email_contents(Id,User Name)".
//	"VALUES ('245',haha)";
  
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  
  


  
  


	$query1 = "INSERT INTO `food quest`.`consumer` (`First_Name`, `Last_Name`, `User_Name`,`Email`,`Password`)".
	" VALUES ('$first_name','$last_name','$user_name','$email','$password')";
	
	//$query1 = "INSERT INTO `alien_database`.`abduction` (`First Name`, `Last Name`, `Email`, `When it Happpened`, `How long`, `How many`, `Description`, `Fang Spotted?`, `Other`)".
	//"  VALUES ('$first_name','$last_name','$email','$when_it_happened','$how_long', '$how_many', '$alien_description', '$fang_spotted','$other')";
	$result = mysqli_query($dbc, $query1)
		or die('Error querying database');
	echo('Database writing Succeded');
	echo"<br> exiting regtest.php";
	mysqli_close($dbc);
	
?>