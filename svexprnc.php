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
		$compny=$_POST['compny'];
		$dignity=$_POST['dignity'];
		$years=$_POST['years'];
		$salery=$_POST['salery'];
		$actual_name=$_FILES['excerti']['name'];
		$excerti=$time.$actual_name;
		$size=$_FILES['excerti']['size'];
		$tmp=$_FILES['excerti']['tmp_name'];
		$ext=explode(".",$actual_name);
		if(in_array($ext[1],$valid_formats))
		{ 
			if(move_uploaded_file($tmp,$path.$excerti))
			{
				if($auth_user->insertexprnc($user_id,$compny,$dignity,$years,$salery,$excerti))
				{
					//$f=2;
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