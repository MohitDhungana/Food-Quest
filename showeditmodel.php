<?php
		 $foodid=$_POST['id'];
		include'DBconnect/connect.php';
       
        $sql="SELECT * FROM food WHERE Food_Id='$foodid'";
        $result=mysqli_query($conn, $sql);
        if(!$result)
              echo"error querying database";

          $row = $result->fetch_assoc();
?>
<?php ob_start(); ?>
<head>
<style>
.form-group{margin-top:30px;}

</style>
</head>
<div class="modal fade" id="details-modal" role="dialog">
      <div class="modal-dialog modal-lg">
       <!-- Modal content-->
       <div class="modal-content"style="width:700px;margin:0 auto;">
          <div class="modal-header">
            <h2 class="modal-title" style="text-align:center;font-family:Gabriola">Edit your Content</h4>
          </div>
         <div class="modal-body" style="height:400px;background-image:url('<?php echo $row['Food_Image'];?>');background-repeat:no-repeat;background-size:100% 100%">
          <!-- <div class="row"> -->
          	<!-- <div style="height:300px;width:300px;background-color:red;float:right"> -->
            <!-- <img src="<?php echo $row['Food_Image']?>"style="height:290px;width:290px"> -->
        	
        	<!-- <div style="height:300px;width:100%;float:left"> -->
        	<form class="form-horizontal" action="editdatabase.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                  <label class="control-label col-sm-2" for="foodname">Dish Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="dishname" value="<?php echo $row['Food_Name'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="price">Price:</label>
                  <div class="col-sm-8">          
                    <input type="number" class="form-control" name="dishprice" id="dishprice" value="<?php echo $row['Food_Price'];?>">
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="image">Dish image:</label>
                  <div class="col-sm-8">          
                  <input type="file" name="image" style="margin-top:5px" value="<?php echo $row['Food_Image'];?>">
                  </div>
                </div>
              <div class="form-group">
                  <label class="control-label col-sm-2" for="price">Dish Description:</label>
                  <div class="col-sm-8">          
                    <input type="textarea" class="form-control" name="description" value="<?php echo $row['Food_Description'];?>" rows="3" cols="10">
                    <input type="hidden" class="form-control" name="foodid" value="<?php echo $foodid?>">
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
        	<!-- </div> -->
        <!-- </div>	 -->
          </div>
          <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="closeModal()">Cancel</button>
          </div>
         </div>
        </div>

        
      </div>
    </div>
    <script>
  function closeModal(){
    jQuery('#details-modal').modal('hide');
    setTimeout(function(){
      jQuery('#details-modal').remove();
      jQuery('modal-backdrop').remove();
    },500);
  }
</script>
<?php
  echo ob_get_clean();
 ?>





