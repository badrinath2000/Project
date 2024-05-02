<?php
	require_once("lockc.php");
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$cid=$_POST['cid'];
		
		
			if($auth_user->del_c($cid))
			{
				echo"success";
			}
			else{echo "error";}
		
	}
	else
	{
		echo "something went wrong...";
	}
?> 