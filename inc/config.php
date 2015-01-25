<?php
//base
$host = "localhost";
$user = "root";
$pass = "1992maxime";
$base = "metronic";

mysql_connect($host, $user, $pass)or die(mysql_error());
mysql_select_db($base);


define("SITE_URL", "http://vps116895.ovh.net/");
define("RACINE", "metronic/");
define("ASSETS", "assets/");
define("LOGICIEL", "METRONIC-CORE V5");

$logiciel = "METRONIC-CORE V5";
?>