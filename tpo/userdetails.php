<?php 
	require_once("lockc.php");
	$userid = $_POST['uid']; 
	//echo $userid;
	$udetails=$auth_user->fetchudetails($userid);
	echo $udetails['status'];
	//print_r($udetails);
	$expdetails=$auth_user->fetchexpdetails($userid);
	//print_r($expdetails);
	$eddetails=$auth_user->fetchedetails($userid);
	//print_r($eddetails);
?>
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>
		<script type="text/javascript">
		</script>
 	 <div class="profile">
		<div class="profile-bottom" style="width:100%">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<?php 
			$udetails=$auth_user->fetchudetails($userid);
			if($udetails['photo']==""){ ?>
			<div class="col-md-4 profile-bottom-img">
				<img src="../uploads/user.png" style="width: 160px; height:160px;" alt="">
			</div>
			<?php } else { ?>
			<div class="col-md-4 profile-bottom-img">
				<img src="../uploads/<?php echo $udetails['photo']; ?>" style="width: 160px; height:160px;" alt="">
			</div>
			<?php } ?>
			<div class="col-md-6 profile-text">
				<h6>Personal Details</h6>
				<table>
				<tr><td>Name</td>  
				<td>:</td>  
				<td><?php echo $udetails['u_name']; ?></td>
				</tr>
				
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><?php echo $udetails['u_email']; ?></td>
				</tr>
			
				<tr>
				<td>Contact</td>
				<td> :</td>
				<td><?php echo $udetails['u_contact']; ?></td>
				</tr>
			
				<tr>
				<td>Status</td>
				<td> :</td>
				<td><?php echo $udetails['status']; ?></td>
				</tr>
				
				<tr>
				<td>Skills</td>
				<td> :</td>
				<td><?php echo $udetails['keyskills']; ?></td>
				</tr>
				
				</table>
			</div>
			
			
			<div class="clearfix"></div>
			</div>
			<?php $eddetails=$auth_user->fetchedetails($userid); ?>
			<div class="profile-bottom-top">
			<div class="col-md-6 profile-text" style="margin-bottom:10px">
				<h6>Education Details</h6>
				<table>
				<tr><td>SSC</td>  
				<td>:</td>  
				<td><?php //$userdata=$auth_admin->fetchudetails($uid);
				echo $eddetails[0]['percentage']; ?>
				
				</td>
				</tr>
				<tr>
				<td>HSC</td>
				<td> :</td>
				<td><?php echo $eddetails[1]['percentage']; ?></td>
				</tr>
				<tr>
				<td>BE</td>
				<td> :</td>
				<td><?php echo $eddetails[2]['percentage']; ?>
				</td>
				</tr>
				</table>
			</div>
			<?php
			if($udetails['status']=="employee") { 
				$expdetails=$auth_user->fetchexpdetails($userid); ?>
			<div class="col-md-6 profile-text" style="margin-bottom:10px">
				<h6>Experience Details</h6>
				<table>
				<tr><td>company</td>  
				<td>:</td>  
				<td><?php //$userdata=$auth_admin->fetchudetails($uid);
				echo $expdetails['compny']; ?>
				</td>
				</tr>
				<tr>
				<td>Position</td>
				<td> :</td>
				<td><?php echo $expdetails['dignity']; ?></td>
				</tr>
				<tr>
				<td>Years</td>
				<td> :</td>
				<td><?php echo $expdetails['years']; ?>
				</td>
				</tr>
				<tr>
				<td>Salery</td>
				<td> :</td>
				<td><?php echo $expdetails['salery']; ?>
				</td>
				</tr>
				</table>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-2 profile-fo">
				<!--<h4>23,5k</h4>-->
				<p>Resume</p>
				<a class="pro1" target="blank" href="../uploads/<?php echo $udetails['resume']; ?>" ><i class="fa fa-cog"></i>Resume</a>
			</div>
			<div class="col-md-2 profile-fo">
				<!--<h4>23,5k</h4>-->
				<p>Experience certi</p>
				<a class="pro1" target="blank" href="../uploads/<?php echo $expdetails['excerti']; ?>" ><i class="fa fa-cog"></i>Experience certi</a>
			</div>
			<div class="col-md-2 profile-fo">
				<!--<h4>23,5k</h4>-->
				<p>SSC result</p>
				<a class="pro1" target="blank" href="../uploads/<?php echo $eddetails[0]['result']; ?>" ><i class="fa fa-cog"></i>SSC result</a>
			</div>
			<div class="col-md-2 profile-fo">
				<!--<h4>23,5k</h4>-->
				<p>HSC result</p>
				<a class="pro1" target="blank" href="../uploads/<?php echo $eddetails[1]['result']; ?>" ><i class="fa fa-cog"></i>HSC result</a>
			</div>
			<div class="col-md-2 profile-fo">
				<!--<h4>23,5k</h4>-->
				<p>BE result</p>
				<a class="pro1" target="blank" href="../uploads/<?php echo $eddetails[2]['result']; ?>" ><i class="fa fa-cog"></i>BE result</a>
			</div>
			<div class="clearfix"></div>
			</div>
			
		</div>
	</div>