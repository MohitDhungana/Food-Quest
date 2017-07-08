      
      <?php
      $empty = "";
      //  echo "inside php";
        $servername = "localhost";
      $username = "root";
      $password = null;
      $dbname = "food quest";
        //datbase connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
          die("Connection failed: " . $conn->connect_error);
      
        class Dish{
          public $name;
          public $image;
          public $rating;
          public $price;

          function __construct($Name, $Image, $Rating, $Price) {
            
            $this->name = $Name;
            //echo "<br>".$name;
            $this->image = $Image;
            $this->rating = $Rating;
            $this->price = $Price;
          }

        } $disharray=array(50);

        //get the no. of dishes form database.
        //$login_id=$_GET["id"];
        session_start();
        $user_id=39;
        $user_id=$_SESSION['loggedIn_userId'];
       // echo $user_id;

        $user_name= $_SESSION['loggedIn_userName'];
      // echo $user_name;
        // echo " user id is:".$user_id;
        //session_destroy();

        //$queryFood = "SELECT Food_Name,Food_Price,Food_Rating,Food_Image,Food_Description FROM food WHERE Uploaded_By=$user_id";
        $queryFood = "SELECT * FROM food WHERE Uploaded_By='$user_id'";
      
      $result=mysqli_query($conn, $queryFood);
      if(!$result)
        echo"error querying database";


      $numberOfItemsStored = 0;

      if ( ($result->num_rows) > 0) {
        //$username=session
          while($row = $result->fetch_assoc()) {
            $Name = $row["Food_Name"];
            $Description =$row["Food_Description"];
            $Image = $row["Food_Image"];
            $Rating = $row["Food_Rating"];
            $Price = $row["Food_Price"];

              //echo "Dish Name=" . $row["Food_Name"]. " <br> Description=: " . $row["Food_Description"]."<br><br><br>";
            
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

      //echo "The number of items stored is ".$numberOfItemsStored;
      //echo $disharray[0]->name;
      $conn->close();
      ?>

      <!DOCTYPE html>
      <html lang="en">

      <head>
        <title>Food Quest</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>

        </style>
      </head>
      <body data-spy="scroll" style="background-image:url(images/background.jpg)">
      <nav class="navbar navbar-default" style="opacity:0.7">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="aboutus.html">About US</a></li>
          </ul>
            <div class="dropdown" style="float:right">
              <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:7px"> Welcome <?php echo $user_name; ?>
              <span class="caret"></span></button>
                <ul class="dropdown-menu">
                <li><a href="#">Logout</a></li>
                <li class="divider"></li>
                <li><a href="#">Change password</a></li>
                </ul>
            </div>
          
          </ul>
        </div>
        </nav>
      <div class="container-fluid">
        <div class="jumbotron"style="background-color:white;height:75%;overflow-y:scroll" id="">
          <!-- <img src="<?php echo $file_location?>" style="height:300px;width:300px;"> -->
          <?php
            $index=0;
            if ( ($result->num_rows) > 0) {
              //echo "entered inside if";
            foreach($disharray as $dish){
             // echo $index;
             // echo $dish->name;
              $index++;
              ?>
              <tr>
                <td> <?php  echo $dish->name;?> </td>
                <td> <img src="<?php echo $dish->image; ?>"  > </td>
                <td> <?php echo $dish->price ?> </td>

              </tr>

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
        <img src="images/empty.jpg" style="height:450px;width:450px;position:center">

          <?php
        }
        ?>
         
        </div>
        <div class="text-center">
          <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">click to add dishes</button>
        </div>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
          
            <!-- Modal content-->
            <div class="modal-content" style="background-image:url('images/cart.png');background-size:80% 100%;background-repeat:no-repeat;overflow:none;background-position:-70 0">
              <div class="modal-header">
                <h1 class="modal-title"style="text-align:center;font-family:Gabriola;color:#00cc88;font-weight:bold">Add to your list</h1>
              </div>
              <div class="modal-body">
            <form class="form-horizontal"method="POST" action = "write_dish_info.php" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="foodname">Dish Name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="dishname" placeholder="Enter dish name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="price">Price:</label>
            <div class="col-sm-8">          
              <input type="number" class="form-control" name="dishprice" id="dishprice"placeholder="Enter dish price">
            </div>
          </div>
          <div class="form-group">        
            <label class="control-label col-sm-2" for="image">Dish image:</label>
            <div class="col-sm-8">          
            <input type="file" name="image" id="image" style="margin-top:5px";>
            </div>
          </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="price">Dish Description:</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control" name="description" placeholder="Describe about your dish here" rows="3" cols="10"></textarea>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-8">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>
            
          </div>
        </div>
        

       </body>
       </html>
       