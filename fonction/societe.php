<?php
include('../inc/config.php');
if(isset($_POST['modif-societe']) && $_POST['modif-societe'] == 'Valider'){

	//Récupération des variables POST
	$idsociete = $_POST['idsociete'];
	$raison_social = htmlentities(addslashes($_POST['raison_social']));
	$adresse1 = htmlentities(addslashes($_POST['adresse1']));
	$adresse2 = htmlentities(addslashes($_POST['adresse2']));
	$cp = $_POST['cp'];
	$ville = htmlentities(addslashes($_POST['ville']));
	$telephone = $_POST['telephone'];
	$fax = $_POST['fax'];
	$mail = htmlentities(addslashes($_POST['mail']));
	$siret = $_POST['siret'];
	$ape = $_POST['ape'];
	$tva_intra = $_POST['tva_intra'];

	$sql_modif_societe = mysql_query("UPDATE societe SET raison_social = '$raison_social', adresse1 = '$adresse1', adresse2 = '$adresse2', cp = '$cp', ville = '$ville', telephone = '$telephone', fax = '$fax', mail = '$mail', siret = '$siret', ape = '$ape', tva_intra = '$tva_intra' WHERE idsociete = '$idsociete'");

	if($sql_modif_societe == TRUE){
		header("Location:".SITE_URL."".RACINE."module/parametre/societe/index.php?etat_req=true");
	}else{
		header("Location:".SITE_URL."".RACINE."module/parametre/societe/index.php?etat_req=false");
	}
}