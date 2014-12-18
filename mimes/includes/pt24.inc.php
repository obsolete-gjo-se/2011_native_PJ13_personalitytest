<?php
switch ($host) {
	// auf www.big5-test.com nehme die live DB
	case 'www.big5-test.com':
		$server = "mysql5.ja2.cc:3306";
		$datenbank = "db341187";
		$user = "db341187";
		$password = "XJD03oBj";
		break;
	// auf www.ja2.cc nehme die test DB
	case 'www.ja2.cc':
		$server = "mysql5.ja2.cc:3306";
		$datenbank = "db341187_1";
		$user = "db341187_1";
		$password = "XJD03oBj";
		break;	
	default:
		echo'Zugriff auf Datenbank verweigert';
	break;
}
$connection = mysql_connect($server, $user, $password);
if ($connection) {
	$db_selected = mysql_select_db($datenbank, $connection);
}
else {
	die('Verbindung schlug fehl: ' . mysql_error());
}
if (!$db_selected) {
	die ('Kann die Datenbank nicht benutzen : ' . mysql_error());
}
?>