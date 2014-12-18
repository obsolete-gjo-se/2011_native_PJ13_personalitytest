<?php 
//Email auslesen
	$sql_email = "SELECT email FROM user WHERE s_id='" . session_id () . "' LIMIT 1";
	$result_email = mysql_query ($sql_email);
	$result_email = mysql_fetch_assoc($result_email);
	$email = $result_email['email'];
	$email_old = $email;
// ptest_id auslesen
	$sql_ptest_id = "SELECT id FROM ptest WHERE email = '$email' LIMIT 1";
	$result_ptest_id = mysql_query ($sql_ptest_id);
	$result_ptest_id = mysql_fetch_assoc($result_ptest_id);
	$ptest_id = $result_ptest_id['id'];
// eindeutige Bestellnummer (Test-ID)
	$invoice = $ptest_id;
	$_SESSION['invoice'] = $invoice;
// Artikel aus DB auslesen (Artikel 01)
$sql_item = "SELECT * FROM item WHERE id=1 LIMIT 1";
$result_item = mysql_query ($sql_item);
while ($row = mysql_fetch_assoc($result_item)) {
    $item1_id 				= $row["id"];
    $item1_name 			= $row["name"];
    $item1_desc 			= $row["desc"];
    $item1_amount 			= $row["amount"];
    $item1_currency_code	= $row["currency_code"];
}
// Artikel aus DB auslesen (Artikel 02)
$sql_item = "SELECT * FROM item WHERE id=2 LIMIT 1";
$result_item = mysql_query ($sql_item);
while ($row = mysql_fetch_assoc($result_item)) {
	$item2_id 				= $row["id"];
	$item2_name 			= $row["name"];
	$item2_desc 			= $row["desc"];
	$item2_amount 			= $row["amount"];
	$item2_currency_code	= $row["currency_code"];
}
// Artikel aus DB auslesen (Artikel 03)
$sql_item = "SELECT * FROM item WHERE id=3 LIMIT 1";
$result_item = mysql_query ($sql_item);
while ($row = mysql_fetch_assoc($result_item)) {
	$item3_id 				= $row["id"];
	$item3_name 			= $row["name"];
	$item3_desc 			= $row["desc"];
	$item3_amount 			= $row["amount"];
	$item3_currency_code	= $row["currency_code"];
}
// Formularüberprüfung:
// wurde der Absendebutton gedrückt:
if (isset($_POST['submit'])){
	//Sicherheitsabfragen: Produktauswahl getroffen, in globaler und Sessionvariable zur Verfügung stellen
	if (isset($_POST['product']) && !is_array($_POST['product']) && trim($_POST['product'] != '')){
		$product = htmlspecialchars($_POST['product']);
		$_SESSION['product'] = $product;
	}
	else{
		$e_product = 'Bitte Wählen Sie ein Produkt.';
	}
	//Sicherheitsabfragen: Zahlungsauswahl getroffen, in globaler und Sessionvariable zur Verfügung stellen
	if (isset($_POST['pay']) && !is_array($_POST['pay']) && trim($_POST['pay'] != '')){
		$pay = htmlspecialchars($_POST['pay']);
		$_SESSION['pay'] = $pay;
		//Wenn pay == Gutschein, Eingabe kontrollieren
		if ($pay == 'voucher') {
			//Sicherheitsabfragen: Gutscheincode, in globaler und Sessionvariable zur Verfügung stellen
			if (isset($_POST['voucher_code']) && !is_array($_POST['voucher_code']) && trim($_POST['voucher_code'] != '')){
				$voucher_code = htmlspecialchars($_POST['voucher_code']);
				// Sicherheitsabfrage, ob Voucher ok ist
				$sql_voucher = "	SELECT str 
										FROM voucher 
										WHERE 
											str='" . $voucher_code . "' AND 
											reserv IS NULL AND 
											used IS NULL 
									LIMIT 1";
				$result_voucher = mysql_query ($sql_voucher);
				if(mysql_num_rows($result_voucher)==1){
					// wenn ok, in Sessionvariable schreiben
					$_SESSION['voucher_code'] = $voucher_code;
				}
				else{
					// wenn nicht ok, Variable auf NULL und Fehler schreiben
					$e_voucher_code = 'Dieser Gutscheincode ist nicht gültig';
					$voucher_code ='';
				}
				
			}
			else{
				$e_voucher_code = 'Bitte geben Sie einen Gutscheincode ein.';
			}
		}
	}
	else{
		$e_pay = 'Bitte Wählen Sie eine Zahlungsart.';
	}		
	//Sicherheitsabfragen: Email: + ist nicht vorhanden / geändert, in globaler und Sessionvariable zur Verfügung stellen
	if (isset($_POST['email']) && !is_array($_POST['email']) && trim($_POST['email'] != '') &&(filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL))){
		$email = htmlspecialchars($_POST['email']);
		$_SESSION['email'] = $email;
		$sql_email = "	SELECT email 
							FROM user 
							WHERE 
								s_id='" . session_id() . "' 
						LIMIT 1";
		$result_email = mysql_query ($sql_email);
		$result_email = mysql_fetch_assoc($result_email);
		$email_db = $result_email['email'];
			if ($email_db != $email){
				$sql_email ="	SELECT email 
									FROM user 
									WHERE 
										email = '$email' 
								LIMIT 1";
				$result_email = @mysql_query($sql_email);
				if(mysql_num_rows($result_email)==1){
					$e_email = 'Diese eMail Adresse ist bereits vorhanden.';
				}
				else{
					//update email, 
					//  a: Session Variable
					//  b: in user where session_id = session_id
					//	c: in ptest where email = email_old
					$_SESSION['email'] = $email;
					$sql_user =	"	UPDATE user 
										SET
											email = '$email'
										WHERE 
											s_id = '$s_id'
									";
					if ($query = @mysql_query($sql_user)){	
						$sql_ptest = "	UPDATE ptest 
											SET
												email = '$email'
											WHERE 
												email = '$email_old' 
										";
						if ($query = @mysql_query($sql_ptest)){	
							//echo 'email in ptest wurde geändert';
						}
						else{
							echo 'Fehler beim ändern der Mail in ptest';
						}
					}
					else{
						echo 'Fehler beim ändern der Mail in user';
					}

				}
			}
	}
	else{
		$e_email = 'Bitte geben Sie eine korrekte Emailadresse ein.';
		$email = htmlspecialchars($_POST['email']);
	}
	//Sicherheitsabfragen: AGB akzeptiert, in globaler und Sessionvariable zur Verfügung stellen
	if (isset($_POST['agb']) && !is_array($_POST['agb']) && trim($_POST['agb'] == 'ok')){
		$agb = htmlspecialchars($_POST['agb']);
		$_SESSION['agb'] = $agb;
	}
	else{
		$e_agb = 'Bitte bestätigen Sie die AGB.';
	}
	// Sicherheitsabfrage Variablen gesetzt oder leer - ist das komplett => Weiterleitung auf order.php
	if(	$product != '' && $pay != '' && $email != '' && $agb != '' && $e_product == '' && $e_pay == '' && $e_email == '' && $e_agb == '' && $e_voucher_code =='' ){
		// gewählte Produktdaten auslesen
		$sql_item = "SELECT * 
						FROM item 
						WHERE 
							id = '$product' 
					LIMIT 1";
		$result_item = mysql_query ($sql_item);
		$result_item = mysql_fetch_assoc($result_item);
		$item_id 			= $result_item['id'];
		$item_name 			= $result_item['name'];
		$item_desc 			= $result_item['desc'];
		$item_amount 		= $result_item['amount'];
		$item_currency_code = $result_item['currency_code'];
		if ($query = @mysql_query($sql_item)){
			// hier kommt die Unterscheidung ob invioce vorhanden oder nicht
			// nicht vorhanden (neue Bestellung) 
			// vorhanden (aus Order zurück auf Offer um BE zu ändern)
			$sql_invoice ="	SELECT invoice 
								FROM buy 
								WHERE 
									invoice = '$invoice' 
							LIMIT 1";
			$result_invoice = @mysql_query($sql_invoice);
			if(mysql_num_rows($result_invoice)==1){
				// buy updaten
				$sql_buy = "UPDATE buy 
								SET
									email 			= '$email',
									item_id			= '$item_id',
									item_name		= '$item_name',
									amount			= '$item_amount',
									currency_code 	= '$item_currency_code'
								WHERE 
									invoice = '$invoice' 
							";
					if ($query = @mysql_query($sql_buy)){
						//pay updaten
						$sql_pay ="	UPDATE pay 
										SET
											method = '$pay'
										WHERE 
											invoice = '$invoice' 
									";
						if ($query = @mysql_query($sql_pay)){
							header('location:http://' . $host . '/de/personalitytest/order.php');
							//echo 'pay wurde geändert';
						}
						else{
							echo 'pay wurde nicht geändert <br>';
						}
					}
					else{
						echo 'buy wurde nicht geändert <br>';
					}
			}
			else{
				// buy schreiben
				$sql_buy = "INSERT INTO buy 
								SET
									invoice 		= '$invoice',
									email 			= '$email',
									item_id			= '$item_id',
									item_name		= '$item_name',
									amount			= '$item_amount',
									currency_code 	= '$item_currency_code'
							";
					if ($query = @mysql_query($sql_buy)){
						//pay schreiben
						$sql_pay ="	INSERT INTO pay 
										SET
											invoice 		= '$invoice',
											method 			= '$pay'
									";
						if ($query = @mysql_query($sql_pay)){
							header('location:http://' . $host . '/de/personalitytest/order.php');
						}	
						else{
							echo 'pay wurde nicht geschrieben <br>';
						}
					}
					else{
						echo 'buy wurde nicht geschrieben <br>';
					}
			}
		}
		else {
			echo 'Fehler beim Artikel auslesen';
		}
	}
	else{
		//echo 'Produkt / Pay oder Mail ist  leer';
	}
}	
?>