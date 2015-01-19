<?php
//Connexion BDD
$host = "localhost";
$user = "root";
$pass = "1992maxime";
$base = "metronic" //ou autre

mysql_connect($host, $user, $pass)or die(mysql_error());
mysql_select_db($base);

//Rootsite
$rootsite = "http://vps116895.ovh.net/metronic/";


?>