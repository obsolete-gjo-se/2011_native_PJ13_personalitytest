<?php include '../../mimes/includes/_central.inc.php';?>
<?php include '../../mimes/includes/success.inc.php';?>
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
			<div id="main">
				<div id="col1">
					<div id="col1_content" class="clearfix"></div>
				</div>
				<div id="col2">
					<div id="col2_content" class="clearfix"></div>
				</div>
				<div id="col3">
					<div id="col3_content" class="clearfix">

						<h2>geplanter Inhalt</h2>
						<ul>
							<li>Hauptzweck:</li>
							<ul>
								<li>enthält nach erfolgreicher und abgeschlossener Zahlung weiterleitung auf download.php</li>
								<li>sonst Information für den Kunden, dass ... sobald Zahlung vollständig</li>
							</ul>
							<li>Linken auf <a href="/de/personalitytest/download.php">Download</a></li>
						</ul>
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