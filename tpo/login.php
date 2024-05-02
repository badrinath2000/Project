<?php
	require_once("tpoclass.php");
	$login=new TPO();
	if($login -> is_loggedin()!= "")
	{
		$login->redirect('home.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TPO| Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
	function logindata()
	{
		//alert("hello");
		var tponame=$("#tponame").val();
		var pass=$("#pass").val();
		$.ajax({
			type: 'POST',
			url: 'check.php',
			data: {tponame:tponame, pass:pass},
			success:function(result)
			{
				//alert(result);
				if(result == "success")
				{
					location.replace('home.php');
				}
				else
				{
					$('#error').html(data);
					$('#error').css('color','red');							
				}
			}
			});
	}
		</script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
		<input type="text" class="text" id="tponame" name="tponame" value ="" placeholder="Enter TPO Name" >
		<input type="password" id="pass" name="pass" value ="" placeholder="Enter Password">
		<div class="submit"><input type="submit" onclick="logindata()" value="Login"></div>
		<div class="login-social-link">
          <a href="index.html" class="facebook">
              Facebook
          </a>
          <a href="index.html" class="twitter">
              Twitter
          </a>
        </div>
		<ul class="new">
			<!-- <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li> -->
			<!-- <li class="new_right"><p class="sign">New here ?<a href="register.php"> Sign Up</a></p></li> -->
			<div class="clearfix"></div>
		</ul>
  </div>
   <div class="copy_layout login">

            <p>Copyright &copy; <?php echo date('Y');?>WIT BE ELN All Rights Reserved | Design  </p>
	   
   </div>
</body>
</html>
