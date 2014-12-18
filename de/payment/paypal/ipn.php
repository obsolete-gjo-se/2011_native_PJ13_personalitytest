<?php

// Revision Notes
// 11/04/11 - changed post back url from https://www.paypal.com/cgi-bin/webscr to https://ipnpb.paypal.com/cgi-bin/webscr
// For more info see below:
// https://www.x.com/content/bulletin-ip-address-expansion-paypal-services
// "ACTION REQUIRED: if you are using IPN (Instant Payment Notification) for Order Management and your IPN listener script is behind a firewall that uses ACL (Access Control List) rules which restrict outbound traffic to a limited number of IP addresses, then you may need to do one of the following: 
// To continue posting back to https://www.paypal.com  to perform IPN validation you will need to update your firewall ACL to allow outbound access to *any* IP address for the servers that host your IPN script
// OR Alternatively, you will need to modify  your IPN script to post back IPNs to the newly created URL https://ipnpb.paypal.com using HTTPS (port 443) and update firewall ACL rules to allow outbound access to the ipnpb.paypal.com IP ranges (see end of message)."


/////////////////////////////////////////////////
/////////////Begin Script below./////////////////
/////////////////////////////////////////////////

//webmastermail
$sys_absender = 'From: PersonalatyCheck <lalala@ja2.cc>';
$notify_email =  "gregory@n-28.com";         //email address to which debug emails are sent to
// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}
// post back to PayPal system to validate
$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
// If testing on Sandbox use:
$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
//$fp = fsockopen ('ssl://ipnpb.paypal.com', 443, $errno, $errstr, 30);

