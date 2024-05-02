<?php require_once("lockc.php"); 
$uid=$_GET['uid'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TPO</title>
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
		<form action="svselectedst.php" method="POST">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Company Name</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
								<select type="text" id="company" name="company" class="form-control1" >
									<option value="">Select Company</option>
									<?php $cmpnyz=$auth_user->fetchcmpnyz(); 
									foreach($cmpnyz as $cmp) { ?>
										<option value="<?php echo $cmp['c_id']; ?>"><?php echo $cmp['c_name']; ?></option>
									<?php } ?>
								</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Comment</label>
								<div class="col-md-8">
									<div class="input-group input-icon right">
										<input type="textarea" id="comment" name="comment" >
									</div>
								</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						
						<input type="hidden" id="uid" name="uid" value="<?php echo $uid; ?>">
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					</div>
				</form>
  </div>
  <div class="copy_layout">
      <p>Copyright © 2018 jobpool All Rights Reserved |  </p>
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