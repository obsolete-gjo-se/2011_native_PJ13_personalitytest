<?php
$sql_sitemap = "SELECT * FROM sitemap WHERE path ='".$path."' LIMIT 1";
$result_sitemap = mysql_query($sql_sitemap) or die(mysql_error());
$result_sitemap = mysql_fetch_assoc($result_sitemap);
echo '<title>' .$result_sitemap['titel']. '</title>';
echo '<meta name="language" content="' . $result_sitemap['language'] . '" />';
echo '<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />';
echo '<meta name="robots" content="' . $result_sitemap['robots'] . '" />';
echo '<meta name="description" content="' . $result_sitemap['desc'] . '" />';
echo '<meta name="keywords" content="' . $result_sitemap['keyword'] . '" />';
echo '<base href="http://'. $host .'" />';
echo '<link rel="stylesheet" type="text/css" href="/mimes/styles/central.css" />';
echo '<!--[if lte IE 7]>';
echo '<link rel="stylesheet" type="text/css" href="/mimes/styles/patches/patch_central.css" />';
echo '<![endif]-->';
echo '<link rel="shortcut icon" type="image/x-icon" href="/mimes/images/favicon.ico" />';
echo '<script type="text/javascript" src="/mimes/library/jquery-1.7.1.min.js"></script>';
echo '<script type="text/javascript" src="/mimes/library/jquery.validate.min.js"></script>';
?>