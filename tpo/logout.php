<?php
require_once("tpoclass.php");
$login=new TPO();
if(isset($_GET['logout']) && $_GET['logout']=="true")
{
	$login->dologout();
	$login->redirect("index.php");
}
?>