// assign posted variables to local variables
$item_name = $_POST['item_name'];
$business = $_POST['business'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$mc_gross = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$receiver_id = $_POST['receiver_id'];
$quantity = $_POST['quantity'];
$num_cart_items = $_POST['num_cart_items'];
$payment_date = $_POST['payment_date'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$payment_type = $_POST['payment_type'];
$payment_status = $_POST['payment_status'];
$payment_gross = $_POST['payment_gross'];
$payment_fee = $_POST['payment_fee'];
$settle_amount = $_POST['settle_amount'];
$memo = $_POST['memo'];
$payer_email = $_POST['payer_email'];
$txn_type = $_POST['txn_type'];
$payer_status = $_POST['payer_status'];
$address_street = $_POST['address_street'];
$address_city = $_POST['address_city'];
$address_state = $_POST['address_state'];
$address_zip = $_POST['address_zip'];
$address_country = $_POST['address_country'];
$address_status = $_POST['address_status'];
$item_number = $_POST['item_number'];
$tax = $_POST['tax'];
$option_name1 = $_POST['option_name1'];
$option_selection1 = $_POST['option_selection1'];
$option_name2 = $_POST['option_name2'];
$option_selection2 = $_POST['option_selection2'];
$for_auction = $_POST['for_auction'];
$invoice = $_POST['invoice'];
$custom = $_POST['custom'];
$notify_version = $_POST['notify_version'];
$verify_sign = $_POST['verify_sign'];
$payer_business_name = $_POST['payer_business_name'];
$payer_id =$_POST['payer_id'];
$mc_currency = $_POST['mc_currency'];
$mc_fee = $_POST['mc_fee'];
$exchange_rate = $_POST['exchange_rate'];
$settle_currency  = $_POST['settle_currency'];
$parent_txn_id  = $_POST['parent_txn_id'];
$pending_reason = $_POST['pending_reason'];
$reason_code = $_POST['reason_code'];

// subscription specific vars
$subscr_id = $_POST['subscr_id'];
$subscr_date = $_POST['subscr_date'];
$subscr_effective  = $_POST['subscr_effective'];
$period1 = $_POST['period1'];
$period2 = $_POST['period2'];
$period3 = $_POST['period3'];
$amount1 = $_POST['amount1'];
$amount2 = $_POST['amount2'];
$amount3 = $_POST['amount3'];
$mc_amount1 = $_POST['mc_amount1'];
$mc_amount2 = $_POST['mc_amount2'];
$mc_amount3 = $_POST['mcamount3'];
$recurring = $_POST['recurring'];
$reattempt = $_POST['reattempt'];
$retry_at = $_POST['retry_at'];
$recur_times = $_POST['recur_times'];
$username = $_POST['username'];
$password = $_POST['password'];

//auction specific vars
$for_auction = $_POST['for_auction'];
$auction_closing_date  = $_POST['auction_closing_date'];
$auction_multi_item  = $_POST['auction_multi_item'];
$auction_buyer_id  = $_POST['auction_buyer_id'];


//DB connect creds and email 
$DB_Server = "mysql5.ja2.cc:3306"; //your MySQL Server
$DB_Username = "db341187"; //your MySQL User Name
$DB_Password = "XJD03oBj"; //your MySQL Password
$DB_DBName = "db341187"; //your MySQL Database Name


if (!$fp) {
// HTTP ERROR
} 
else {
	fputs ($fp, $header . $req);
	while (!feof($fp)) {
	$res = fgets ($fp, 1024);
		if (strcmp ($res, "VERIFIED") == 0) {
			//create MySQL connection
			$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password)
			or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
	
			//select database
			$Db = @mysql_select_db($DB_DBName, $Connect)
			or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());
	
			$fecha = date("m")."/".date("d")."/".date("Y");
			$fecha = date("Y").date("m").date("d");
	
			//check if transaction ID has been processed before
			$checkquery = "SELECT txn_id FROM pay_paypal WHERE txn_id='".$txn_id."'";
			$sihay = mysql_query($checkquery) or die("Duplicate txn id check query failed:<br>" . mysql_error() . "<br>" . mysql_errno());
			$nm = mysql_num_rows($sihay);
			if ($nm == 0){
				if ($receiver_email != 'gregor_1324030228_biz@n-28.com'){
					mail($notify_email, "Empfängermail nicht überein", "PayPal Transaktions ID: $txn_id\n\n Invoice: $invoice\n\n Zahlungsstatus: $payment_status\n", $sys_absender);
				}
				//Pay_payPal schreiben
				$sql_pay_paypal ="INSERT INTO pay_paypal SET
				txn_id			= '$txn_id',
				invoice 		= '$invoice',
				payment_date	= '$payment_date',
				payment_status	= '$payment_status',
				payment_type	= '$payment_type',
				pending_reason	= '$pending_reason',
				reason_code		= '$reason_code',
				txn_type		= '$txn_type'";
				if ($query = @mysql_query($sql_pay_paypal)){
					// Daten geschrieben und Mail senden
					//echo "Verified";
					mail($notify_email, "VERIFIED IPN", "PayPal Transaktions ID: $txn_id\n\n Invoice: $invoice\n\n Zahlungsstatus: $payment_status\n", $sys_absender);
					if ($payment_status == 'Completed'){
						$sql_pay ="UPDATE pay SET
						status =  '1' 
						WHERE invoice = '$invoice' LIMIT 1";
						if ($query = @mysql_query($sql_pay)){
						}
					}
				}
				// Daten nicht geschrieben
				else{
					mail($notify_email, "Daten nicht in Tabelle", "PayPal Transaktions ID: $txn_id\n\n Invoice: $invoice\n\n Zahlungsstatus: $payment_status\n", $sys_absender);
				}
			}
			else{
				// doplepte Transaktionsnummer - Mail senden
				mail($notify_email, "VERIFIED DUPLICATED TRANSACTION", "PayPal Transaktions ID: $txn_id\n\n Invoice: $invoice\n\n Zahlungsstatus: $payment_status\n", $sys_absender);
			}
		}
		// if the IPN POST was 'INVALID'...do this
		else if (strcmp ($res, "INVALID") == 0) {
			// log for manual investigation
			mail($notify_email, "INVALID IPN", "PayPal Transaktions ID: $txn_id\n\n Invoice: $invoice\n\n Zahlungsstatus: $payment_status\n", $sys_absender);
		}
	}
	fclose ($fp);
}
?>

