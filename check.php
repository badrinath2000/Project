<?php 
	require_once("userclass.php");
	$login=new USER();
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$uname=$_POST['uname'];
		$umail=$_POST['umail'];
		$upass=$_POST['upass'];
		if($udetails=$login->doLogin($uname,$umail,$upass))
		{	
			$uid= $udetails['u_id'];
			$salt= $udetails['salt'];
			if($login->updatesalt($uid,$salt))
			{
				echo "success";
				
			}
			else
			{
				echo "error";
			}			
		}
		else
		{
			echo"error1";
		}
	}
?>