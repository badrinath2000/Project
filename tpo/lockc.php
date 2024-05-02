<?php //error_reporting(0);
require_once("tpoclass.php");
$auth_user= new TPO();
$salt=$_COOKIE['tpo_salt'];
$userdatav=$auth_user->chktpo($salt);
$tid=$userdatav['tpo_id'];
//print_r($exp);
$username=$userdatav['tpo_name'];
?>