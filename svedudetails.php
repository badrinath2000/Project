<?php
	require_once("lockc.php");
	$user_id=$uid;
	$stmt=$auth_user->runQuery("SELECT * FROM user WHERE u_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$path="uploads/";
	$valid_formats=array("pdf");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$time=time();
		$uni=$_POST['uni'];
		$school=$_POST['school'];
		$marks=$_POST['marks'];
		$percentage=$_POST['percentage'];
		$actual_name=$_FILES['Result']['name'];
		$result=$time.$actual_namecollege
		$size=$_FILES['Resume']['size'];
		$tmp=$_FILES['Resume']['tmp_name'];
		$ext=explode(".",$actual_name);
		if(in_array($ext[1],$valid_formats))
		{ 
			if(move_uploaded_file($tmp,$path.$resu))
			{
				$f=2;
				if($auth_user->insert10th($uni,$school,$marks,$percentage,$result,$f,$user_id))
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