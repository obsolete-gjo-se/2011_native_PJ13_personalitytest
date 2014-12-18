<?php
// Überprüfen, ob pay/status =1, dann auf download.php weiterleiten
//echo 'Invoice: ' . $invoice;
$sql_status ="SELECT status FROM pay WHERE invoice = '$invoice' LIMIT 1";
$result_status = @mysql_query($sql_status);
if(mysql_num_rows($result_status)==1){
	
	header('location:http://' . $host . '/de/personalitytest/download.php');
}
?>