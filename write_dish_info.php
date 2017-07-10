<?php
  
	   session_start();
    $user_id=$_SESSION['loggedIn_userId'];
    //echo "It is to be uploaded in id=:".$user_id;



  $dbc = mysqli_connect('127.0.0.1','root',null,'food quest')
		or die('Error connecting to MySQL server');
	
	//$query = "INSERT INTO email_contents(Id,User Name)".
//	"VALUES ('245',haha)";
  $dish_name = $_POST['dishname'];
  $dish_price= $_POST['dishprice'];
  $dish_description = $_POST['description'];
  $dish_image_location = "images/";
  $uploaded_by = $user_id;
  // $time = intval(microtime(true));
  //$time=strtotime(2017-07-10 14:28:53);



  //write into database
  $queryInsert = "INSERT INTO `food quest`.`food` (`Food_Name`, `Food_Price`, `Food_Description`,`Uploaded_by`)".
  " VALUES ('$dish_name','$dish_price','$dish_description','$user_id')";
  $resultInsert = mysqli_query($dbc, $queryInsert)
    or die('Error querying Insert database');

  //Get the Food-Id of the stored food;
  $queryRead ="SELECT Uploaded_Time FROM food WHERE Uploaded_By='$user_id'";
  $resultRead= mysqli_query($dbc, $queryRead)
    or die('Error querying Read database');

   if ( ($resultRead->num_rows) > 0) {
          $uploadedTime=0;
          
              while($row = $resultRead->fetch_assoc()) {
                if ($uploadedTime< strtotime($row['Uploaded_Time'])) {
                  $sqlTime =$row['Uploaded_Time'];
                  $uploadedTime=strtotime($row['Uploaded_Time']);
                }


              } 
          }
  //  $food_id=


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
		  
		  $dish_image_location=$dish_image_location.$dish_name.$uploadedTime.".jpg";
         move_uploaded_file($file_tmp,$dish_image_location);
         echo "Image uploading Success";
		 //echo "the image is stored at:'images/$file_name'";
      }else{
         print_r($errors);
      }
   }

   $queryUpdate = "UPDATE food SET Food_Image='$dish_image_location' WHERE Uploaded_Time='$sqlTime'";
   $resultRead= mysqli_query($dbc, $queryUpdate)
    or die('Error querying Update database');

	//echo('Succeded');
	mysqli_close($dbc);
  header('location:memberpage.php');
	
?>