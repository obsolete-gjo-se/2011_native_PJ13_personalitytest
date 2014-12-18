<?php 
	include '../../mimes/includes/_central.inc.php';
	include '../../mimes/includes/question_form.inc.php';
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
						<div id="inhalt">
							<h2>geplanter Inhalt</h2>
							<ul>
								<li>neige dazu alle 90 Fragen auf einer Seite unterzubringen</li>
								<ul>
									<li>Scrollen muss der user sowieso</li>
									<li>somit Verzicht auf weiter-Button</li>
								</ul>
								<li>visuelle Unterstützung</li>
								<ul>
									<li>MouseOver - zB Rahmenfarbe</li>
									<li>Frage beantwortet (zb. Hintergrundfarbe auf grün)</li>
									<li>technische Umsetzung kann ich selber machen</li>
								</ul>
								<li>der Stil der Fragenstellung ist immer gleich:</li>
								<ul>
									<li>Ich gehe sehr gerne unter Leute.</li>
									<li>In Gruppen bin ich eher zurückhaltend.</li>
								</ul>
								<li>Die Antwortmöglichkeiten sollen auf einer Skala von 1-5
									beantwortet werden</li>
								<ul>
									<li>1 trifft gar nicht zu bis 5 stimmt absolut</li>
								</ul>
								<li>so bereiten andere die Fragen auf</li>
								<ul>
									<li><a href="/de/text/fragen.php">Fragen</a></li>
								</ul>
							</ul>
						</div>

						<h1>Holen Sie das optimale aus Ihrem Test heraus:</h1>
						<ul>
							<li>Sie werden ca. 10min benötigen</li>
							<li>versuchen Sie äußere Störungen zu vermeiden und den Test
								in einem Stück zu beantworten</li>
							<li>nehmen Sie die Antwort, die nach Ihrem Gefühl die richtige
								ist</li>
							<li>nur ehrliche Antworten führen zu einem ehrlichem Ergebnis</li>
							<li>Sie können den Test völlig kostenfrei machen und erhalten auch die Kurzauswertung kostenlos</li>
						</ul>



						<form class="yform"
							action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
							method="post">
							<fieldset class='question'>
								<legend>
									<h4>mitgefuehl_02</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_mitgefuehl_02;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="mitgefuehl_02" value=1
											<?php if (isset($_POST['mitgefuehl_02']) && $_POST['mitgefuehl_02'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_02" value=2
											<?php if (isset($_POST['mitgefuehl_02']) && $_POST['mitgefuehl_02'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_02" value=3
											<?php if (isset($_POST['mitgefuehl_02']) && $_POST['mitgefuehl_02'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_02" value=4
											<?php if (isset($_POST['mitgefuehl_02']) && $_POST['mitgefuehl_02'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_02" value=5
											<?php if (isset($_POST['mitgefuehl_02']) && $_POST['mitgefuehl_02'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>befang_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_befang_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="befang_01" value=1
											<?php if (isset($_POST['befang_01']) && $_POST['befang_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="befang_01" value=2
											<?php if (isset($_POST['befang_01']) && $_POST['befang_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="befang_01" value=3
											<?php if (isset($_POST['befang_01']) && $_POST['befang_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="befang_01" value=4
											<?php if (isset($_POST['befang_01']) && $_POST['befang_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="befang_01" value=5
											<?php if (isset($_POST['befang_01']) && $_POST['befang_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>aesthetik_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_aesthetik_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="aesthetik_01" value=1
											<?php if (isset($_POST['aesthetik_01']) && $_POST['aesthetik_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="aesthetik_01" value=2
											<?php if (isset($_POST['aesthetik_01']) && $_POST['aesthetik_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="aesthetik_01" value=3
											<?php if (isset($_POST['aesthetik_01']) && $_POST['aesthetik_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="aesthetik_01" value=4
											<?php if (isset($_POST['aesthetik_01']) && $_POST['aesthetik_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="aesthetik_01" value=5
											<?php if (isset($_POST['aesthetik_01']) && $_POST['aesthetik_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>intellekt_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_intellekt_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="intellekt_01" value=1
											<?php if (isset($_POST['intellekt_01']) && $_POST['intellekt_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_01" value=2
											<?php if (isset($_POST['intellekt_01']) && $_POST['intellekt_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_01" value=3
											<?php if (isset($_POST['intellekt_01']) && $_POST['intellekt_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_01" value=4
											<?php if (isset($_POST['intellekt_01']) && $_POST['intellekt_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_01" value=5
											<?php if (isset($_POST['intellekt_01']) && $_POST['intellekt_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>angst_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_angst_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="angst_01" value=1
											<?php if (isset($_POST['angst_01']) && $_POST['angst_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="angst_01" value=2
											<?php if (isset($_POST['angst_01']) && $_POST['angst_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="angst_01" value=3
											<?php if (isset($_POST['angst_01']) && $_POST['angst_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="angst_01" value=4
											<?php if (isset($_POST['angst_01']) && $_POST['angst_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="angst_01" value=5
											<?php if (isset($_POST['angst_01']) && $_POST['angst_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>verletz_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_verletz_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="verletz_01" value=1
											<?php if (isset($_POST['verletz_01']) && $_POST['verletz_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="verletz_01" value=2
											<?php if (isset($_POST['verletz_01']) && $_POST['verletz_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="verletz_01" value=3
											<?php if (isset($_POST['verletz_01']) && $_POST['verletz_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="verletz_01" value=4
											<?php if (isset($_POST['verletz_01']) && $_POST['verletz_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="verletz_01" value=5
											<?php if (isset($_POST['verletz_01']) && $_POST['verletz_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>intellekt_03</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_intellekt_03;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="intellekt_03" value=1
											<?php if (isset($_POST['intellekt_03']) && $_POST['intellekt_03'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_03" value=2
											<?php if (isset($_POST['intellekt_03']) && $_POST['intellekt_03'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_03" value=3
											<?php if (isset($_POST['intellekt_03']) && $_POST['intellekt_03'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_03" value=4
											<?php if (isset($_POST['intellekt_03']) && $_POST['intellekt_03'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="intellekt_03" value=5
											<?php if (isset($_POST['intellekt_03']) && $_POST['intellekt_03'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>mitgefuehl_01</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_mitgefuehl_01;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="mitgefuehl_01" value=1
											<?php if (isset($_POST['mitgefuehl_01']) && $_POST['mitgefuehl_01'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_01" value=2
											<?php if (isset($_POST['mitgefuehl_01']) && $_POST['mitgefuehl_01'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_01" value=3
											<?php if (isset($_POST['mitgefuehl_01']) && $_POST['mitgefuehl_01'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_01" value=4
											<?php if (isset($_POST['mitgefuehl_01']) && $_POST['mitgefuehl_01'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="mitgefuehl_01" value=5
											<?php if (isset($_POST['mitgefuehl_01']) && $_POST['mitgefuehl_01'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>kompetenz_03</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_kompetenz_03;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="kompetenz_03" value=1
											<?php if (isset($_POST['kompetenz_03']) && $_POST['kompetenz_03'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="kompetenz_03" value=2
											<?php if (isset($_POST['kompetenz_03']) && $_POST['kompetenz_03'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="kompetenz_03" value=3
											<?php if (isset($_POST['kompetenz_03']) && $_POST['kompetenz_03'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="kompetenz_03" value=4
											<?php if (isset($_POST['kompetenz_03']) && $_POST['kompetenz_03'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="kompetenz_03" value=5
											<?php if (isset($_POST['kompetenz_03']) && $_POST['kompetenz_03'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class='question'>
								<legend>
									<h4>sorgfalt_02</h4>
								</legend>
								<div class='type-check'>
									<span><?php echo $e_sorgfalt_02;?></span>
									<ul>
										<li>trifft garnicht zu (NEIN)</li>
										<li><input type="radio" name="sorgfalt_02" value=1
											<?php if (isset($_POST['sorgfalt_02']) && $_POST['sorgfalt_02'] == 1) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="sorgfalt_02" value=2
											<?php if (isset($_POST['sorgfalt_02']) && $_POST['sorgfalt_02'] == 2) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="sorgfalt_02" value=3
											<?php if (isset($_POST['sorgfalt_02']) && $_POST['sorgfalt_02'] == 3) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="sorgfalt_02" value=4
											<?php if (isset($_POST['sorgfalt_02']) && $_POST['sorgfalt_02'] == 4) {echo 'checked="checked" ';}?> /></li>
										<li><input type="radio" name="sorgfalt_02" value=5
											<?php if (isset($_POST['sorgfalt_02']) && $_POST['sorgfalt_02'] == 5) {echo 'checked="checked" ';}?> /></li>
										<li>trifft absolut zu (JA)</li>
									</ul>
								</div>
							</fieldset>
							<fieldset class="columnar">
								<legend>Ihre Anmelde-Daten</legend>
								<div class="type-text">
									<span><?php echo $e_firstname;?></span> <label for="firstname">Vorname</label>
									<input type="text" name="firstname" id="firstname" size="20"
										value="<?=$firstname;?>" />
								</div>
								<div class="type-text">
									<span><?php echo $e_email;?></span> <label for="email">E-Mail</label>
									<input type="text" name="email" id="email" size="20"
										value="<?=$email;?>" />
								</div>
								<div class="type-text">
									<span><?php echo $e_password;?></span> <label for="password">Passwort</label>
									<input type="password" name="password" id="password" size="20" />
								</div>
							</fieldset>
							<div class="type-button">
								<input type="submit" value="Senden" class="submit" id="submit"
									name="submit" tabindex="4" />
							</div>
						</form>


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
