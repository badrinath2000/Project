<?php require_once("lockc.php"); 
if($auth_user->is_loggedin()!=true)
{
 $auth_user->redirect("login.php");
} ?>
<!DOCTYPE HTML>
<html>
<head>
<title>| Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
	function savedata()
	{
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'savedata.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				alert(data);
				if(data=="success")
				{
					location.reload();
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
	function svexpdata()
	{
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'svexprnc.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				alert(data);
				if(data=="success")
				{
					location.reload();
				}
				else
				{
					//alert(data);
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
	function save10thdata()
	{
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'save10thdata.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				alert(data);
				if(data=="success")
				{
					location.reload();
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
	function save12thdata()
	{
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'save12thdata.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				if(data=="success")
				{
					alert(data);
					location.reload();
				}
				else
				{
					alert(data);
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
	function saveBEdata()
	{
		var formData= new FormData($('#loginform1')[0]);
		$.ajax({
			url:'saveBEdata.php',
			type:'POST',
			data:formData,
			async: false,
			success:function(data)
			{ 
				if(data=="success")
				{
					alert(data);
					location.reload();
				}
				else
				{
					alert(data);
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
  <?php if($status=="employee" && $flag==1 && $exp=="") { ?>
		<form id="loginform1" name="loginform1" action="javascript:;" onsubmit="svexpdata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Compny</label>
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
							<label class="col-md-2 control-label">Dignity</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="dignity" name="dignity" class="form-control1" placeholder="dignity">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Working Years</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="years" name="years" class="form-control1" placeholder="years of working">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Salary</label>
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
					<label for="exampleInputFile">Experience certificate</label>
					<input type="file" id="excerti" name="excerti">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
					</div>
				</form>
  <?php } else{ ?>
  <?php if($flag==0) { ?>
  <form id="loginform1" name="loginform1" action="javascript:;" onsubmit="savedata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label"> Full Address </label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="email" name="email" class="form-control1" type="text" placeholder="Full Address">
								</div>
							</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Location</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="location" name="location" class="form-control1" placeholder="Location">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Mobile no</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="mobileno" name="mobileno" class="form-control1" placeholder="Mobile no">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Key Skills</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="keyskills" name="keyskills" class="form-control1" placeholder="key skills">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Status</label>
							<div class="col-md-8">
								<div class="input-group">							
									<select type="text" id="status" name="status" class="form-control1" >
									<option value="">Select status</option>
									<option value="student">Student</option>
									<option value="employee">Alumni</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Resume</label>
					<input type="file" id="Resume" name="Resume">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Photo</label>
					<input type="file" id="photo" name="photo">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
					</div>
				</form>
  <?php } else if($flag==1) { ?>
		<h3>10th details</h3>
  <form id="loginform1" name="loginform1" action="javascript:;" onsubmit="save10thdata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Name of board</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="uni" name="uni" class="form-control1" type="text" placeholder="Name of board ">
								</div>
							</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">School</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="school" name="school" class="form-control1" placeholder="school">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Marks</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="marks" name="marks" class="form-control1" placeholder="marks">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">percentage</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="percentage" name="percentage" class="form-control1" placeholder="percentage">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Result</label>
					<input type="file" id="Result" name="Result">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
					</div>
				</form>
  <?php }else if($flag==2) { ?>
				<h3>12th /Diploma details</h3>
  <form id="loginform1" name="loginform1" action="javascript:;" onsubmit="save12thdata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Name of board</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="uni" name="uni" class="form-control1" type="text" placeholder="Name of board">
								</div>
							</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">College</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="college" name="college" class="form-control1" placeholder="college">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Marks</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="marks" name="marks" class="form-control1" placeholder="marks">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">percentage</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="percentage" name="percentage" class="form-control1" placeholder="percentage">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Result</label>
					<input type="file" id="Result" name="Result">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
					</div>
				</form>
  <?php } else if($flag==3){ ?>
				<h3>BE details</h3>
						<form id="loginform1" name="loginform1" action="javascript:;" onsubmit="saveBEdata()" method="POST" enctype="multipart/form-data">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-md-2 control-label">Board</label>
							<div class="col-md-8">
								<div class="input-group input-icon right">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="uni" name="uni" class="form-control1" type="text" placeholder="University">
								</div>
							</div>
							<!--<div class="col-sm-2">
								<p class="help-block">With tooltip</p>
							</div>-->
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">college</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="college" name="college" class="form-control1" placeholder="College">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Aggregate Marks</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="marks" name="marks" class="form-control1" placeholder="Aggregate Marks (till 6th se)">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label">Aggregate percentage</label>
							<div class="col-md-8">
								<div class="input-group">							
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" id="percentage" name="percentage" class="form-control1" placeholder="percentage">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">Result</label>
					<input type="file" id="Result" name="Result">
					<p class="help-block">Example block-level help text here.</p>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
					<button type="submit" class="btn-default btn">Submit</button>
					<button class="btn-default btn">Cancel</button>
					<button class="btn-inverse btn">Reset</button>
					</div>
				</form>
				<?php } else{ 
				$udetails=$auth_user->fetchudetails($uid);
				$expdetails=$auth_user->fetchexpdetails($uid);
				$eddetails=$auth_user->fetchedetails($uid);
				//print_r($eddetails); ?>
					<div class="widget_4">
		   	 <div class="col-md-4 widget_1_box1">
		   	 	<div class="coffee">
				<div class="coffee-top">
					<?php if($udetails['photo']=="") { ?>
					<a href="#"><img class="img-responsive" style="width:100%;" src="images/pic4.jpg" alt="">
					<div class="doe">
						<h6><?php echo $udetails['u_name']; ?></h6>
						<p><?php echo $expdetails['dignity']; ?></p>
					</div>
					<i></i></a>
					<?php } else { ?>
					<a href="#"><img class="img-responsive" style="width:100%;" src="uploads/<?php echo $udetails['photo']; ?>" alt="">
					<div class="doe">
						<h6><?php echo $udetails['u_name']; ?></h6>
						<p><?php echo $expdetails['dignity']; ?></p>
					</div>
					<i></i></a>
					<?php } ?>
				</div>
				<div class="follow">
					<div class="col-xs-12 two">
						<p><?php echo $uemail; ?></p>
					</div>
					<div class="col-xs-12 two">
						<p><?php echo $contact; ?></p>
					</div>
					<div class="col-xs-12 two">
						<p>Selected In</p>
						<span><?php echo $cname; ?></span>
					</div>
					<div class="clearfix"> </div>
				</div>
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
                        <li>SSC  <div class="text-success pull-right"><?php echo $eddetails[0]['percentage']; ?> %  <a href="uploads/<?php echo $eddetails[0]['result']; ?> "><i class="fa fa-level-up"></i></a></div></li>
                        <li>HSC<div class="text-success pull-right"><?php echo $eddetails[1]['percentage']; ?> %  <a href="uploads/<?php echo $eddetails[1]['result']; ?> "><i class="fa fa-level-up"></i></a></div></li>
                        <li>BE<div class="text-success pull-right"><?php echo $eddetails[2]['percentage']; ?> %  <a href="uploads/<?php echo $eddetails[2]['result']; ?> "><i class="fa fa-level-up"></i></a></div></li>
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
				<?php }?>
			</div>
			<?php }?>
  </div>
  <div class="copy_layout">
      <p>Copyright © 2018 WIT BE CSE. All Rights Reserved | Design by  </p>
  </div>
  </div>
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
 <!-- background: #06d995;-->