<?php
	require_once("userclass.php");
	$user=new USER();
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$contactno=$_POST['contactno'];
		$enroll=$_POST['enroll'];
		$dob=$_POST['dob'];
		if($user->check($username,$email))
		{	
			if($user->register($username,$email,$password,$contactno,$enroll,$dob))
			{
				echo"success";
			}else{echo "error";}
		}
		else
		{
			echo "enter again";
		}
	}
	else
	{
		echo "email or username exists";
	}
?> 