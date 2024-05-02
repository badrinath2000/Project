<?php
	require_once("lockc.php");
	$user_id=$uid;
	$stmt=$auth_user->runQuery("SELECT * FROM user WHERE u_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$path="uploads/";
	$valid_formats1=array("pdf");
	$valid_formats2=array("jpg","png","gif","bmp","JPG");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$time=time();
		$email=$_POST['email'];
		$location=$_POST['location'];
		$mobileno=$_POST['mobileno'];
		$keyskills=$_POST['keyskills'];
		$status=$_POST['status'];
		
		$actual_namer=$_FILES['Resume']['name'];
		$resu=$time.$actual_namer;
		$size1=$_FILES['Resume']['size'];
		$tmp1=$_FILES['Resume']['tmp_name'];
		$ext1=explode(".",$actual_namer);
		
		$actual_namep=$_FILES['photo']['name'];
		$photo=$time.$actual_namep;
		$size2=$_FILES['photo']['size'];
		$tmp2=$_FILES['photo']['tmp_name'];
		$ext2=explode(".",$actual_namep);
		
		if(in_array($ext1[1],$valid_formats1) && in_array($ext2[1],$valid_formats2))
		{ 
			if(move_uploaded_file($tmp1,$path.$resu) && move_uploaded_file($tmp2,$path.$photo))
			{
				$f=1;
				if($auth_user->insertresume($email,$location,$mobileno,$keyskills,$status,$resu,$photo,$f,$user_id))
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