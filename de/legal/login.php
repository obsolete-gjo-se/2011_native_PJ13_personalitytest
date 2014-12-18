<?php include '../../mimes/includes/_central.inc.php';?>
<?php include '../../mimes/includes/login.inc.php';?>
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

							
							<form class="yform columnar"
								action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
								method="post">
								<fieldset>
									<legend>Ihre Anmelde-Daten</legend>
									<div class="type-text">
										<span><?php echo $e_email;?></span> <label for="email">E-Mail</label>
										<input type="text" name="email" id="email" size="20"
											value="<?=$email;?>" tabindex="1" />
									</div>
									<div class="type-text">
										<span><?php echo $e_password;?></span> <label for="password">Passwort</label>
										<input type="password" name="password" id="password" size="20"
											tabindex="2" />
									</div>
								</fieldset>
								<div class="type-button">
									<input type="submit" value="LogIn" class="submit" id="login"
										name="login" tabindex="3" />
								</div>
							</form>
							<span><?php echo $e_user_login;?></span>

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