<?php
// Zugang nur nach Bezahlung
$sql_payed = "SELECT payed FROM sitemap WHERE path='" . $path . "' AND payed=1 LIMIT 1";
$result_payed = mysql_query ($sql_payed);
if (mysql_num_rows ($result_payed) == 1){
	$sql_status = "	SELECT pay.status  
					FROM user, buy, pay 
					WHERE 
					s_id='" . session_id () . "' AND
					user.email = buy.email AND
					buy.invoice = pay.invoice AND
					pay.status = 1 
					LIMIT 1";
	$result_status = mysql_query ($sql_status);
	if (mysql_num_rows ( $result_status ) != 1){
		header('location:http://' . $host . '/de/personalitytest/offer.php');
	}
	else {
		//echo '	Seite ist payed<br />
		//			User hat bezahlt<br />
		//			payed Seite wird angezeigt';
	}
}
else {
	//echo '		Seite ist nicht payed<br />
	//				Prüfung, ob Seite om ist
	// 				Zugang nur für Mitglieder
	$sql_secure = "SELECT om FROM sitemap WHERE path='" . $path . "' AND om=1 LIMIT 1";
	$result_secure = mysql_query ($sql_secure);
	if (mysql_num_rows ($result_secure) == 1){
		$sql_logdin = "SELECT s_id FROM user WHERE s_id='" . session_id () . "' LIMIT 1";
		$result_logdin = mysql_query ( $sql_logdin );
		if (mysql_num_rows ( $result_logdin ) != 1) {
			header('location:http://' . $host . '/de/legal/login.php');
		}
		else {
			//echo '	Seite ist om<br />
			//			User ist eingeloggt<br />
			//			Sichere Seite wird angezeigt';
		}
	}
	else {
		//echo '		Seite ist nicht om<br />
		//				und wird direkt angezeigt';
	}
}


?>