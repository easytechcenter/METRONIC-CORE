<?php
include('inc/config.php');
$sql_version = mysql_query("SELECT * FROM maj ORDER BY version_latest DESC")or die(mysql_error());
$donnee_version = mysql_fetch_array($sql_version);
?>

<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title><?php echo $logiciel; ?> - CONNEXION</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo SITE_URL,RACINE,ASSETS; ?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <?php
                // on teste si le visiteur a soumis le formulaire de connexion
                date_default_timezone_set("UTC");
                $date = date('d/m/y');
                $heure = date('H:i');
                if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
                    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

                        // on teste si une entrée de la base contient ce couple login / pass
                        $sql = 'SELECT count(*) FROM utilisateur WHERE login="'.mysql_escape_string($_POST['login']).'"  AND pass="'.mysql_escape_string(md5($_POST['pass'])).'"';
                        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                        $data = mysql_fetch_array($req);
                        $login = $_POST['login'];
                        $sql_user = mysql_query("SELECT * FROM utilisateur WHERE login = '$login'")or die(mysql_error());
                        $donnee_user = mysql_fetch_array($sql_user);

                        // si on obtient une réponse, alors l'utilisateur est un membre
                        if ($data[0] == 1) {
                            session_start();
                            $_SESSION['login'] = $_POST['login'];
                            mysql_query("UPDATE utilisateur SET connect = '1' WHERE iduser =".$donnee_user['iduser'])or die(mysql_error());
                            header('Location: index.php');
                            exit();
                        }
                        // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
                        elseif ($data[0] == 0) {
                            $erreur = "
                                <div role='alert' class='alert alert-warning'>
                                    <button data-dismiss='alert' class='close' type='button'>
                                        <span aria-hidden='true'>×</span>
                                        <span class='sr-only'>Close</span>
                                    </button>
                                    <strong>Attention!</strong> Compte non reconnu.
                                </div>
                                ";
                        }
                        // sinon, alors la, il y a un gros problème :)
                        else {
                            $erreur = "
                                <div role='alert' class='alert alert-warning'>
                                    <button data-dismiss='alert' class='close' type='button'>
                                        <span aria-hidden='true'>×</span>
                                        <span class='sr-only'>Close</span>
                                    </button>
                                    <strong>Attention!</strong> Problème dans la base de donnée.<br>Plusieurs membre avec la même adresse Mail.<br>Contactez l'administrateur système.
                                </div>
                                ";
                        }
                    }
                    else {
                    $erreur = "
                                <div role='alert' class='alert alert-warning'>
                                    <button data-dismiss='alert' class='close' type='button'>
                                        <span aria-hidden='true'>×</span>
                                        <span class='sr-only'>Close</span>
                                    </button>
                                    <strong>Attention!</strong> Au moins un des champs vide.
                                </div>
                                ";
                    }
                }
                ?>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenue</strong>, connexion à l'interface <?php echo $logiciel; ?></div>
                    <form action="login.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="login"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Mot de passe" name="pass"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block" name="connexion" value="Connexion">Connexion</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 <?php echo $logiciel; ?>
                    </div>
                    <div class="pull-right">
                        Version: <?php echo $donnee_version['version_latest']; ?>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






