<?php
	require_once("lockc.php");
	$path="../uploads/";
	$valid_formats=array("pdf");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$time=time();
		$compny=$_POST['compny'];
		$address=$_POST['address'];
		$post=$_POST['post'];
		$salery=$_POST['salery'];
		$actual_name=$_FILES['criteria']['name'];
		$criteria=$time.$actual_name;
		$size=$_FILES['criteria']['size'];
		$tmp=$_FILES['criteria']['tmp_name'];
		$ext=explode(".",$actual_name);
		if(in_array($ext[1],$valid_formats))
		{ 
			if(move_uploaded_file($tmp,$path.$criteria))
			{
				$f=1;
				$std="10th";
				if($auth_user->svcmpnyd($compny,$address,$post,$salery,$criteria,$f))
				{
					echo "success";
				}
				else
				{
					echo "not inserted";
				}
			} 
			else
			{
				echo "not uploaded";
			}
		}
		else
		{
			echo "Invalid format";
		}
	}
?>