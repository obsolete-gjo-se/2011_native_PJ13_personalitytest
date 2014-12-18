<?php
// Abfrage nach Bezahlt!
$sql_login = "SELECT * FROM user WHERE s_id='".session_id()."' LIMIT 1";
$result_login = mysql_query ($sql_login);
if (mysql_num_rows ($result_login) != 1){
	//Link zum Test anzeigen
	echo '<a href="/de/personalitytest/questions.php">Test</a>';
}
	else {
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
			//Link zum downlaod anzeigen
			echo '<a href="/de/personalitytest/download.php">Ihr Testergebnis</a>';
		}
	}
// Fix:
//echo '<a href="#faq.html">FAQ</a>';
echo '<span class="text2"> &#124; </span>';

//Abfrage logdIn 
$sql_login="SELECT * FROM user WHERE s_id='".session_id()."' LIMIT 1";
$result_login = mysql_query($sql_login);
if (mysql_num_rows($result_login)==1)
{
	echo 'Sie sind eingeloggt als ';
	while ($row = mysql_fetch_assoc($result_login))
	{
		echo $row["firstname"];
		echo '<a href="/de/legal/logout.php"> LogOut</a>';
		echo '<span class="text2">&#124;</span>';

	}
}
else
{
	echo '<a href="/de/legal/login.php">Login</a> <br />';
}
?>