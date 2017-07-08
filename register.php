
						<?php
							include ('DBconnect/connect.php');
							$errorMessage=" not set";
							
							if(isset($_POST['login_username'])&&  isset($_POST['login_password'])){
							$user=$_POST['login_username'];
							$pwd=$_POST['login_password'];
							
							if(empty($user) || empty($pwd))
							{
								$errorMessage = "Enter the Valid username and Password.";
								
							}
							
							else{
									
								$sql = "SELECT User_Name,Password,First_Name,Last_Name,User_Id,User_Type FROM consumer WHERE User_Name='$user' AND Password='$pwd'";
								$result = $conn->query($sql);
								$flag=0;
								$row = $result->fetch_assoc();
								if(!empty($row))
								{
									if($row["User_Type"]==1){
										session_start();
										$_SESSION['loggedIn_userId']=$row["User_Id"];
										  $_SESSION['loggedIn_userName']=$row["User_Name"];

										header('location:memberpage.php');
										exit();
									}
									else
										header('location:home.php');
									echo $row["User_Name"];

								}else{
									$errorMessage="Invalid Login Details";
								}
							
							$conn->close();	
						}
							}
							
						
							
						?>

						<?php
						$accountNotification=-1;
						if(isset($_POST['signup_firstname'])&&isset($_POST['signup_lastname'])&&isset($_POST['signup_username'])&&isset($_POST['signup_email'])&&isset($_POST['signup_password']) && isset($_POST['optradio']))
						{
							
							include('dbconnect/connect.php');
						  
						  $first_name = $_POST['signup_firstname'];
						  $last_name = $_POST['signup_lastname'];
						  $user_name = $_POST['signup_username'];
						  $email = $_POST['signup_email'];
						  $password = $_POST['signup_password'];
						  $phone_number = $_POST['signup_phonenumber'];
						  $signUpErrorMessage="signUpErrorMessage no set";
						  $radioClicked = $_POST['optradio'];
						  echo  $radioClicked;

				if((empty($_POST['signup_firstname'])|| empty($_POST['signup_lastname'])|| empty($_POST['signup_username'])||empty($_POST['signup_email'])||empty($_POST['signup_password']))){
						$signUpErrorMessage ="please fill up all the forms..";
						$accountNotification=0;
						//echo $signUpErrorMessage;
				}
				else{
							if($radioClicked=="radioUser")
								$userType=0;//User starts with vowel 'u' and 0 looks like vowel 'o'
							else
								$userType =1;
							$query1 = "INSERT INTO `food quest`.`consumer` (`First_Name`, `Last_Name`, `User_Name`,`Email`,`Password`,`Phone_Number`,`User_Type`)".
							" VALUES ('$first_name','$last_name','$user_name','$email','$password','$phone_number','$userType')";
							
							//$query1 = "INSERT INTO `alien_database`.`abduction` (`First Name`, `Last Name`, `Email`, `When it Happpened`, `How long`, `How many`, `Description`, `Fang Spotted?`, `Other`)".
							//"  VALUES ('$first_name','$last_name','$email','$when_it_happened','$how_long', '$how_many', '$alien_description', '$fang_spotted','$other')";
							$result = mysqli_query($conn, $query1)
							or die('Error querying database');
								
							//echo"trying to show the alert box";
							mysqli_close($conn);
							// $accountNotification = "Hey'$first_name' '$last_name', Your Account has been succesfully created";
							// $accountNotification = "Hey '$user_name' Account has been succesfully created";
							$accountNotification = 1;

							
							// //Header('location:../rgister.php');
							// echo "<script type='text/javascript'>alert('$accountNotification');</script>";
					
					}
					


				}

						?>



						

						<html lang="en">
						<head>
						  <title>Register</title>
						  <meta charset="utf-8">
						  <meta name="viewport" content="width=device-width, initial-scale=1">
						  <link rel="stylesheet" href="css/bootstrap.css">
						  <script src="js/jquery.min.js"></script>
						  <script src="js/bootstrap.min.js"></script>
						  <style>
								label{color:teal;font-family:Gabriola;font-size:20px;}
						  </style>
						</head>

							<nav class="navbar navbar-default" style="opacity:0.7">
								<div class="container-fluid">
									<ul class="nav navbar-nav">
										<li class="active"><a href="home.html">Home</a></li>
										<li><a href="aboutus.html">About US</a></li>
									</ul>	
									<ul class="nav navbar-nav navbar-right">
									<li><a href="register.html"><span class="glyphicon glyphicon-user"></span>Login or Register</a></li>
									</ul>
								</div>
						  </nav>
							<body style="background-image:url(images/background.jpg);background-size:cover;background-width:100%;background-repeat:no-repeat"  class="img-responsive">
								<div class="container">
									<h1 style="color:blue;text-align:center;margin-top:30px;font-family:Gabriola">please Login for more...</h1>
									<div class="row" style="margin-top:50px;">
										<div class="col-sm-3"></div>
										<div class="col-sm-6" style="background-color:black;opacity:0.8;border-radius:8px">
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="float:right;margin-top:10px;" name="signup">Sign Up </button><br><br>
											<h3 style="text-align:center"><?php echo $errorMessage; ?></h3>
											<form action="register.php" method = "POST">
												<div class="form-group">
													<label>Username :</label>
													<input type="text" class="form-control"name="login_username" placeholder="Enter Your Username">
												</div>
												<div class="form-group">
													<label>Password:</label>
													<input type="Password" class="form-control"name="login_password" placeholder="Enter Your Password">
												</div>
												<div class="form-group">
													<button class="btn btn-success"name="login">Log in</button>
												</div>
											</form>
										</div>	    

												  <!-- Modal -->
													<div class="modal fade" id="myModal" role="dialog">
														<div class="modal-dialog modal-lg">
												  
												  <!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right" name="cancel">Cancel</button>
															<h1 class="modal-title"style="text-align:center;font-family:Gabriola;">You can register Here</h1>
														</div>
														<div class="modal-body">
														<form action="register.php" method="POST">
															<? echo $signUpErrorMessage; ?>
															<label>User Type :</label> <br>
																  <div class="radio-inline">
																		<label><input type="radio" name="optradio" value="radioMember">Member Or</label>
																	</div>
																	<div class="radio-inline">
																		<label><input type="radio" name="optradio" value="radioUser">User</label>
																	</div>
															</div>
															<div class="form-group">
																<label>First Name :</label>	
																<input type="text" class="form-control" name="signup_firstname" placeholder="Enter First Name">
															</div>
															<div class="form-group">
																<label>Last Name :</label>
																		<input type="text" class="form-control" name="signup_lastname" placeholder="Enter last name">
															</div>
															<div class="form-group">
																<label>Username :</label>
																		<input type="text" class="form-control" name="signup_username" placeholder="Enter user name">
															</div>
															<div class="form-group">
																<label>Email :</label>
																		<input type="text" class="form-control" name="signup_email" placeholder="Enter your Email">
															</div>
															<div class="form-group">
															<label>Phone Number :</label>
																		<input type="text" class="form-control" name="signup_phonenumber" placeholder="Enter Phone Number (optional)">
															</div>
															<div class="form-group">
															<label>Password :</label>
																		<input type="password" class="form-control" name="signup_password" placeholder="New Password">
															</div>
															<div class="form-group">
															<label>Retype Password :</label>
																		<input type="password" class="form-control" name="signup_retypepassword" placeholder="Retype password">
															</div>
															<div class="form-group">
															<button type="submit" class="btn btn-success" name="createaccount">Create Account</button>
															


															
															
															</div>
															
															
														</div>
													</div>
														</div>
													</div>
										
										<div class="col-sm-3"></div>
										
									</div>
								</div>
							</body>
							</html>