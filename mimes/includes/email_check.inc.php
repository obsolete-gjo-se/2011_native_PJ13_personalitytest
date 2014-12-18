<?php
session_start();
$s_id = session_id();
include 'pt24.inc.php';
$request = trim(strtolower($_REQUEST['email']));
$valid = 'true';
$sql_email = "SELECT email FROM user WHERE s_id = '$s_id' LIMIT 1";
$result_email = mysql_query ($sql_email);
$result_email = mysql_fetch_assoc($result_email);
$email_db = $result_email['email'];

if ($email_db != $request){
	$sql_email ="SELECT email FROM user WHERE email = '$request' LIMIT 1";
	$result_email = @mysql_query($sql_email);
	if(mysql_num_rows($result_email)==1){
		$valid = 'false';
	}
}
echo $valid;
?>