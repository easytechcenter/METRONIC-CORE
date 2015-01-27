<?php
include ('../inc/config.php');
if(isset($_POST['sent-mail']) && $_POST['sent-mail'] == 'Valider'){
    $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $objet = htmlentities(addslashes($_POST['objet']));
    $corps_message = htmlentities(addslashes($_POST['corps_message']));
    $importance = $_POST['importance'];

    $sql_sent_mail = mysql_query("INSERT INTO `messagerie`(`idmessage`, `expediteur`, `destinataire`, `objet`, `corps_message`, `etat_message`, `date_message`, `heure_message`, `importance`) 
        VALUES (NULL,'$expediteur','$destinataire','$objet','$corps_message','0','$date','$heure','$importance')");

    if($sql_sent_mail == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?req=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?req=false");
    }
}