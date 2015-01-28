<?php
include ('../inc/config.php');
//ENVOIE DE MAIL
if(isset($_POST['sent-mail']) && $_POST['sent-mail'] == 'Valider'){
    $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $objet = htmlentities(addslashes($_POST['objet']));
    $corps_message = htmlentities(addslashes($_POST['corps_message']));
    $importance = $_POST['importance'];

    $sql_create_mail = mysql_query("INSERT INTO `messagerie`(`idmessage`, `objet`, `corps_message`, `date_message`, `heure_message`, `importance`, `etat_message`) 
        VALUES (NULL ,'$objet','$corps_message','$date','$heure','$importance','0')")or die(mysql_error());


    //Import précedent
    $sql_import_mail = mysql_query("SELECT * FROM messagerie WHERE objet = '$objet' AND date_message = '$date' AND heure_message = '$heure'")or die(mysql_error());
    $donnee_import_mail = mysql_fetch_array($sql_import_mail);
    $idmessage = $donnee_import_mail['idmessage'];

    $sql_insert_reception = mysql_query("INSERT INTO `boite_reception`(`idboitereception`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','$destinataire')")or die(mysql_error());
    $sql_insert_envoie = mysql_query("INSERT INTO `boite_envoie`(`idboiteenvoie`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','$destinataire')")or die(mysql_error());
    if($sql_create_mail == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?sent_mail=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?sent_mail=false");
    }
}
//REPONSE AU MAIL
if(isset($_POST['sent-reply-mail']) && $_POST['sent-reply-mail'] == 'Valider'){
    $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $objet = htmlentities(addslashes($_POST['objet']));
    $corps_message = htmlentities(addslashes($_POST['message_prec']."<br><hr><br>".$_POST['corps_message']));
    $importance = $_POST['importance'];

    $sql_create_reply = mysql_query("INSERT INTO `messagerie`(`idmessage`, `objet`, `corps_message`, `date_message`, `heure_message`, `importance`, `etat_message`) 
        VALUES (NULL ,'$objet','$corps_message','$date','$heure','$importance','0')");

    //Import Précédent
    $sql_import_mail = mysql_query("SELECT * FROM messagerie WHERE objet = '$objet' AND date_message = '$date' AND heure_message = '$heure'")or die(mysql_error());
    $donnee_import_mail = mysql_fetch_array($sql_import_mail);
    $idmessage = $donnee_import_mail['idmessage'];

    $sql_insert_reception = mysql_query("INSERT INTO `boite_reception`(`idboitereception`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','$destinataire')");
    $sql_insert_envoie = mysql_query("INSERT INTO `boite_envoie`(`idboiteenvoie`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','$destinataire')");

    if($sql_create_reply == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?sent_reply_mail=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?sent_reply_mail=false");
    }

}
//Transfere INBOX-->TRASH
if(isset($_GET['trash_inbox']) && $_GET['trash_inbox'] == 'Valider'){
    $idmessage = $_GET['idmessage'];

    $sql_import_reception = mysql_query("SELECT * FROM boite_reception WHERE idmessage = '$idmessage'")or die(mysql_error());
    $import_reception = mysql_fetch_array($sql_import_reception);
    $expediteur = $import_reception['expediteur'];
    $destinataire = $import_reception['destinataire'];

    $sql_trash_reception = mysql_query("INSERT INTO `boite_corbeil`(`idboitecorbeil`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','destinataire')");

    $sql_delete_reception = mysql_query("DELETE FROM boite_reception WHERE idmessage = '$idmessage'")or die(mysql_error());

    if($sql_delete_reception == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?trash_inbox=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?trash_inbox=false");
    }

}
//Transfere SENTBOX-->TRASH
if(isset($_GET['trash_sentbox']) && $_GET['trash_sentbox'] == 'Valider'){
    $idmessage = $_GET['idmessage'];

    $sql_import_envoie = mysql_query("SELECT * FROM boite_envoie WHERE idmessage = '$idmessage'")or die(mysql_error());
    $import_envoie = mysql_fetch_array($sql_import_envoie);
    $expediteur = $import_envoie['expediteur'];
    $destinataire = $import_envoie['destinataire'];

    $sql_trash_envoie = mysql_query("INSERT INTO `boite_corbeil`(`idboitecorbeil`, `idmessage`, `expediteur`, `destinataire`) 
        VALUES (NULL,'$idmessage','$expediteur','destinataire')");

    $sql_delete_envoie = mysql_query("DELETE FROM boite_reception WHERE idmessage = '$idmessage'")or die(mysql_error());

    if($sql_delete_envoie == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/sentbox.php?trash_sentbox=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/sentbox.php?trash_sentbox=false");
    }

}
//SUPPRESSION DEFINITIVE DU MAIL
if(isset($_GET['del_mail']) && $_GET['del_mail'] == 'Valider'){
    $idmessage = $_GET['idmessage'];

    $delete_trash = mysql_query("DELETE FROM boite_corbeil WHERE idmessage = '$idmessage'")or die(mysql_error());

    if($delete_trash == TRUE){
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?del_mail=true");
    }else{
        header("Location:".SITE_URL."".RACINE."module/user/mail/inbox.php?del_mail=false");
    }

}
?>