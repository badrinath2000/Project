<?php require_once("lockc.php"); 
if($auth_user->is_loggedin()!=true)
{
	$auth_user->redirect("login.php");
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>System</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
	function savedata()
	{
		//alert("hello");
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'svcmpny.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				//alert(data);
				if(data=="success")
				{
					location.replace('home.php');
				}
				else
				{
					$('#error').show();
					$('#error').html(data);
					$('#error').css('color','red');	
					$('#error').fadeOut(5000);			
				}
			},
			cache : false,
			contentType:false,
			processData: false	
		});
	}
</script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php require_once("header.php"); ?>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  </div>
  <div class="panel-body">
		<form id="loginform1" name="loginform1" action="javascript:;" onsubmit="savedata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Compny Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="compny" name="compny" class="form-control1" type="text" placeholder="compny name">
								</div>
							</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Address</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="address" name="address" class="form-control1" placeholder="address">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Post</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="post" name="post" class="form-control1" placeholder="post">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Salery</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="salery" name="salery" class="form-control1" placeholder="salery">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Criteria</label>
					<input type="file" id="criteria" name="criteria">
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					</div>
				</form>
  </div>
  <div class="copy_layout">
      <p>Copyright © All Rights Reserved |</p>
  </div>
  </div>
      </div>
	  </div>
      <!-- /#page-wrapper -->
<!--rajesh.katare9@gmail.com -->
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
</body>
</html>
 <!-- background: #06d995;-->