<?php
	require_once("userclass.php");
	$cookie= new USER();
	if(!$cookie->is_loggedin())
	{
		$cookie->redirect('login.php');
	}
?>