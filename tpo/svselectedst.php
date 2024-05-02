<?php
	require_once("lockc.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$company=$_POST['company'];
		$comment=$_POST['comment'];
		$uid=$_POST['uid'];
		$f=5;
		$tm=time();
		if($auth_user->svselectedst($uid,$company,$comment,$tm) && $auth_user->updateflag($f,$uid))
		{
			$auth_user->redirect('home.php');
		}
		else
		{
			echo "enter again";
		}
	} 
?>