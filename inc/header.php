<?php
session_start();
if (!isset($_SESSION['login'])) {
header ('Location: http://vps116895.ovh.net/metronic/login.php');
exit();
}
include ('config.php');
$result = mysql_query("SELECT iduser,login,nom_user,prenom_user, poste FROM utilisateur WHERE login = '".$_SESSION['login']. "'") or die(mysql_error());
$donnees_login = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php echo $logiciel; ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo $rootsite; ?>/assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>