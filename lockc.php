<?php //error_reporting(0);
require_once("userclass.php");
$auth_user= new USER();
$salt=$_COOKIE['u_salt'];
$userdatav=$auth_user->chkuserv($salt);
$uid=$userdatav['u_id'];
$exp=$auth_user->fetchexp($uid);
$username=$userdatav['u_name'];
$userpic=$userdatav['photo'];
$uemail=$userdatav['u_email'];
$contact=$userdatav['u_contact'];	
$flag=$userdatav['flag'];
$status=$userdatav['status'];
$select=$auth_user->fetchreport($uid);
if(count($select)==0){
	$cname="Not Selected";
}else{
	$cname=$select['c_name'];
}
?>
