<?php
include ('config/db.conf.php');
include ('config/define.php');
include ('config/error.php');
?>
<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre - backend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo SITE_URL, RACINE, STYLE; ?>/images/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo SITE_URL, RACINE, STYLE; ?>/images/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo SITE_URL, RACINE, STYLE; ?>/images/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo SITE_URL, RACINE, STYLE; ?>/images/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo SITE_URL, RACINE, STYLE; ?>/images/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?php echo SITE_URL, RACINE, STYLE; ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo SITE_URL, RACINE, STYLE; ?>css/layout.css">
        <link rel="stylesheet" href="<?php echo SITE_URL, RACINE, STYLE; ?>css/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE, STYLE; ?>plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->
<?php
            // on teste si le visiteur a soumis le formulaire de connexion
            date_default_timezone_set("UTC");
            $date = date('d/m/y');
            $heure = date('H:i');
            if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
                if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

                    // on teste si une entrée de la base contient ce couple login / pass
                    $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"  AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
                    $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                    $data = mysql_fetch_array($req);
                    mysql_free_result($req);
                    mysql_close();

                    // si on obtient une réponse, alors l'utilisateur est un membre
                    if ($data[0] == 1) {
                        session_start();
                        $_SESSION['login'] = $_POST['login'];
                        header('Location: index.php');
                        exit();
                    }
                    // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
                    elseif ($data[0] == 0) {
                        $erreur = E8777;
                    }
                    // sinon, alors la, il y a un gros problème :)
                    else {
                        $erreur = E8776;
                    }
                }
                else {
                $erreur = E8778;
                }
            }
            ?>

    <!-- START Body -->
    <body>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Connectez vous à <?php echo LOGICIEL; ?>.</h5>
                        </div>
                        <!--/ Brand -->

                        <hr><!-- horizontal line -->

                        <!-- Login form -->
                        <form class="panel" name="form-login" action="login.php" method="POST">
                            <div class="panel-body">
                                <!-- Alert message -->
                                <div class="alert alert-warning">
                                    <span class="ico-warning-sign" style="color: orange"></span> <?php echo $erreur; ?>
                                </div>
                                <!--/ Alert message -->
                                <div class="form-group">
                                    <select class="form-control" name="lang">
                                        <option value="0">Select language</option>
                                        <option value="en">English</option>
                                        <option value="da">Danish - Dansk</option>
                                        <option value="nl">Dutch - Nederlands</option>
                                        <option value="en-gb">English - UK</option>
                                        <option value="fr">French - français</option>
                                        <option value="de">German - Deutsch</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-stack has-icon pull-left">
                                        <input name="login" type="text" class="form-control input-lg" placeholder="Username / email" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                    <div class="form-stack has-icon pull-left">
                                        <input name="pass" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container"class="mb15"></div>
                                <!--/ Error container -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox custom-checkbox">  
                                                <input type="checkbox" name="remember" id="remember" value="1">  
                                                <label for="remember">&nbsp;&nbsp;Remember me</label>   
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <a href="javascript:void(0);">Lost password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-success" name="connexion" value="Connexion"><span class="semibold">Sign In</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->

                        <hr><!-- horizontal line -->

                        <p class="text-muted text-center">Don't have any account? <a class="semibold" href="page-register.html">Sign up to get started</a></p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="../javascript/vendor.js"></script>
        <script type="text/javascript" src="../javascript/core.js"></script>
        <script type="text/javascript" src="../javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="../plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="../javascript/backend/pages/login.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>