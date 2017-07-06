<?php
	$dbc = mysqli_connect('127.0.0.1','root',null,'food quest')
		or die('Error connecting to MySQL server');
	
	//$query = "INSERT INTO email_contents(Id,User Name)".
//	"VALUES ('245',haha)";
  $dish_name = $_POST['dishname'];
  $dish_price= $_POST['dishprice'];
  $dish_description = $_POST['description'];
  $dish_image_location = "images/";
  
  
  
  //$dish_description = "The best in china";
  
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
		  
		  $dish_image_location=$dish_image_location.$dish_name.".jpg";
         move_uploaded_file($file_tmp,"images/".$dish_name.".jpg");
         echo "Image uploading Success";
		 echo "the image is stored at:'images/$file_name'";
      }else{
         print_r($errors);
      }
   }

  
  


	$query1 = "INSERT INTO `food quest`.`food` (`Food_Name`, `Food_Price`, `Food_Description`,`Food_Image`)".
	" VALUES ('$dish_name','$dish_price','$dish_description','$dish_image_location')";
	
	//$query1 = "INSERT INTO `alien_database`.`abduction` (`First Name`, `Last Name`, `Email`, `When it Happpened`, `How long`, `How many`, `Description`, `Fang Spotted?`, `Other`)".
	//"  VALUES ('$first_name','$last_name','$email','$when_it_happened','$how_long', '$how_many', '$alien_description', '$fang_spotted','$other')";
	$result = mysqli_query($dbc, $query1)
		or die('Error querying database');
	echo('Succeded');
	mysqli_close($dbc);
	
?>