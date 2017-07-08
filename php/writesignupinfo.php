	<?php
		//$dbc = mysqli_connect('127.0.0.1','root',null,'food quest')
		include('../dbconnect/connect.php');
					//or die('Error connecting to MySQL server');
		
		//$query = "INSERT INTO email_contents(Id,User Name)".
	//	"VALUES ('245',haha)";
	  
	  $first_name = $_POST['signup_firstname'];
	  $last_name = $_POST['signup_lastname'];
	  $user_name = $_POST['signup_username'];
	  $email = $_POST['signup_email'];
	  $password = $_POST['signup_password'];


		$query1 = "INSERT INTO `food quest`.`consumer` (`First_Name`, `Last_Name`, `User_Name`,`Email`,`Password`)".
		" VALUES ('$first_name','$last_name','$user_name','$email','$password')";
		
		//$query1 = "INSERT INTO `alien_database`.`abduction` (`First Name`, `Last Name`, `Email`, `When it Happpened`, `How long`, `How many`, `Description`, `Fang Spotted?`, `Other`)".
		//"  VALUES ('$first_name','$last_name','$email','$when_it_happened','$how_long', '$how_many', '$alien_description', '$fang_spotted','$other')";
		$result = mysqli_query($conn, $query1)
		or die('Error querying database');
			
		echo"<br> trying to show the alert box";
		mysqli_close($conn);
		// $accountNotification = "Hey'$first_name' '$last_name', Your Account has been succesfully created";
		$accountNotification = "Hey Your Account has been succesfully created";
		
		//Header('location:../rgister.php');
		echo "<script type='text/javascript'>alert('$accountNotification');</script>";
		
		


	?>