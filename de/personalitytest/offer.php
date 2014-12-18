<?php include '../../mimes/includes/_central.inc.php';?>
<?php include '../../mimes/includes/offer.inc.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
<?php include '../../mimes/includes/header.inc.php';?>
<script type="text/javascript" src="/mimes/scripts/js/offer.js"></script>
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
								<li>Aufforderung zum kauf der Langauswertung</li>
								<li>3D Darstellung des pdf</li>
								<li>zum kauf animieren</li>
								<li>es gibt Überlegungen auf die payment/index zu verzichten und
									den kompletten Inhalt hier unterzubingen</li>
								<li>anders herum macht es durchaus sinn hier nur
									Langbeschreibung zum Produkt mit Vorauswahl anzubieten</li>
							</ul>
							<li>Linken auf <a href="/de/personalitytest/payment.php">Bezahlung</a></li>
							<li>Hauptzweck:</li>
							<ul>
								<li>Bezahlung</li>
							</ul>
							<li>Zahlungsmethoden</li>
							<ul>
								<li>Paypal</li>
								<li>Bankeinzug</li>
								<li>Kreditkarte</li>
							</ul>
							<li>Weiterleitung auf <a href="/de/personalitytest/download.php">Download</a></li>
							<li>wohl eher nur Zahlung einleiten, Weiterleitung auf Download
								erst nach eindeutiger Zahlungsbestätigung</li>
						</ul>
						<p>
							<img src="/mimes/images/offer1.png" />
						</p>
						<p>
							<img src="/mimes/images/offer2.png" />
						</p>
						<p>
							<img src="/mimes/images/payment.png" />
						</p>
						<form class="yform columnar" method="post"
							action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
							id="payment_form" name="payment_form">
							<fieldset>
								<legend>Produktauswahl</legend>

									<span><?php echo $e_product;?></span>
									<div class="type-check">
										<label for="product1"><?php echo $item1_name . ' (' . $item1_amount . '€)' ?></label>
										<input type="radio" name="product" value=1 id="product1"
											tabindex="1"
											<?php if ($product == 1) {echo 'checked="checked" ';}?> />
									</div>
									<div class="type-check">
										<label for="product2"><?php echo $item2_name . ' (' . $item2_amount . '€)' ?></label>
										<input type="radio" name="product" value=2 id="product2"
											<?php if ($product == 2) {echo 'checked="checked" ';}?> />
									</div>
									<div class="type-check">
										<label for="product3"><?php echo $item3_name . ' (' . $item3_amount . '€)' ?></label>
										<input type="radio" name="product" value=3 id="product3"
											<?php if ($product == 3) {echo 'checked="checked" ';}?> />
									</div>
							</fieldset>
							<fieldset>
								<legend>Zahlungsauswahl</legend>
								<div class="type-check">
									<span><?php echo $e_pay;?></span> <label for="paypal">Paypal</label>
									<input type="radio" name="pay" value="paypal" id="paypal"
										tabindex="2"
										<?php if ($pay == 'paypal') {echo 'checked="checked" ';}?> /></div>
								<div class="type-check">		
									<label for="transfer">Überweisung</label> <input type="radio"
										name="pay" value="transfer" id="transfer"
										<?php if ($pay == 'transfer') {echo 'checked="checked" ';}?> /></div>
								<div class="type-check">		
									<label for="creditcard">Kreditkarte</label> <input type="radio"
										name="pay" value="creditcard" id="creditcard"
										<?php if ($pay == 'creditcard') {echo 'checked="checked" ';}?> /></div>
								<div class="type-check">		
									<label for="voucher">Gutschein</label> <input type="radio"
										name="pay" value="voucher" id="voucher"
										<?php if ($pay == 'voucher') {echo 'checked="checked" ';}?> />
								</div>
								<div class="type-text" id="voucher_code_div">
									<span><?php echo $e_voucher_code;?></span><label 
										for="voucher_code">geben Sie Ihren Gutscheincode ein</label> <input
										type="text" name="voucher_code" id="voucher_code" size="20"
										tabindex="3" value="<?php echo $voucher_code;?>" />
								</div>
							</fieldset>
							<fieldset>
								<legend>Email überprüfen</legend>
								<div class="type-text">
									<span><?php echo $e_email;?></span> <label for="email">überprüfen
										Sie Ihre E-Mail</label> <input type="text" name="email"
										id="email" size="20" tabindex="3" value="<?php echo $email;?>" />
								</div>
							</fieldset>
							<div class="type-check">
								<span><?php echo $e_agb;?></span> <input type="checkbox"
									value="ok" id="agb" name="agb"
									<?php if ($agb == 'ok'){echo 'checked="checked" ';}?>
									tabindex="1" /> <label for="agb"><a href="/de/legal/terms.php"
									target="_blank">AGB</a> bestätigen</label>
							</div>
							<div class="type-button">
								<input type="submit" value="Bestellen" class="submit"
									id="submit" name="submit" tabindex="4" />
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
