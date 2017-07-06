	
	$(document).ready(function(){
		
	
	$("#login").click(function(){
	
	var log_user;
	var log_pass;
	
	log_user=$("#usrname").val();
	log_pass=$("#pwd").val();
	
	
		$.ajax({
		url:'logintest.php',
		data:{user:log_user,passwd:log_pass},
		type:'POST',
		
		success:function(data){
		$("#loger").html(data);
		}
		});
		
	
	});
	
	
	$("#register").click(function(){
		
		var reg_user;
		var reg_email;
		var reg_fname;
		var reg_lname;
		var reg_repwd;
		var reg_pwd;
		
		reg_user=$("#username").val();
		reg_email=$("#email").val();
		reg_fname=$("#fname").val();
		reg_lname=$("#lname").val();
		reg_repwd=$("#repwd").val();
		reg_pwd=$("#passwd").val();
		
		
		$.ajax({
		url:'php/regtest.php',
		data:{user:reg_user,email:reg_email,fname:reg_fname,lname:reg_lname,repwd:reg_repwd,pwd:reg_pwd},
		type:'POST',
		
		success:function(data1){
			
		$("#reger").html(data1);
		}
		
		
		});
	});
	
	
	
	});