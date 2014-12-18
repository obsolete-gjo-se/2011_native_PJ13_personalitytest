<?php
	$sql_destroy_session = "UPDATE user SET s_id = NULL WHERE s_id='" . session_id() . "'";
	mysql_query ($sql_destroy_session);
	if ($query = @mysql_query ($sql_destroy_session)) 
	{
		session_unset();
		session_destroy();
		$_SESSION = array();
		header ('location:http://' . $host . '/de/');
	} 
		else 
		{
			echo 'Ausloggen hat nicht funktioniert - bitte schließen Sie den Browser';
		}
?>