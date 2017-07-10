<?php

if(isset($_POST['searchBar'])){
	include'DBconnect/connect.php';
	//echo".";

	$empty=0;
	$toSearch= $_POST["searchBar"];
	$queryFood = "SELECT * FROM food WHERE Food_Name='$toSearch'";
	
	

	class Dish{
              public $name;
              public $image;
              public $rating;
              public $price;

              function __construct($Name, $Image, $Rating, $Price) {
                
                $this->name = $Name;
                $this->image = $Image;
                $this->rating = $Rating;
                $this->price = $Price;
              }
          }$dishArray = array(20);

			$result=mysqli_query($conn, $queryFood);
          	if(!$result)
            echo"error querying database";


          $numberOfItemsStored = 0;

          if ( ($result->num_rows) > 0) {
              while($row = $result->fetch_assoc()) {
                $Name = $row["Food_Name"];
                $Description =$row["Food_Description"];
                $Image = $row["Food_Image"];
                $Rating = $row["Food_Rating"];
                $Price = $row["Food_Price"];
// 
                 // echo "Dish Name=" . $row["Food_Name"]. " <br> Description=: " . $row["Food_Description"]."<br><br><br>";
                
                  $disharray[$numberOfItemsStored] = new Dish($Name, $Image, $Rating, $Price);
                  $numberOfItemsStored++;

                $file_location = $row["Food_Image"];
          //    echo readfile("$file_location");
              }
          } else {
              //echo "<br><br><br>0 results";
              $disItem = "There are no items yet...";
              
              //echo $disItem;
          }
    }else{
      Header('location:home.php');
    }


 ?>


 <html>
 	<head>

              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
             <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <script src="showdata1.js"></script>
              <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
               <!-- // <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

              <style>
                    h3{text-align:center;font-family:Comic Sans MS;font-weight: bold;color:#454977;}
              </style>

 	</head>
 	<body>
    <nav class="navbar navbar-default" style="opacity:0.7">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="aboutus.html">About US</a></li>
    </ul> 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Login or Register</a></li>
    </ul>
  </div>
  </nav>

 		<div class="container-fluid">
            
              <!-- <img src="<?php echo $file_location?>" style="height:300px;width:300px;"> -->
              
              <?php $itemRemaining=$numberOfItemsStored;
                
                if ( ($result->num_rows) > 0) {

                  while($itemRemaining>0){
                    $columnCount=3;?>
                  
                  <div class="row">
                  <?php while($columnCount>0&& $itemRemaining>0){?>
                  <div class="img-thumbnail" style="background-color:#e6ffff;border:6px solid #454977;border-radius: 32px; margin-right:10supx; margin-left:10px">
                      <h3><?php echo $disharray[$itemRemaining-1]->name; ?></h3> <br> 
                      <img src = "<?php echo $disharray[$itemRemaining-1]->image ?>"class="img-rounded" style="height:200px;width:320;margin-left:25px;">

                      <div class="text-center">
                      <?php $Rating= $disharray[$itemRemaining-1]->rating;
                      include('starTest.php');?>

                      <h3 style="margin-top:-50px"> Price : Rs <?php echo $disharray[$itemRemaining-1]->price; ?> /-</h3>
                    </div >
                      <hr>
                      
                      <!-- <button type="button" class="btn btn-warning" style="float:left;margin-left:110px"onclick="edit()" onclick="detailsmodal(<?=[$itemRemaining-1]?>)"&nbsp&nbspEdit&nbsp&nbsp</button> -->
                      <div class="text-center">
                      <button type="button" class="btn btn-primary">Details</button>
                  		</div>
                  </div>
                  <?php $itemRemaining--; $columnCount--;}?>
                  </div>
                  <br><br><br>
            
      
                    <?php
                  }
                }


                  else{
                   // echo $disItem ;
                    $empty=1;

                }

              ?>
              <?php
              if($empty==1)
            { 
            ?>

            <strong> Your dish list is empty.... You can add by clicking the Green Button below</strong>
            <br>
            <img src="images/empty.jpg" style="height:450px;width:450px;position:center">

              <?php
            }
            ?>
        </div>

 	</body>