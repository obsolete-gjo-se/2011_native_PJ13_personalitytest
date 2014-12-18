<?php	
	$abenteuer_01 = '';
	$abenteuer_02 = '';
	$abenteuer_03 = '';
	$aesthetik_01 = '';
	$aesthetik_02 = '';
	$aesthetik_03 = '';
	$aktiv_01 = '';
	$aktiv_02 = '';
	$aktiv_03 = '';
	$altruismus_01 = '';
	$altruismus_02 = '';
	$altruismus_03 = '';
	$angst_01 = '';
	$angst_02 = '';
	$angst_03 = '';
	$befang_01 = '';
	$befang_02 = '';
	$befang_03 = '';
	$bescheiden_01 = '';
	$bescheiden_02 = '';
	$bescheiden_03 = '';
	$disziplin_01 = '';
	$disziplin_02 = '';
	$disziplin_03 = '';
	$durchsetz_01 = '';
	$durchsetz_02 = '';
	$durchsetz_03 = '';
	$emotion_01 = '';
	$emotion_02 = '';
	$emotion_03 = '';
	$entgegen_01 = '';
	$entgegen_02 = '';
	$entgegen_03 = '';
	$fantasie_01 = '';
	$fantasie_02 = '';
	$fantasie_03 = '';
	$freimut_01 = '';
	$freimut_02 = '';
	$freimut_03 = '';
	$gesell_01 = '';
	$gesell_02 = '';
	$gesell_03 = '';
	$glueck_01 = '';
	$glueck_02 = '';
	$glueck_03 = '';
	$herzlich_01 = '';
	$herzlich_02 = '';
	$herzlich_03 = '';
	$impuls_01 = '';
	$impuls_02 = '';
	$impuls_03 = '';
	$intellekt_01 = '';
	$intellekt_02 = '';
	$intellekt_03 = '';
	$kompetenz_01 = '';
	$kompetenz_02 = '';
	$kompetenz_03 = '';
	$leistung_01 = '';
	$leistung_02 = '';
	$leistung_03 = '';
	$liberal_01 = '';
	$liberal_02 = '';
	$liberal_03 = '';
	$mitgefuehl_01 = '';
	$mitgefuehl_02 = '';
	$mitgefuehl_03 = '';
	$neugier_01 = '';
	$neugier_02 = '';
	$neugier_03 = '';
	$ordnung_01 = '';
	$ordnung_02 = '';
	$ordnung_03 = '';
	$pessi_01 = '';
	$pessi_02 = '';
	$pessi_03 = '';
	$pflicht_01 = '';
	$pflicht_02 = '';
	$pflicht_03 = '';
	$reizbar_01 = '';
	$reizbar_02 = '';
	$reizbar_03 = '';
	$sorgfalt_01 = '';
	$sorgfalt_02 = '';
	$sorgfalt_03 = '';
	$verletz_01 = '';
	$verletz_02 = '';
	$verletz_03 = '';
	$vertrauen_01 = '';
	$vertrauen_02 = '';
	$vertrauen_03 = '';

	
	if (isset($_POST['mitgefuehl_02']) && !is_array($_POST['mitgefuehl_02']) && trim($_POST['mitgefuehl_02'] != '')){
	$mitgefuehl_02 = htmlspecialchars($_POST['mitgefuehl_02']);}
	else{$e_mitgefuehl_02 = 'Bitte treffen Sie eine Auswahl: mitgefuehl_02 fehlt!<br />';}

	if (isset($_POST['befang_01']) && !is_array($_POST['befang_01']) && trim($_POST['befang_01'] != '')){
	$befang_01 = htmlspecialchars($_POST['befang_01']);}
	else{$e_befang_01 = 'befang_01 fehlt!<br />';}

	if (isset($_POST['aesthetik_01']) && !is_array($_POST['aesthetik_01']) && trim($_POST['aesthetik_01'] != '')){
	$aesthetik_01 = htmlspecialchars($_POST['aesthetik_01']);}
	else{$e_aesthetik_01 = 'aesthetik_01 fehlt! <br />';}
        
	if (isset($_POST['intellekt_01']) && !is_array($_POST['intellekt_01']) && trim($_POST['intellekt_01'] != '')){
	$intellekt_01 = htmlspecialchars($_POST['intellekt_01']);}
	else{$e_intellekt_01 = 'intellekt_01 fehlt! <br />';}
        
	if (isset($_POST['angst_01']) && !is_array($_POST['angst_01']) && trim($_POST['angst_01'] != '')){
	$angst_01 = htmlspecialchars($_POST['angst_01']);}
	else{$e_angst_01 = 'angst_01 fehlt! <br />';}
        
	if (isset($_POST['verletz_01']) && !is_array($_POST['verletz_01']) && trim($_POST['verletz_01'] != '')){
	$verletz_01 = htmlspecialchars($_POST['verletz_01']);}
	else{$e_verletz_01 = 'verletz_01 fehlt! <br />';}
        
	if (isset($_POST['intellekt_03']) && !is_array($_POST['intellekt_03']) && trim($_POST['intellekt_03'] != '')){
	$intellekt_03 = htmlspecialchars($_POST['intellekt_03']);}
	else{$e_intellekt_03 = 'intellekt_03 fehlt! <br />';}
        
	if (isset($_POST['mitgefuehl_01']) && !is_array($_POST['mitgefuehl_01']) && trim($_POST['mitgefuehl_01'] != '')){
	$mitgefuehl_01 = htmlspecialchars($_POST['mitgefuehl_01']);}
	else{$e_mitgefuehl_01 = 'mitgefuehl_01 fehlt! <br />';}
        
	if (isset($_POST['kompetenz_03']) && !is_array($_POST['kompetenz_03']) && trim($_POST['kompetenz_03'] != '')){
	$kompetenz_03 = htmlspecialchars($_POST['kompetenz_03']);}
	else{$e_kompetenz_03 = 'kompetenz_03 fehlt! <br />';}
        
	if (isset($_POST['sorgfalt_02']) && !is_array($_POST['sorgfalt_02']) && trim($_POST['sorgfalt_02'] != '')){
	$sorgfalt_02 = htmlspecialchars($_POST['sorgfalt_02']);}
	else{$e_sorgfalt_02 = 'sorgfalt_02 fehlt! <br />';}
        
	if (isset($_POST['aktiv_03']) && !is_array($_POST['aktiv_03']) && trim($_POST['aktiv_03'] != '')){
	$aktiv_03 = htmlspecialchars($_POST['aktiv_03']);}
	else{$e_aktiv_03 = 'aktiv_03 fehlt! <br />';}
        
	if (isset($_POST['herzlich_02']) && !is_array($_POST['herzlich_02']) && trim($_POST['herzlich_02'] != '')){
	$herzlich_02 = htmlspecialchars($_POST['herzlich_02']);}
	else{$e_herzlich_02 = 'herzlich_02 fehlt! <br />';}
        
	if (isset($_POST['altruismus_03']) && !is_array($_POST['altruismus_03']) && trim($_POST['altruismus_03'] != '')){
	$altruismus_03 = htmlspecialchars($_POST['altruismus_03']);}
	else{$e_altruismus_03 = 'altruismus_03 fehlt! <br />';}
        
	if (isset($_POST['neugier_02']) && !is_array($_POST['neugier_02']) && trim($_POST['neugier_02'] != '')){
	$neugier_02 = htmlspecialchars($_POST['neugier_02']);}
	else{$e_neugier_02 = 'neugier_02 fehlt! <br />';}
        
	if (isset($_POST['leistung_03']) && !is_array($_POST['leistung_03']) && trim($_POST['leistung_03'] != '')){
	$leistung_03 = htmlspecialchars($_POST['leistung_03']);}
	else{$e_leistung_03 = 'leistung_03 fehlt! <br />';}
        
	if (isset($_POST['glueck_02']) && !is_array($_POST['glueck_02']) && trim($_POST['glueck_02'] != '')){
	$glueck_02 = htmlspecialchars($_POST['glueck_02']);}
	else{$e_glueck_02 = 'glueck_02 fehlt! <br />';}
        
	if (isset($_POST['reizbar_01']) && !is_array($_POST['reizbar_01']) && trim($_POST['reizbar_01'] != '')){
	$reizbar_01 = htmlspecialchars($_POST['reizbar_01']);}
	else{$e_reizbar_01 = 'reizbar_01 fehlt! <br />';}
        
	if (isset($_POST['ordnung_01']) && !is_array($_POST['ordnung_01']) && trim($_POST['ordnung_01'] != '')){
	$ordnung_01 = htmlspecialchars($_POST['ordnung_01']);}
	else{$e_ordnung_01 = 'ordnung_01 fehlt! <br />';}
        
	if (isset($_POST['reizbar_03']) && !is_array($_POST['reizbar_03']) && trim($_POST['reizbar_03'] != '')){
	$reizbar_03 = htmlspecialchars($_POST['reizbar_03']);}
	else{$e_reizbar_03 = 'reizbar_03 fehlt! <br />';}
        
	if (isset($_POST['emotion_02']) && !is_array($_POST['emotion_02']) && trim($_POST['emotion_02'] != '')){
	$emotion_02 = htmlspecialchars($_POST['emotion_02']);}
	else{$e_emotion_02 = 'emotion_02 fehlt! <br />';}
        
	if (isset($_POST['abenteuer_01']) && !is_array($_POST['abenteuer_01']) && trim($_POST['abenteuer_01'] != '')){
	$abenteuer_01 = htmlspecialchars($_POST['abenteuer_01']);}
	else{$e_abenteuer_01 = 'abenteuer_01 fehlt! <br />';}
        
	if (isset($_POST['angst_03']) && !is_array($_POST['angst_03']) && trim($_POST['angst_03'] != '')){
	$angst_03 = htmlspecialchars($_POST['angst_03']);}
	else{$e_angst_03 = 'angst_03 fehlt! <br />';}
        
	if (isset($_POST['freimut_03']) && !is_array($_POST['freimut_03']) && trim($_POST['freimut_03'] != '')){
	$freimut_03 = htmlspecialchars($_POST['freimut_03']);}
	else{$e_freimut_03 = 'freimut_03 fehlt! <br />';}
        
	if (isset($_POST['impuls_02']) && !is_array($_POST['impuls_02']) && trim($_POST['impuls_02'] != '')){
	$impuls_02 = htmlspecialchars($_POST['impuls_02']);}
	else{$e_impuls_02 = 'impuls_02 fehlt! <br />';}
        
	if (isset($_POST['kompetenz_02']) && !is_array($_POST['kompetenz_02']) && trim($_POST['kompetenz_02'] != '')){
	$kompetenz_02 = htmlspecialchars($_POST['kompetenz_02']);}
	else{$e_kompetenz_02 = 'kompetenz_02 fehlt! <br />';}
        
	if (isset($_POST['entgegen_03']) && !is_array($_POST['entgegen_03']) && trim($_POST['entgegen_03'] != '')){
	$entgegen_03 = htmlspecialchars($_POST['entgegen_03']);}
	else{$e_entgegen_03 = 'entgegen_03 fehlt! <br />';}
        
	if (isset($_POST['gesell_02']) && !is_array($_POST['gesell_02']) && trim($_POST['gesell_02'] != '')){
	$gesell_02 = htmlspecialchars($_POST['gesell_02']);}
	else{$e_gesell_02 = 'gesell_02 fehlt! <br />';}
        
	if (isset($_POST['liberal_03']) && !is_array($_POST['liberal_03']) && trim($_POST['liberal_03'] != '')){
	$liberal_03 = htmlspecialchars($_POST['liberal_03']);}
	else{$e_liberal_03 = 'liberal_03 fehlt! <br />';}
        
	if (isset($_POST['glueck_03']) && !is_array($_POST['glueck_03']) && trim($_POST['glueck_03'] != '')){
	$glueck_03 = htmlspecialchars($_POST['glueck_03']);}
	else{$e_glueck_03 = 'glueck_03 fehlt! <br />';}
        
	if (isset($_POST['kompetenz_01']) && !is_array($_POST['kompetenz_01']) && trim($_POST['kompetenz_01'] != '')){
	$kompetenz_01 = htmlspecialchars($_POST['kompetenz_01']);}
	else{$e_kompetenz_01 = 'kompetenz_01 fehlt! <br />';}
        
	if (isset($_POST['bescheiden_01']) && !is_array($_POST['bescheiden_01']) && trim($_POST['bescheiden_01'] != '')){
	$bescheiden_01 = htmlspecialchars($_POST['bescheiden_01']);}
	else{$e_bescheiden_01 = 'bescheiden_01 fehlt! <br />';}
        
	if (isset($_POST['gesell_03']) && !is_array($_POST['gesell_03']) && trim($_POST['gesell_03'] != '')){
	$gesell_03 = htmlspecialchars($_POST['gesell_03']);}
	else{$e_gesell_03 = 'gesell_03 fehlt! <br />';}
        
	if (isset($_POST['pflicht_02']) && !is_array($_POST['pflicht_02']) && trim($_POST['pflicht_02'] != '')){
	$pflicht_02 = htmlspecialchars($_POST['pflicht_02']);}
	else{$e_pflicht_02 = 'pflicht_02 fehlt! <br />';}
        
	if (isset($_POST['vertrauen_01']) && !is_array($_POST['vertrauen_01']) && trim($_POST['vertrauen_01'] != '')){
	$vertrauen_01 = htmlspecialchars($_POST['vertrauen_01']);}
	else{$e_vertrauen_01 = 'vertrauen_01 fehlt! <br />';}
        
	if (isset($_POST['vertrauen_02']) && !is_array($_POST['vertrauen_02']) && trim($_POST['vertrauen_02'] != '')){
	$vertrauen_02 = htmlspecialchars($_POST['vertrauen_02']);}
	else{$e_vertrauen_02 = 'vertrauen_02 fehlt! <br />';}
        
	if (isset($_POST['ordnung_03']) && !is_array($_POST['ordnung_03']) && trim($_POST['ordnung_03'] != '')){
	$ordnung_03 = htmlspecialchars($_POST['ordnung_03']);}
	else{$e_ordnung_03 = 'ordnung_03 fehlt! <br />';}
        
	if (isset($_POST['glueck_01']) && !is_array($_POST['glueck_01']) && trim($_POST['glueck_01'] != '')){
	$glueck_01 = htmlspecialchars($_POST['glueck_01']);}
	else{$e_glueck_01 = 'glueck_01 fehlt! <br />';}
        
	if (isset($_POST['intellekt_02']) && !is_array($_POST['intellekt_02']) && trim($_POST['intellekt_02'] != '')){
	$intellekt_02 = htmlspecialchars($_POST['intellekt_02']);}
	else{$e_intellekt_02 = 'intellekt_02 fehlt! <br />';}
        
	if (isset($_POST['fantasie_01']) && !is_array($_POST['fantasie_01']) && trim($_POST['fantasie_01'] != '')){
	$fantasie_01 = htmlspecialchars($_POST['fantasie_01']);}
	else{$e_fantasie_01 = 'fantasie_01 fehlt! <br />';}
        
	if (isset($_POST['herzlich_01']) && !is_array($_POST['herzlich_01']) && trim($_POST['herzlich_01'] != '')){
	$herzlich_01 = htmlspecialchars($_POST['herzlich_01']);}
	else{$e_herzlich_01 = 'herzlich_01 fehlt! <br />';}
        
	if (isset($_POST['durchsetz_02']) && !is_array($_POST['durchsetz_02']) && trim($_POST['durchsetz_02'] != '')){
	$durchsetz_02 = htmlspecialchars($_POST['durchsetz_02']);}
	else{$e_durchsetz_02 = 'durchsetz_02 fehlt! <br />';}
        
	if (isset($_POST['altruismus_02']) && !is_array($_POST['altruismus_02']) && trim($_POST['altruismus_02'] != '')){
	$altruismus_02 = htmlspecialchars($_POST['altruismus_02']);}
	else{$e_altruismus_02 = 'altruismus_02 fehlt! <br />';}
        
	if (isset($_POST['herzlich_03']) && !is_array($_POST['herzlich_03']) && trim($_POST['herzlich_03'] != '')){
	$herzlich_03 = htmlspecialchars($_POST['herzlich_03']);}
	else{$e_herzlich_03 = 'herzlich_03 fehlt! <br />';}
        
	if (isset($_POST['verletz_02']) && !is_array($_POST['verletz_02']) && trim($_POST['verletz_02'] != '')){
	$verletz_02 = htmlspecialchars($_POST['verletz_02']);}
	else{$e_verletz_02 = 'verletz_02 fehlt! <br />';}
        
	if (isset($_POST['gesell_01']) && !is_array($_POST['gesell_01']) && trim($_POST['gesell_01'] != '')){
	$gesell_01 = htmlspecialchars($_POST['gesell_01']);}
	else{$e_gesell_01 = 'gesell_01 fehlt! <br />';}
        
	if (isset($_POST['pessi_03']) && !is_array($_POST['pessi_03']) && trim($_POST['pessi_03'] != '')){
	$pessi_03 = htmlspecialchars($_POST['pessi_03']);}
	else{$e_pessi_03 = 'pessi_03 fehlt! <br />';}
        
	if (isset($_POST['reizbar_02']) && !is_array($_POST['reizbar_02']) && trim($_POST['reizbar_02'] != '')){
	$reizbar_02 = htmlspecialchars($_POST['reizbar_02']);}
	else{$e_reizbar_02 = 'reizbar_02 fehlt! <br />';}
        
	if (isset($_POST['freimut_01']) && !is_array($_POST['freimut_01']) && trim($_POST['freimut_01'] != '')){
	$freimut_01 = htmlspecialchars($_POST['freimut_01']);}
	else{$e_freimut_01 = 'freimut_01 fehlt! <br />';}
        
	if (isset($_POST['aktiv_01']) && !is_array($_POST['aktiv_01']) && trim($_POST['aktiv_01'] != '')){
	$aktiv_01 = htmlspecialchars($_POST['aktiv_01']);}
	else{$e_aktiv_01 = 'aktiv_01 fehlt! <br />';}
        
	if (isset($_POST['befang_03']) && !is_array($_POST['befang_03']) && trim($_POST['befang_03'] != '')){
	$befang_03 = htmlspecialchars($_POST['befang_03']);}
	else{$e_befang_03 = 'befang_03 fehlt! <br />';}
        
	if (isset($_POST['freimut_02']) && !is_array($_POST['freimut_02']) && trim($_POST['freimut_02'] != '')){
	$freimut_02 = htmlspecialchars($_POST['freimut_02']);}
	else{$e_freimut_02 = 'freimut_02 fehlt! <br />';}
        
	if (isset($_POST['impuls_03']) && !is_array($_POST['impuls_03']) && trim($_POST['impuls_03'] != '')){
	$impuls_03 = htmlspecialchars($_POST['impuls_03']);}
	else{$e_impuls_03 = 'impuls_03 fehlt! <br />';}
        
	if (isset($_POST['aktiv_02']) && !is_array($_POST['aktiv_02']) && trim($_POST['aktiv_02'] != '')){
	$aktiv_02 = htmlspecialchars($_POST['aktiv_02']);}
	else{$e_aktiv_02 = 'aktiv_02 fehlt! <br />';}
        
	if (isset($_POST['sorgfalt_01']) && !is_array($_POST['sorgfalt_01']) && trim($_POST['sorgfalt_01'] != '')){
	$sorgfalt_01 = htmlspecialchars($_POST['sorgfalt_01']);}
	else{$e_sorgfalt_01 = 'sorgfalt_01 fehlt! <br />';}
        
	if (isset($_POST['impuls_01']) && !is_array($_POST['impuls_01']) && trim($_POST['impuls_01'] != '')){
	$impuls_01 = htmlspecialchars($_POST['impuls_01']);}
	else{$e_impuls_01 = 'impuls_01 fehlt! <br />';}
        
	if (isset($_POST['aesthetik_03']) && !is_array($_POST['aesthetik_03']) && trim($_POST['aesthetik_03'] != '')){
	$aesthetik_03 = htmlspecialchars($_POST['aesthetik_03']);}
	else{$e_aesthetik_03 = 'aesthetik_03 fehlt! <br />';}
        
	if (isset($_POST['fantasie_03']) && !is_array($_POST['fantasie_03']) && trim($_POST['fantasie_03'] != '')){
	$fantasie_03 = htmlspecialchars($_POST['fantasie_03']);}
	else{$e_fantasie_03 = 'fantasie_03 fehlt! <br />';}  
	      
	if (isset($_POST['bescheiden_03']) && !is_array($_POST['bescheiden_03']) && trim($_POST['bescheiden_03'] != '')){
	$bescheiden_03 = htmlspecialchars($_POST['bescheiden_03']);}
	else{$e_bescheiden_03 = 'bescheiden_03 fehlt! <br />';}
        
	if (isset($_POST['sorgfalt_03']) && !is_array($_POST['sorgfalt_03']) && trim($_POST['sorgfalt_03'] != '')){
	$sorgfalt_03 = htmlspecialchars($_POST['sorgfalt_03']);}
	else{$e_sorgfalt_03 = 'sorgfalt_03 fehlt! <br />';}        
	
	if (isset($_POST['durchsetz_01']) && !is_array($_POST['durchsetz_01']) && trim($_POST['durchsetz_01'] != '')){
	$durchsetz_01 = htmlspecialchars($_POST['durchsetz_01']);}
	else{$e_durchsetz_01 = 'durchsetz_01 fehlt! <br />';}
        
	if (isset($_POST['entgegen_02']) && !is_array($_POST['entgegen_02']) && trim($_POST['entgegen_02'] != '')){
	$entgegen_02 = htmlspecialchars($_POST['entgegen_02']);}
	else{$e_entgegen_02 = 'entgegen_02 fehlt! <br />';}        
	
	if (isset($_POST['mitgefuehl_03']) && !is_array($_POST['mitgefuehl_03']) && trim($_POST['mitgefuehl_03'] != '')){
	$mitgefuehl_03 = htmlspecialchars($_POST['mitgefuehl_03']);}
	else{$e_mitgefuehl_03 = 'mitgefuehl_03 fehlt! <br />';}
        
	if (isset($_POST['verletz_03']) && !is_array($_POST['verletz_03']) && trim($_POST['verletz_03'] != '')){
	$verletz_03 = htmlspecialchars($_POST['verletz_03']);}
	else{$e_verletz_03 = 'verletz_03 fehlt! <br />';}        
	
	if (isset($_POST['emotion_01']) && !is_array($_POST['emotion_01']) && trim($_POST['emotion_01'] != '')){
	$emotion_01 = htmlspecialchars($_POST['emotion_01']);}
	else{$e_emotion_01 = 'emotion_01 fehlt! <br />';}
        
	if (isset($_POST['angst_02']) && !is_array($_POST['angst_02']) && trim($_POST['angst_02'] != '')){
	$angst_02 = htmlspecialchars($_POST['angst_02']);}
	else{$e_angst_02 = 'angst_02 fehlt! <br />';}        
	
	if (isset($_POST['abenteuer_03']) && !is_array($_POST['abenteuer_03']) && trim($_POST['abenteuer_03'] != '')){
	$abenteuer_03 = htmlspecialchars($_POST['abenteuer_03']);}
	else{$e_abenteuer_03 = 'abenteuer_03 fehlt! <br />';}
        
	if (isset($_POST['vertrauen_03']) && !is_array($_POST['vertrauen_03']) && trim($_POST['vertrauen_03'] != '')){
	$vertrauen_03 = htmlspecialchars($_POST['vertrauen_03']);}
	else{$e_vertrauen_03 = 'vertrauen_03 fehlt! <br />';}        
	
	if (isset($_POST['pessi_01']) && !is_array($_POST['pessi_01']) && trim($_POST['pessi_01'] != '')){
	$pessi_01 = htmlspecialchars($_POST['pessi_01']);}
	else{$e_pessi_01 = 'pessi_01 fehlt! <br />';}
        
	if (isset($_POST['ordnung_02']) && !is_array($_POST['ordnung_02']) && trim($_POST['ordnung_02'] != '')){
	$ordnung_02 = htmlspecialchars($_POST['ordnung_02']);}
	else{$e_ordnung_02 = 'ordnung_02 fehlt! <br />';}        
	
	if (isset($_POST['bescheiden_02']) && !is_array($_POST['bescheiden_02']) && trim($_POST['bescheiden_02'] != '')){
	$bescheiden_02 = htmlspecialchars($_POST['bescheiden_02']);}
	else{$e_bescheiden_02 = 'bescheiden_02 fehlt! <br />';}
        
	if (isset($_POST['emotion_03']) && !is_array($_POST['emotion_03']) && trim($_POST['emotion_03'] != '')){
	$emotion_03 = htmlspecialchars($_POST['emotion_03']);}
	else{$e_emotion_03 = 'emotion_03 fehlt! <br />';}        
	
	if (isset($_POST['aesthetik_02']) && !is_array($_POST['aesthetik_02']) && trim($_POST['aesthetik_02'] != '')){
	$aesthetik_02 = htmlspecialchars($_POST['aesthetik_02']);}
	else{$e_aesthetik_02 = 'aesthetik_02 fehlt! <br />';}
        
	if (isset($_POST['leistung_01']) && !is_array($_POST['leistung_01']) && trim($_POST['leistung_01'] != '')){
	$leistung_01 = htmlspecialchars($_POST['leistung_01']);}
	else{$e_leistung_01 = 'leistung_01 fehlt! <br />';}        
	
	if (isset($_POST['durchsetz_03']) && !is_array($_POST['durchsetz_03']) && trim($_POST['durchsetz_03'] != '')){
	$durchsetz_03 = htmlspecialchars($_POST['durchsetz_03']);}
	else{$e_durchsetz_03 = 'durchsetz_03 fehlt! <br />';}
        
	if (isset($_POST['pflicht_01']) && !is_array($_POST['pflicht_01']) && trim($_POST['pflicht_01'] != '')){
	$pflicht_01 = htmlspecialchars($_POST['pflicht_01']);}
	else{$e_pflicht_01 = 'pflicht_01 fehlt! <br />';}        
	
	if (isset($_POST['liberal_02']) && !is_array($_POST['liberal_02']) && trim($_POST['liberal_02'] != '')){
	$liberal_02 = htmlspecialchars($_POST['liberal_02']);}
	else{$e_liberal_02 = 'liberal_02 fehlt! <br />';}
        
	if (isset($_POST['befang_02']) && !is_array($_POST['befang_02']) && trim($_POST['befang_02'] != '')){
	$befang_02 = htmlspecialchars($_POST['befang_02']);}
	else{$e_befang_02 = 'befang_02 fehlt! <br />';}        
	
	if (isset($_POST['entgegen_01']) && !is_array($_POST['entgegen_01']) && trim($_POST['entgegen_01'] != '')){
	$entgegen_01 = htmlspecialchars($_POST['entgegen_01']);}
	else{$e_entgegen_01 = 'entgegen_01 fehlt! <br />';}
        
	if (isset($_POST['disziplin_01']) && !is_array($_POST['disziplin_01']) && trim($_POST['disziplin_01'] != '')){
	$disziplin_01 = htmlspecialchars($_POST['disziplin_01']);}
	else{$e_disziplin_01 = 'disziplin_01 fehlt! <br />';}        
	
	if (isset($_POST['altruismus_01']) && !is_array($_POST['altruismus_01']) && trim($_POST['altruismus_01'] != '')){
	$altruismus_01 = htmlspecialchars($_POST['altruismus_01']);}
	else{$e_altruismus_01 = 'altruismus_01 fehlt! <br />';}
        
	if (isset($_POST['leistung_02']) && !is_array($_POST['leistung_02']) && trim($_POST['leistung_02'] != '')){
	$leistung_02 = htmlspecialchars($_POST['leistung_02']);}
	else{$e_leistung_02 = 'leistung_02 fehlt! <br />';}        
	
	if (isset($_POST['pflicht_03']) && !is_array($_POST['pflicht_03']) && trim($_POST['pflicht_03'] != '')){
	$pflicht_03 = htmlspecialchars($_POST['pflicht_03']);}
	else{$e_pflicht_03 = 'pflicht_03 fehlt! <br />';}
        
	if (isset($_POST['neugier_03']) && !is_array($_POST['neugier_03']) && trim($_POST['neugier_03'] != '')){
	$neugier_03 = htmlspecialchars($_POST['neugier_03']);}
	else{$e_neugier_03 = 'neugier_03 fehlt! <br />';}        
	
	if (isset($_POST['disziplin_02']) && !is_array($_POST['disziplin_02']) && trim($_POST['disziplin_02'] != '')){
	$disziplin_02 = htmlspecialchars($_POST['disziplin_02']);}
	else{$e_disziplin_02 = 'disziplin_02 fehlt! <br />';}
        
	if (isset($_POST['pessi_02']) && !is_array($_POST['pessi_02']) && trim($_POST['pessi_02'] != '')){
	$pessi_02 = htmlspecialchars($_POST['pessi_02']);}
	else{$e_pessi_02 = 'pessi_02 fehlt! <br />';}        
	
	if (isset($_POST['liberal_01']) && !is_array($_POST['liberal_01']) && trim($_POST['liberal_01'] != '')){
	$liberal_01 = htmlspecialchars($_POST['liberal_01']);}
	else{$e_liberal_01 = 'liberal_01 fehlt! <br />';}
        
	if (isset($_POST['disziplin_03']) && !is_array($_POST['disziplin_03']) && trim($_POST['disziplin_03'] != '')){
	$disziplin_03 = htmlspecialchars($_POST['disziplin_03']);}
	else{$e_disziplin_03 = 'disziplin_03 fehlt! <br />';}        
	
	if (isset($_POST['abenteuer_02']) && !is_array($_POST['abenteuer_02']) && trim($_POST['abenteuer_02'] != '')){
	$abenteuer_02 = htmlspecialchars($_POST['abenteuer_02']);}
	else{$e_abenteuer_02 = 'abenteuer_02 fehlt! <br />';}
        
	if (isset($_POST['neugier_01']) && !is_array($_POST['neugier_01']) && trim($_POST['neugier_01'] != '')){
	$neugier_01 = htmlspecialchars($_POST['neugier_01']);}
	else{$e_neugier_01 = 'neugier_01 fehlt! <br />';}        
	
	if (isset($_POST['fantasie_02']) && !is_array($_POST['fantasie_02']) && trim($_POST['fantasie_02'] != '')){
	$fantasie_02 = htmlspecialchars($_POST['fantasie_02']);}
	else{$e_fantasie_02 = 'fantasie_02 fehlt! <br />';}
?>