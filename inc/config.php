<?php
//base
$host = "localhost";
$user = "root";
$pass = "1992maxime";
$base = "metronic";

mysql_connect($host, $user, $pass)or die(mysql_error());
mysql_select_db($base);


$rootsite = "http://vps116895.ovh.net/metronic/";

$logiciel = "METRONIC-CORE V5";
?>