<?php
    echo"<br><br>inside [php] block<br><br>";
    if($_POST){
        echo"<br> Something has been posted";
        if(isset($_POST['buttonEdit'])){
            edit();
        }elseif(isset($_POST['buttonDelete'])){
            delete();
        }
    }else{
        echo"<br> nothing has been posted yet";
    }
    
echo"<br> Post checking finished";

 
    function edit()
    {
       echo "Trying to delete";
    }
    function delete()
    {
       echo "Trying to read ";
    }
 
?>
 
 <html>
 <head>

              <title>Food Quest</title>
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
<form method="POST" action ="buttonTest.php">
<button type="button" class="btn btn-warning" style="float:left;margin-left:110px" value="buttonEdit" name="buttonEdit" id="buttonEdit">&nbsp&nbspEdit-Test&nbsp&nbsp</button>
<button type="button" class="btn btn-danger"style="float:right;margin-right:90px"value="buttonDelete" name="buttonDelete" id="buttoDelete">Delete-Test</button>
</form>
<br>

</body>

</html>

