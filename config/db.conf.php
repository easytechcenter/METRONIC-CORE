<?php 
define("HOST", "localhost");
define("USER", "root");
define("MDP", "1992maxime");
define("BASE", "metronic");

$sql_connect = mysql_connect(HOST,USER,MDP);
$sql_db = mysql_select_db(BASE);



 ?>