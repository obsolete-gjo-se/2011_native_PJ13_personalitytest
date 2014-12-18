<?php 
	// Fragen auslesen: (bis dato missgglückter Versuch)
//	$sql_quest = 'SELECT short, id FROM quest ORDER BY id';
//	$result_quest = @mysql_query($sql_quest);
//	//$row = mysql_fetch_array($result_quest);
//	while ($row = mysql_fetch_array($result_quest))
//	{
//		echo " $row[0]<br>"; 
//	}
//	echo $row[1];
//	echo $row['short'];
//	echo '<ul>';
//		while ($short = mysql_fetch_assoc($result_quest))
//		{
//			echo "<li>{$short['short']}</li>";
//		}
//	echo '</ul>';
//	mysql_free_result($result_quest);
	// Variablen auf NULL setzen
	$firstname = '';
	$email = '';
	$password = '';
	// wurde der Absendebutton gedrÃ¼ckt:
	if (isset($_POST['submit'])){
		//Sicherheitsabfragen: Texteingabefeld & Textarea:
		if (isset($_POST['firstname']) && !is_array($_POST['firstname']) && trim($_POST['firstname'] != '')){
			$firstname = trim(htmlspecialchars($_POST['firstname']));}
			else{$e_firstname = 'Bitte geben Sie Ihren Vornamen ein.';}
		//Sicherheitsabfragen: Email: + ist nicht vorhanden
		if (isset($_POST['email']) && !is_array($_POST['email']) && trim($_POST['email'] != '') &&(filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL))){
			$email = strtolower(htmlspecialchars($_POST['email']));
			$sql ="SELECT email FROM user WHERE email = '$email' LIMIT 1";
			$query = @mysql_query($sql);
				if(mysql_num_rows($query)==1) {
				$e_email = 'Diese eMail Adresse ist bereits vorhanden.';
				}
			}
			else{$e_email = 'Bitte geben Sie eine korrekte Emailadresse ein.';}
		//Sicherheitsabfragen: Passwort: (min 6 Zeichen)
		if (isset($_POST['password']) && !is_array($_POST['password']) && trim($_POST['password'] != '') && strlen($_POST['password']) >= 6 ){
			$password = htmlspecialchars($_POST['password']);}
			else{$e_password = 'Bitte geben Sie ein gültiges Passwort mit mind. 6 Zeichen ein!';}
		//Sicherheitsabfragen: Fragen gesetzt
		include '../../mimes/includes/question_error.inc.php';

		//Sicherheitsabfrage vor dem Schreiben in DB
		if (include '../../mimes/includes/variablen_not_null.inc.php')
		{
			$sql_user =	"INSERT INTO user SET 
						firstname 	= '$firstname',
						email 		= '$email', 
						password 	= '$password',
						s_id 		= '$s_id'";
			if ($query = @mysql_query($sql_user)) 
			{	//echo 'Bis hier ist alles OK - Benutzer angelegt';
				$sql_ptest ="INSERT INTO ptest SET 
							email 		= '$email', 
							befang_01 		= '$befang_01', 
							mitgefuehl_02 	= '$mitgefuehl_02'";
							// hier folgen noch alle anderen
				if ($query = @mysql_query($sql_ptest)) 
				{	
					header('location:http://' . $host . '/de/personalitytest/summary.php');
				}
				else
				{
					echo 'dann muss der Fehler ja hier liegen';
				}
			}
			else
			{
				echo ' Beim Anlegen des neuen Benutzers trat leider ein Fehler auf!';
			}
		}
		else
		{
			echo ' Variablen sind nicht leer ! Beim Anlegen des neuen Benutzers/Tests trat leider ein Fehler auf!';
		}
	}
?>