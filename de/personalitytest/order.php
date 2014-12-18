<?php include '../../mimes/includes/_central.inc.php';?>
<?php include '../../mimes/includes/order.inc.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<?php include '../../mimes/includes/header.inc.php';?>
</head>
<body class="hideboth" id="" onload="" onunload="">

	<!-- beginn: skip link navigation -->
	<ul id="skiplinks">
		<li><a class="skip" href="#nav">Skip to navigation (Press Enter).</a></li>
		<li><a class="skip" href="#col3">Skip to main content (Press Enter).</a></li>
	</ul>
	<!--end: skip link navigation-->
	<!--beginn: page_margin-->
	<div class="page_margins">
		<!--beginn: page-->
		<div class="page">
			<div id="topnav">
				<div class="langMenu">
				<?php include '../../mimes/includes/langMenu.inc.php';?>
            </div>
			</div>
			<div id="header"></div>
			<!-- begin: #main -->
			<div id="main">

				<!-- begin: #col1 - first float column -->
				<div id="col1">
					<div id="col1_content" class="clearfix"></div>
				</div>
				<!-- end: #col1 -->

				<!-- begin: #col2 second float column -->
				<div id="col2">
					<div id="col2_content" class="clearfix"></div>
				</div>
				<!-- end: #col2 -->

				<!-- begin: #col3 static column -->
				<div id="col3">
					<div id="col3_content" class="clearfix">

						<h2>geplanter Inhalt</h2>
						<ul>
							<li>Hauptzweck:</li>
							<ul>
								<li>Kasse</li>
								<li>Artikel überprüfen und Bestellung abschicken</li>
							</ul>
							<li>Linken auf <a href="/de/personalitytest/download.php">Download</a></li>
							<li>Hier jetzt dei Frage nach der Erschenung:</li>
							<ul>
								<li>sollte nichts mehr Auswählbar sein, (nur noch anzeigen:</li>
								<li>Ihre Produktauswahl</li>
								<li>Ihre Zahlungsauswahl</li>
								<li>AGBS bestätigen + Link</li>
								<li>oder zurück zur offer</li>
							</ul>
						</ul>

						<form class="yform" method="post"
							action="<?php echo $action; ?>"
							id="order_form">
							<fieldset>
								<legend>Bitte überprüfen Sie Ihre Bestellung</legend>
								<div class="subcolumns">
									<div class="c20l">
										<div class="subcl"><img src="/mimes/images/thumpnail.png" width="112" height="150"/></div>
									</div>
									<div class="c60l">
										<div class="subc">
											<h4><?php echo $item_name;?></h4>
											<p><?php echo $item_desc;?></p>
											<hr></hr>
											<p>Zahlungsinformation: <?php echo $pay_text . ' ' . $voucher_code;?> </p>
											<hr></hr>
											<p>Die Lieferung erfolgt als Download-Link<br />
											Wir senden den Link an: <?php echo $email;?> </p>
										</div>
									</div>
									<div class="c20r">
										<div class="subcr">
											<p><?php echo $item_amount;?> <?php echo $item_currency_code;?></p>
										</div>
									</div>
								</div>
							</fieldset>
							<div class="type-button">
								<a href="/de/personalitytest/offer.php">Bestellung ändern</a> 
									<input type="submit" value="bestellen" class="submit"
									id="submit" name="submit" tabindex="2" />
							</div>
							<div class="hidden"><?php 	if ($pay == 'paypal') {
															include '../../mimes/includes/paypal_hidden.inc.php';
														}?>
							</div>
						</form>
					</div>
					<!-- IE column clearing -->
					<div id="ie_clearing">&nbsp;</div>
				</div>
				<!-- end: #col3 -->

			</div>
			<!-- end: #main -->
		</div>
		<!--end: page-->
	</div>
	<!--end: page_margin-->
	<!-- begin: #footer -->
	<div id="footer">
		<div id="footer_content">
			<!-- begin: main navigation #nav -->
			<div id="nav">
				<?php include '../../mimes/includes/nav.inc.php';?>
			</div>
			<!-- end: main navigation -->
		</div>
	</div>
	<!-- end: #footer -->

	<p>
		<!-- full skiplink functionality in webkit browsers -->
	</p>
	<script src="/mimes/scripts/js/yaml-focusfix.js" type="text/javascript"></script>
</body>
<!-- InstanceEnd -->
</html>