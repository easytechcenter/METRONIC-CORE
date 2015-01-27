<?php
include ('../inc/config.php');
if(isset($_POST['add-user']) && $_POST['add-user'] == 'Valider'){
	if($_POST['password'] == $_POST['password_confirm']){
		$login = $_POST['login'];
		$pass_clear = $_POST['password'];
		$pass = md5($pass_clear);
		$nom_user = htmlentities(addslashes($_POST['nom_user']));
		$prenom_user = htmlentities(addslashes($_POST['prenom_user']));
		$poste = htmlentities(addslashes($_POST['poste']));

		$sql_add_user = mysql_query("INSERT INTO `utilisateur`(`iduser`, `login`, `pass`, `nom_user`, `prenom_user`, `poste`) 
			VALUES (NULL,'$login','$pass','$nom_user','$prenom_user','$poste')");

		if($sql_add_user == TRUE){
			header("Location:".SITE_URL."".RACINE."module/parametre/user/add.user.php?etat_req=true");
		}else{
			header("Location:".SITE_URL."".RACINE."module/parametre/user/add.user.php?etat_req=false");
		}

	}else{
		header("Location:".SITE_URL."".RACINE."module/parametre/user/add.user.php?no_pass=true");
	}
}

if(isset($_POST['modif-user']) && $_POST['modif-user'] == 'Valider'){
	if($_POST['password'] == $_POST['password_confirm']){
		$iduser = $_POST['iduser'];
		$login = $_POST['login'];
		$pass = md5($_POST['password']);
		$nom_user = htmlentities(addslashes($_POST['nom_user']));
		$prenom_user = htmlentities(addslashes($_POST['prenom_user']));
		$poste = htmlentities(addslashes($_POST['poste']));

		$sql_modif_user = mysql_query("UPDATE utilisateur SET login = '$login', pass = '$pass', nom_user = '$nom_user', prenom_user = '$prenom_user', poste = '$poste' WHERE iduser = '$iduser'");

		if($sql_modif_user == TRUE){
			header("Location:".SITE_URL."".RACINE."module/parametre/user/modif.user.php?iduser=".$iduser."&etat_req=true");
		}else{
			header("Location:".SITE_URL."".RACINE."module/parametre/user/modif.user.php?iduser=".$iduser."&etat_req=false");
		}

	}else{
		header("Location:".SITE_URL."".RACINE."module/parametre/user/modif.user.php?iduser=".$iduser."&no_pass=true");
	}
}
if(isset($_GET['supp-user']) && $_GET['supp-user'] == 'Valider'){
	$iduser = $_GET['iduser'];

	$sql_delete_user = mysql_query("DELETE FROM utilisateur WHERE iduser = '$iduser'");

	if($sql_delete_user == TRUE){
		header("Location:".SITE_URL."".RACINE."module/parametre/user/index.php?etat_req=true");
	}else{
		header("Location:".SITE_URL."".RACINE."module/parametre/user/index.php?etat_req=false");
	}
}
?>