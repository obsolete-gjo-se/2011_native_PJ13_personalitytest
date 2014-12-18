<?php
//Sicherheitsabfrage => wenn eine Sessionvariable leer sein sollte kann diese Seite nur Fehlerhaft angezeigt werden
// zB. kopiert jemand im eingeloggten Zustand die URL => Weiterleitung auf offer.php
if ($invoice == '' || $product == '' || $pay =='' || $email ==''){
	header('location:http://' . $host . '/de/personalitytest/offer.php');
}
// gewähltes Produkt auslesen
$sql_item = "SELECT * FROM item WHERE id = '$product' LIMIT 1";
$result_item = mysql_query ($sql_item);
$result_item = mysql_fetch_assoc($result_item);
$item_id 			= $result_item['id'];
$item_name 			= $result_item['name'];
$item_desc 			= $result_item['desc'];
$item_amount 		= $result_item['amount'];
$item_currency_code = $result_item['currency_code'];

//HiddenFelder deklarieren:


// gewählte Zahlungsart auslesen & action setzen
if ($pay == 'paypal') {
	$pay_text = 'Zahlung per PayPal';
	$action = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
	$hidden = include 'paypal_hidden.inc.php';
}
if ($pay == 'transfer') {
	$pay_text = 'Zahlung per Überweisung';
	$action = htmlspecialchars($_SERVER['PHP_SELF']);
	$hidden = 'Transfer';
}
if ($pay == 'creditcard') {
	$pay_text = 'Zahlung per Kreditkarte';
	$action = htmlspecialchars($_SERVER['PHP_SELF']);
}
if ($pay == 'voucher') {
	$pay_text = 'Zahlung per Gutschein';
	$action = htmlspecialchars($_SERVER['PHP_SELF']);
	$item_amount = 'kostenlos';
	$item_currency_code = '';
}
// nach drücken Sendebutton
if (isset($_POST['submit'])){
	if ($pay == 'paypal') {

	}
	if ($pay == 'transfer') {
	}
	if ($pay == 'creditcard') {
	}
	if ($pay == 'voucher') {
		// Voucher updaten
		$sql_voucher = "UPDATE voucher
							SET
								reserv 	= 1,
								used	= 1
							WHERE
								str = '$voucher_code' AND
								reserv IS NULL AND
								used IS NULL
						LIMIT 1";
		if ($query_voucher = @mysql_query($sql_voucher)){
			// pay_voucher schreiben (Datensatz ist neu)
			$sql_pay_voucher = "	INSERT INTO pay_voucher
									SET
										invoice = '$invoice'
								";
			if ($query_pay_voucher = @mysql_query($sql_pay_voucher)){
				// pay_voucher id updaten
				$sql_update_pay_voucher = "	UPDATE pay_voucher, voucher
												SET
													pay_voucher.voucher_id = voucher.id
												WHERE
													pay_voucher.invoice = '$invoice' AND
													voucher.str = '$voucher_code'
											";
				if ($query_update_pay_voucher = @mysql_query($sql_update_pay_voucher)){
					// pay schreiben
					$sql_pay =" INSERT INTO pay
									SET
										invoice = '$invoice',
										method = '$pay',
										status = 1
								";
					if ($query_pay = @mysql_query($sql_pay)){
						header('location:http://' . $host . '/de/personalitytest/download.php');
					}
				}
			}
				

		}
	}
}
?>