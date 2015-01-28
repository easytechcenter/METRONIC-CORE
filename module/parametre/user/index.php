<?php
include ('../../../inc/header.php'); 
define("PAGE", "Gestion des utilisateurs"); // Nom de la Page
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
                    <li class="active"><?php echo PAGE; ?></li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Gestion des Utilisateurs</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Liste des Utilisateurs</h3>
                                    <a class="btn btn-primary pull-right" href="add.user.php"><i class="fa fa-plus"></i> Ajouter un utilisateur</a>
                                </div>
                                <div class="panel-body">
                                        <?php
                                            if(isset($_GET['etat_req']) && $_GET['etat_req'] == "true"){
                                        ?>
                                        <div role="alert" class="alert alert-success">
                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-check"></i> <strong>Succès!</strong> L'utilisateur à été Supprimer.
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if(isset($_GET['etat_req']) && $_GET['etat_req'] == "false"){
                                        ?>
                                        <div role="alert" class="alert alert-danger">
                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-times"></i> <strong>Erreur!</strong> L'utilisateur n'a pas été Supprimer.
                                        </div>
                                        <?php
                                            }
                                        ?>

                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nom d'utilisateur</th>
                                                <th>Identité</th>
                                                <th>Poste</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql_user = mysql_query("SELECT * FROM utilisateur")or die(mysql_error());
                                        while($donnee_user = mysql_fetch_array($sql_user))
                                        {
                                        ?>
                                            <tr>
                                                <td><?php echo $donnee_user['login']; ?></td>
                                                <td><?php echo $donnee_user['nom_user']; ?> <?php echo $donnee_user['prenom_user']; ?></td>
                                                <td><?php echo $donnee_user['poste']; ?></td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="modif.user.php?iduser=<?php echo $donnee_user['iduser']; ?>"><i class="fa fa-pencil"></i> Modifier</a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo SITE_URL,RACINE; ?>fonction/user.php?iduser=<?php echo $donnee_user['iduser']; ?>&supp-user=Valider"><i class="fa fa-times-circle"></i> Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
                            <a href="<?php echo SITE_URL,RACINE; ?>logout.php?iduser=<?php echo $donnees_login['iduser']; ?>" class="btn btn-success btn-lg">Oui</a>
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
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






