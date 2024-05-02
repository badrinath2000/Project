<?php
	require_once("tpoclass.php");
	$cookie= new TPO();
	if(!$cookie->is_loggedin())
	{
		$cookie->redirect('login.php');
	}
?>