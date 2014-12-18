<?php
// Variablen auf NULL setzen
$email = '';
$password = '';
$e_user_login ='';
// wurde der Absendebutton gedrÃ¼ckt:
if (isset($_POST['login'])){
	//Sicherheitsabfragen: Email: + ist nicht vorhanden
	if (isset($_POST['email']) && !is_array($_POST['email']) && trim($_POST['email'] != '') &&(filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL))){
		$email = htmlspecialchars($_POST['email']);
	}
	else{
		$e_email = 'Bitte geben Sie eine gültige Emailadresse ein!';
	}
	//Sicherheitsabfragen: Passwort: (min 6 Zeichen)
	if (isset($_POST['password']) && !is_array($_POST['password']) && trim($_POST['password'] != '') && strlen($_POST['password']) >= 6 ){
		$password = htmlspecialchars($_POST['password']);
	}
	else{
		$e_password = 'Bitte geben Sie ein gültiges Passwort mit mind. 6 Zeichen ein!';
	}
	if(	$email != '' &&	$password != ''){
		$sql="SELECT email, password FROM user WHERE email='".$email."' AND password='".$password."' LIMIT 1";
		$result=mysql_query($sql) or die(mysql_error());
		if (mysql_num_rows($result)==1){
			$sql_update="UPDATE user SET s_id='".session_id()."' WHERE email='".$email."'";
			if ($result_update = mysql_query($sql_update)){
				$sql_status = "	SELECT pay.status
				FROM user, buy, pay
				WHERE
				s_id='" . session_id () . "' AND
				user.email = buy.email AND
				buy.invoice = pay.invoice AND
				pay.status = 1
				LIMIT 1";
				$result_status = mysql_query ($sql_status);
				if (mysql_num_rows ( $result_status ) == 1){
					//Weiterleiten auf download
					header('location:http://' . $host . '/de/personalitytest/download.php');
				}
				else{
					header('location:http://' . $host . '/de/personalitytest/summary.php');
				}
			}
		}
		else{
			$e_user_login = 'LogIn war nicht erfolgreich - bitte überprüfen Sie Ihre Eingabedaten';
		}
	}
}
?>