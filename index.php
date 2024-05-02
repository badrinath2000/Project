<?php
require_once("userclass.php");
$login= new USER();
 if($login -> is_loggedin()!= "")
		{
			$login->redirect('home.php');
		}
?>
	<!DOCTYPE HTML>
<title>| Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->

<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
function isCharKey(evt)
      {
	 var charCode= (evt.which) ? evt.which : event.keyCode
         if (charCode!=8 &&(charCode >122  || charCode < 97) && (charCode < 65 || charCode > 90))
		 {
            	    return false;
		  }
         return true;
      }
</script>
<script>
function isNumberKey(evt)
      {
	     var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
		 {
            return false;
		  }
         return true;
      }
</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#signupForm").validate({
                rules:{
				username: "required",
				email: {
                               required: true,
                               email:true
       			  },
				 password:{
							required: true,
							   minlength:6
				 },	
                contactno: {
                               required: true,
							   minlength:10,
                               number:true
				},
				 dob: "required",
				 enroll: "required"
                },
                messages: {
					username: "please enter Username",
				email: {
                               required: "please enter email",
                               email:"please enter valid"
       			  },
				 password: {
							required: "please enter password",
							minlength:"please enter atleast 6 Character"
				 },		
                contactno: {
                               required: "please enter Contact",
							   minlength:"please enter 10 digit number",
                               email:"please enter valid"
				},
				 dob: "please enter DOB",
				 enroll: "please enter Enroll-No"			 
                },
                	submitHandler: function(form) {
		    	logindata();
                }
            });
        });
</script>
<script type="text/javascript">
	function logindata()
	{
		var username=$("#username").val();
		var email=$("#email").val();
		var password=$("#password").val();
		var contactno=$("#contactno").val();
		var dob=$("#dob").val();
		var enroll=$("#enroll").val();
		if(username!="" && email!="" && password!="" && contactno!="" && dob!="" && enroll!=""){
		$.ajax({
			type: 'POST',
			url: 'save.php',
			data: {username:username,email:email,password:password,contactno:contactno,enroll:enroll,dob:dob},
			success: function(data){
				location.replace('login.php');
			}
		});
		}else{
		      alert("please Enter all mediatory fields");
		}
	}

</script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">Register</h2>
  <div class="app-cam">
	<form action='javascript:;' name="signupForm" id="signupForm" method="POST" onsubmit="javascript:;">
		<input type="text" class="text" id="username" name="username" value = "" placeholder="Enter User Name">
		<input type="text" class="text" id="email" name="email" value ="" placeholder="Enter Email" >
		<input type="password" id="password" name="password" maxlength="20" value = "" placeholder="Enter Password">
		<input type="text" class="text" id="contactno" maxlength="10" name="contactno" value="" placeholder="Enter Conact no" >
		<input type="text" class="text" maxlength="8" id="enroll" name="enroll" value ="" placeholder="Enter enroll No" >
		<input type="date" style="width: 100%;
    padding: 15px;
    color: #999;
    font-size: 0.85em;
    outline: none;
    font-weight: 300;
    border: none;
    background: #222224;
    margin: 0 0 1em 0;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;" id="dob" name="dob" value ="" >
		<div class="submit"><input type="submit"  value="Register"></div>
	</form>
		<div class="login-social-link" >
         If Allready Registered <a href="login.php" class="facebook">
              Login
          </a>
        </div>
		<ul class="new">
			<!-- <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">New here ?<a href="register.php"> Sign Up</a></p></li>
			<div class="clearfix"></div> -->
		</ul>
	</form>
  </div>
   <div class="copy_layout login">

            <p>Copyright &copy; <?php echo date('Y');?> All Rights Reserved  </p>
	   
   </div>
</body>
</html>
