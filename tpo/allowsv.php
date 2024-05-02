<?php
	require_once("lockc.php");
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$company= $_POST['company'];
		//$cmpnyz=implode(",",$company);
		$uid=$_POST['uid'];
		print_r($company);
	}
?>