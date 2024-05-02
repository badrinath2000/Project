<?php 
	require_once("tpoclass.php");
	$login=new TPO();
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$tponame=$_POST['tponame'];
		$tpass=$_POST['pass'];
		if($udetails=$login->doLogin($tponame,$tpass))
		{	
			$tpoid= $udetails['tpo_id'];
			$salt= $udetails['salt'];
			if($login->updatesalt($salt,$tpoid))
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