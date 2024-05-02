<?php
	require_once("lockc.php");
	$path="uploads/";
	$valid_formats=array("pdf");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$time=time();
		$uni=$_POST['uni'];
		$college=$_POST['college'];
		$marks=$_POST['marks'];
		$percentage=$_POST['percentage'];
		$actual_name=$_FILES['Result']['name'];
		$result=$time.$actual_name;
		$size=$_FILES['Result']['size'];
		$tmp=$_FILES['Result']['tmp_name'];
		$ext=explode(".",$actual_name);
		if(in_array($ext[1],$valid_formats))
		{ 
			if(move_uploaded_file($tmp,$path.$result))
			{
				$f=4;
				$std="BE";
				if($auth_user->insertBE($uid,$std,$uni,$college,$marks,$percentage,$result))
				{
					if($auth_user->updateflag($f,$uid))
					{
						echo "success";
					}
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