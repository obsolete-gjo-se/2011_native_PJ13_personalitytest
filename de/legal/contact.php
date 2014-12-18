<?php include '../../mimes/includes/_central.inc.php';?>
<?php
$sys_webmaster = 'gregory@n-28.com';
$sys_absender = 'From: PersonalatyCheck <lalala@ja2.cc>';
$sys_betreff = 'Website-Anfrage';
$err[0] = 'Sie haben nicht alle Pflichtfelder ausgef√ºllt:<br />';
$err[1] = '* Bitte w√§hlen Sie eine Anrede aus <br />';
$err[2] = '* Bitte tragen Sie Ihren Vornamen ein <br />';
$err[3] = '* Bitte tragen Sie Ihren Nachnamen ein <br />';
$ok = 'Vielen Dank f¸r Ihre Mitteilung, wir werden uns schnellstmˆglich k¸mmern.';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<!-- InstanceBegin template="/Templates/master.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
						<!-- InstanceBeginEditable name="col3" -->
						<h1>Kontakt</h1>
						<form name="kontakt" method="post"
							action="<?=$_SERVER['PHP_SELF'].$sessionstringnew;?>"
							class="yform">
              <?php 
				$email = trim(strip_tags($_POST['email']));
				$betreff = trim(strip_tags($_POST['betreff']));
				$nachricht = trim(strip_tags($_POST['nachricht']));
				if (isset($_POST['submit'])) {
					$ip = $_SERVER['REMOTE_ADDR'];
					$host = gethostbyaddr($ip);
					$timestamp = time ();
					$datum = date ("d.m.Y", $timestamp);
					$uhrzeit = date ("H:i:s", $timestamp);
					$msg = '<p>' . $err[0];
					if ($email == '') {
						$msg .= $err[1];
						$error = true;
						}
					if ($betreff == '') {
						$msg .= $err[2];
						$error = true;
						}
					if ($nachricht == '') {
						$msg .= $err[3];
						$error = true;
						}
					$msg .= '</p>';
					if ($error != true) {
						$sys_nachricht = "*** Kontaktformular - Ja2.cc *** \n\nMail: $email \nBetreff: $betreff \n\n Nachricht:\n $nachricht\n \nIP: $ip\nHost: $host\nGesendet am $datum um $uhrzeit.";
						mail($sys_webmaster, $sys_betreff, $sys_nachricht, $sys_absender);
						$email = null;
						$betreff = null;
						$nachricht = null;
						echo $ok;
						} else {
							echo $msg;
							}
					}?>
              <fieldset class="columnar">
								<legend>Senden Sie uns Ihre Anfrage</legend>
								<div class="type-text">
									<span id="sprytextfield1"> <label for="email">E-Mail: <sup
											title="Pflichtfeld">*</sup></label> <input type="text"
										name="email" id="email" value="<?=$email;?>" tabindex="1" /> <span
										class="textfieldRequiredMsg">Bitte Mail eingeben.</span></span>
								</div>
								<div class="type-text">
									<span id="sprytextfield2"> <label for="betreff">Betreff: <sup
											title="Pflichtfeld">*</sup></label> <input type="text"
										name="betreff" id="betreff" value="<?=$betreff;?>"
										tabindex="2" /> <span class="textfieldRequiredMsg">Bitte
											Betreff eingeben.</span></span>
								</div>
								<div class="type-text">
									<span id="sprytextarea1"> <label for="nachricht">Ihre
											Nachricht: <sup title="Pflichtfeld">*</sup>
									</label> <textarea name="nachricht" id="nachricht"
											value="<?=$nachricht;?>" cols="45" rows="5" tabindex="3"></textarea>
										<span class="textareaRequiredMsg">Bitte Nachricht eingeben.</span>
									</span>
								</div>
							</fieldset>
							<div class="type-button">
								<input type="reset" value="Abbruch" class="reset" id="reset"
									name="reset" tabindex="5" /> <input type="submit"
									value="Senden" class="submit" id="submit" name="submit"
									tabindex="4" />
							</div>
						</form>

						<!-- IE Column Clearing -->
						<div id="ie_clearing">&nbsp;</div>
						<!-- End: IE Column Clearing -->

						<!-- end: #col3 -->

						<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur", "change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["blur", "change"]});
      </script>
						<!-- InstanceEndEditable -->
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
