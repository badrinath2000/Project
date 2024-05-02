<?php require_once("lockc.php"); 
$uid=$_POST['uid'];
if($auth_user->is_loggedin()!=true)
{
	$auth_user->redirect("login.php");
}?>
<!DOCTYPE HTML>
<html>
<head>
<title>| Forms </title>
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
<script src="js/jquery.min.js"></script>
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
     <!-- Navigation -->

        <div class="graphs">
	     <div class="xs">
  </div>
  <div class="panel-body">
  <?php
				$udetails=$auth_user->fetchudetails($uid);
				$expdetails=$auth_user->fetchexpdetails($uid);
				$eddetails=$auth_user->fetchedetails($uid);
				//print_r($eddetails); ?>
					<div class="widget_4">
		   	 <div class="col-md-4 widget_1_box1">
		   	 	<div class="coffee">
				<div class="coffee-top">
				<?php if($udetails['photo']=="") { ?>
					<a href="#"><img class="img-responsive" style="width:100%;" src="images/1.png" alt="">
					<div class="doe">
						<h6><?php echo $udetails['u_name']; ?></h6>
						<p><?php echo $expdetails['dignity']; ?></p>
					</div>
					<i></i></a>
				<?php } else { ?>
					<a href="#"><img class="img-responsive" style="width:100%;" src="../uploads/<?php echo $udetails['photo']; ?>" alt="">
					<div class="doe">
						<h6><?php echo $udetails['u_name']; ?></h6>
						<p><?php echo $expdetails['dignity']; ?></p>
					</div>
					<i></i></a>
				<?php } ?>
				</div>
				<!--<div class="follow">
					<div class="col-xs-4 two">
						<p>Followers</p>
						<span>1,367</span>
					</div>
					<div class="col-xs-4 two">
						<p>Tweets</p>
						<span>967</span>
					</div>
					<div class="col-xs-4 two">
						<p>Following</p>
						<span>367</span>
					</div>
					<div class="clearfix"> </div>
				</div>-->
		       </div>
		   	 </div>
		   	 <div class="col-md-1 stats-info3"> 
		   	 	
		   	 </div>
		   	 <div class="col-md-7 stats-info stats-info1">
                <div class="panel-heading">
                    <h4 class="panel-title">Education Details</h4>
                </div>
                <div class="panel-body panel-body2">
                    <ul class="list-unstyled">
                        <li>SSC<div class="text-success pull-right"><?php echo $eddetails[0]['percentage']; ?><i class="fa fa-level-up"></i></div></li>
						<td><button class="btn-success btn" ><a href="../uploads/<?php echo $eddetails[0]['result']; ?>"><span>More details</span></a></button></td>
                        <li>HSC<div class="text-success pull-right"><?php echo $eddetails[1]['percentage']; ?><i class="fa fa-level-up"></i></div></li>
						<td><button class="btn-success btn"><a href="../uploads/<?php echo $eddetails[1]['result']; ?>"><span>More details</span></a></button></td>
                        <li>BE<div class="text-success pull-right"><?php echo $eddetails[2]['percentage']; ?><i class="fa fa-level-up"></i></div></li>
						<td><button class="btn-success btn"><a href="../uploads/<?php echo $eddetails[2]['result']; ?>"><span>More details</span></a></button></td>
                    </ul>
                </div>
            </div>
		   	 <div class="clearfix"> </div>
			 <div class="widget_4">
		   	  <div class="col-md-4 widget_1_box1">
			  </div>
		   	 <div class="col-md-1 stats-info3"> 
		   	 	
		   	 </div>
			 <?php if($udetails['status']=="employee") { ?>
		   	 <div class="col-md-7 stats-info stats-info1">
                <div class="panel-heading">
                    <h4 class="panel-title">Experience Details</h4>
                </div>
                <div class="panel-body panel-body2">
                    <ul class="list-unstyled">
                        <li>company<div class="text-success pull-right"><?php echo $expdetails['compny']; ?><i class="fa fa-level-up"></i></div></li>
                        <li>Dignity<div class="text-success pull-right"><?php echo $expdetails['dignity']; ?><i class="fa fa-level-up"></i></div></li>
                        <li>salery<div class="text-success pull-right"><?php echo $expdetails['salery']; ?><i class="fa fa-level-up"></i></div></li>
                    </ul>
                </div>
            </div>
			 <?php } ?>
		   </div>
			</div>
  </div>
  <div class="copy_layout">
      <p>Copyright ©  All Rights Reserved | Design by <a href="#" target="_blank"></a> </p>
  </div>
  </div>

      <!-- /#page-wrapper -->
<!--rajesh.katare9@gmail.com -->
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
</body>
</html>
