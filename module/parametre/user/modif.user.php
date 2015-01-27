<?php
include ('../../../inc/header.php'); 
define("PAGE", "Modification d'un Utilisateur"); // Nom de la Page
?>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <?php include ('../../../inc/sidebar.php'); ?>
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php include ('../../../inc/headerbar.php'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#"><?php echo LOGICIEL; ?></a></li>
                    <li><a href="#">Gestion des Utilisateurs</a></li>                    
                    <li class="active"><?php echo PAGE; ?></li>
                </ul>
                <!-- END BREADCRUMB -->                
                <?php
                $iduser = $_GET['iduser'];
                $sql_user = mysql_query("SELECT * FROM utilisateur WHERE iduser = '$iduser'")or die(mysql_error());
                $donnee_user = mysql_fetch_array($sql_user);
                ?>
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Modification d'un Utilisateur</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="<?php echo SITE_URL,RACINE; ?>fonction/user.php" method="POST">
                                <input type="hidden" name="iduser" value="<?php echo $iduser; ?>" />
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Modification</strong> Utilisateur</h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                            if(isset($_GET['no_pass']) && $_GET['no_pass'] == "true"){
                                        ?>
                                        <div role="alert" class="alert alert-warning">
                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-warning"></i> <strong>Attention!</strong> Les mots de passes ne correspondent pas.
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if(isset($_GET['etat_req']) && $_GET['etat_req'] == "true"){
                                        ?>
                                        <div role="alert" class="alert alert-success">
                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-check"></i> <strong>Succès!</strong> L'utilisateur à été modifier.
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if(isset($_GET['etat_req']) && $_GET['etat_req'] == "false"){
                                        ?>
                                        <div role="alert" class="alert alert-danger">
                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-times"></i> <strong>Erreur!</strong> L'utilisateur n'a pas été modifier.
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="panel-body">                                                                        
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nom d'utilisateur</label>
                                            <div class="col-md-10">
                                                <input type="text" value="<?php echo $donnee_user['login']; ?>" name="login" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Mot de Passe</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Confirmation du mot de passe</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" name="password_confirm" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Nom de l'utilisateur</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nom_user" value="<?php echo $donnee_user['nom_user']; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Prénom de l'utilisateur</label>
                                            <div class="col-md-10">
                                                <input type="text" name="prenom_user" value="<?php echo $donnee_user['prenom_user']; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Poste de l'utilisateur</label>
                                            <div class="col-md-10">
                                                <input type="text" name="poste" value="<?php echo $donnee_user['poste']; ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-success btn-lg" name="modif-user" value="Valider"><i class="fa fa-check"></i> Modifier un utilisateur</button>
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>


                                    </div>
                                    <div class="panel-footer">
                                        <button type="reset" class="btn btn-default">Nettoyer le formulaire</button>                                    
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Voulez-vous vous <strong>Déconnecter</strong> ?</div>
                    <div class="mb-content">
                        <p>Etes-vous sur de vouloir vous déconnecter du système ?</p>                    
                        <p>Cliquez sur <strong>Non</strong> si vous voulez continuer votre travail.<br> Cliquez sur <strong>Oui</strong> si vous voulez vous déconnecter de l'interface.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo SITE_URL,RACINE; ?>logout.php" class="btn btn-success btn-lg">Oui</a>
                            <button class="btn btn-default btn-lg mb-control-close">Non</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo SITE_URL,RACINE,ASSETS; ?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo SITE_URL,RACINE,ASSETS; ?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






