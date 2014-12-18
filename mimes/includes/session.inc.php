<?php
/* setzen der Cacheverwaltung auf 'private' */

// session_cache_limiter('private');
// $cache_limiter = session_cache_limiter();

// /* setzen der Cache-Verfallszeit auf 30 Minuten */
// session_cache_expire(30);
// $cache_expire = session_cache_expire();

// /* starten der Session */

// session_start();

// echo "Die Cacheverwaltung ist jetzt auf $cache_limiter gesetzt<br />";
// echo "Die Session wird für $cache_expire Minuten im Cache gespeichert";

// weitere Frage, ob es einen Sinn ergibt nach dem Start ein if != exist = haeder Location: unterzubringen, da nur wenn noch keine Session besteht
//session_status() - ergibt folgende Rückgabewerte
//PHP_SESSION_DISABLED if sessions are disabled. / PHP_SESSION_NONE if sessions are enabled, but none exists. / PHP_SESSION_ACTIVE if sessions are enabled, and one exists.

session_start();
$s_id = session_id();
// Sessionvariablen zur Verfügung stellen
if (isset($_SESSION['invoice'])) {
	$invoice = htmlspecialchars($_SESSION['invoice']);
}
if (isset($_SESSION['product'])) {
	$product = htmlspecialchars($_SESSION['product']);
}
if (isset($_SESSION['pay'])) {
	$pay = htmlspecialchars($_SESSION['pay']);
}
if (isset($_SESSION['email'])) {
	$email = htmlspecialchars($_SESSION['email']);
}
if (isset($_SESSION['agb'])) {
	$agb = htmlspecialchars($_SESSION['agb']);
}
if (isset($_SESSION['voucher_code'])) {
	$voucher_code = htmlspecialchars($_SESSION['voucher_code']);
}

?>