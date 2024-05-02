<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$r_name= $_POST['name'];
	$r_add= $_POST['add'];
	$r_cont= $_POST['cont'];
	$r_email= $_POST['email'];
	$r_skill= $_POST['skill'];
	$r_coa= $_POST['coa'];
	$r_exp= $_POST['exp'];
	$r_yexp= $_POST['yexp'];
	$r_eskill= $_POST['eskill'];
	$q_pri= $_POST['pri'];
	$q_p_board= $_POST['p_board'];
	$q_p_inst= $_POST['p_inst'];
	$q_p_pass= $_POST['p_pass'];
	$q_p_pers= $_POST['p_pers'];
	$q_sec= $_POST['sec'];
	$q_s_board= $_POST['s_board'];
	$q_s_inst= $_POST['s_inst'];
	$q_s_pass= $_POST['s_pass'];
	$q_s_pers= $_POST['s_pers'];
	$q_gru= $_POST['gru'];
	$q_g_board= $_POST['g_board'];
	$q_g_inst= $_POST['g_inst'];
	$q_g_pass= $_POST['g_pass'];
	$q_g_pers= $_POST['g_pers'];
	$q_pg= $_POST['pg'];
	$q_pg_board= $_POST['pg_board'];
	$q_pg_inst= $_POST['pg_inst'];
	$q_pg_pass= $_POST['pg_pass'];
	$q_pg_pers= $_POST['pg_pers'];
	$q_phd= $_POST['phd'];
	$q_ph_board= $_POST['ph_board'];
	$q_ph_inst= $_POST['ph_inst'];
	$q_ph_pass= $_POST['ph_pass'];
	$q_ph_pers= $_POST['ph_pers'];
	
	
	$qry= mysql_query("INSERT INTO resume (r_name, r_add, r_cont, r_email, r_skills, r_activity, r_exp, r_expyear, r_expskill, r_flag) VALUES ('$r_name', '$r_add', '$r_cont', '$r_email', '$r_skills', '$r_activity', '$r_exp', '$r_expyear', '$r_expskill', '1')");
	
$r_id=mysql_insert_id();

$qqry= mysql_query("INSERT INTO qulifiation ( q_pri, q_pri_board, q_pri_inst, q_pri_pass, q_pri_pers, q_sec, q_sec_borad, q_sec_inst, q_sec_pass, q_sec_pers, q_gru, q_gru_board, q_gru_inst, q_gru_pass, q_gru_pers, q_pg, q_pg_board, q_pg_inst, q_pg_pass, q_pg_pers, q_phd, q_phd_board, q_phd_inst, q_phd_pass, q_phd_pers, q_flag) VALUES ('$q_pri', '$q_p_board', '$q_p_inst', '$q_p_pass', '$q_p_pers', '$q_sec','$q_s_board', '$q_s_inst', '$q_s_pass', '$q_s_pers', '$q_gru', '$q_g_board', '$q_g_inst', '$q_g_pass', '$q_g_pers', '$q_pg', '$q_pg_board', '$q_pg_inst', '$q_pg_pass', '$q_pg_pers', '$q_phd', '$q_ph_board', '$q_ph_inst', '$q_ph_pass', '$q_ph_pers', '1')");
	if($qry == true)
	{
		header("location: login.php"); 
	}
	else
	{
		echo "not inserted".mysql_error();
	}
}
else
	{
		echo "invalid data";
	}
?>
