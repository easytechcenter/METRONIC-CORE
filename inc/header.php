<?php
session_start();
include ('config.php');
if (!isset($_SESSION['login'])) {
header("Location:".SITE_URL."".RACINE."login.php");
exit();
}
$result = mysql_query("SELECT iduser,login,nom_user,prenom_user, poste FROM utilisateur WHERE login = '".$_SESSION['login']. "'") or die(mysql_error());
$donnees_login = mysql_fetch_array($result);
$iduser = $donnees_login['iduser'];
include ("/var/www/metronic/fonction/general.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php echo LOGICIEL; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo SITE_URL,RACINE,ASSETS; ?>/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE --> 
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>                                  
    </head>