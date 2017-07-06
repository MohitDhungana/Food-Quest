  <style>
	.navimg
	{
	background-image:url("navigation.jpg");
	opacity:0.9;
	}
	

  </style>

<nav class="navbar navbar-inverse" style="opacity:0.7;display:black">

  <div class="container-fluid">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Food Quest</a>
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
		
		


		
      </ul>
	  
	 <ul class="nav navbar-nav navbar-right">
	 
	 
				<li class="dropdown"  style="opacity:1">
        <a class="dropdown-toggle" data-toggle="dropdown" style="color:teal;font-size:15px;display:block;cursor:pointer">
		 </span><b>Account</b><span class="caret"></span></a>
		 

		<ul class="dropdown-menu" style="position:absolute;Z-index=0;">
			<li><span class="glyphicon glyphicon-user"></span>
				<button style="background:none;border:none" id="logout">Logout</button></li>
			<li><span class="glyphicon glyphicon-cog"></span>
			<button style="background:none;border:none;cursor:pointer;display:inline-block;"
			id="chgpwd">ChangePassword</button></li>
			
        </ul>
     </li>
			
    </ul>
		
    </div>
	
  </div>
</nav>