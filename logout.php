<?php
require_once("userclass.php");
$login=new USER();
if(isset($_GET['logout']) && $_GET['logout']=="true")
{
	$login->dologout();
	$login->redirect("login.php");
}
?>