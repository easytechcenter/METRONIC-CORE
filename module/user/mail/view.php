<?php
include ('../../../inc/header.php'); 
define("PAGE", "Message"); // Nom de la Page
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
                <?php
                $sql_count_new_mail = mysql_query("SELECT COUNT(messagerie.idmessage) FROM messagerie, boite_reception WHERE etat_message = '0' AND boite_reception.destinataire = '$iduser'")or die(mysql_error());
                $count_new_mail = mysql_result($sql_count_new_mail, 0);
                $sql_count_mail = mysql_query("SELECT COUNT(messagerie.idmessage) FROM messagerie, boite_reception WHERE  boite_reception.destinataire = '$iduser'")or die(mysql_error());
                $count_mail = mysql_result($sql_count_mail, 0);
                $sql_count_mail_sent = mysql_query("SELECT COUNT(messagerie.idmessage) FROM messagerie, boite_envoie WHERE boite_envoie.expediteur = '$iduser'")or die(mysql_error());
                $count_mail_sent = mysql_result($sql_count_mail_sent, 0);
                $sql_count_mail_trash = mysql_query("SELECT COUNT(messagerie.idmessage) FROM messagerie, boite_corbeil WHERE boite_corbeil.destinataire = '$iduser'")or die(mysql_error());
                $count_mail_trash = mysql_result($sql_count_mail_trash, 0);


                $idmessage = $_GET['idmessage'];
                $sql_message = mysql_query("SELECT * FROM messagerie, boite_reception, utilisateur WHERE boite_reception.expediteur = utilisateur.iduser AND messagerie.idmessage = '$idmessage'")or die(mysql_error());
                $donnee_message = mysql_fetch_array($sql_message);
                $sql_up_etat = mysql_query("UPDATE messagerie SET etat_message = '1' WHERE idmessage = '$idmessage'")or die(mysql_error());

                ?>
                <!-- END BREADCRUMB -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-file-text"></span> Message</h2>
                        </div>                                                                                
                        
                        <div class="pull-right">                                                                                    
                            <button class="btn btn-default" onclick="javascript:window.print()"><span class="fa fa-print"></span> Imprimer</button>
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                            <a href="compose.php" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> Nouveau Mail</a>
                        </div>
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="inbox.php" class="list-group-item active"><span class="fa fa-inbox"></span> Boite de Recéption <span class='badge badge-warning'><?php echo $count_mail; ?></span></a>
                                <a href="sentbox.php" class="list-group-item"><span class="fa fa-rocket"></span> Mail Envoyer <span class="badge badge-info"><?php echo $count_mail_sent; ?></span> </a>
                                <a href="trash.php" class="list-group-item"><span class="fa fa-trash-o"></span> Corbeille <span class="badge badge-danger"><?php echo $count_mail_trash; ?></span></a>                            
                            </div>                        
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <img src="<?php echo SITE_URL, RACINE; ?>assets/img/user/<?php echo $donnee_message['login']; ?>.png" class="panel-title-image" alt="John Doe"/>
                                    <h3 class="panel-title"><?php echo $donnee_message['nom_user']; ?> <?php echo $donnee_message['prenom_user']; ?> <small><?php echo $donnee_message['poste']; ?></small></h3>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default" href="reply.php?idmessage=<?php echo $donnee_message['idmessage']; ?>"><span class="fa fa-mail-reply"></span></a>
                                    <a class="btn btn-default" href="inbox.php?del-mail=Valider"><span class="fa fa-trash-o"></span></a>                                    
                                </div>
                            </div>
                            <div class="panel-body">
                                <h3><?php echo $donnee_message['objet']; ?> <small class="pull-right text-muted"><span class="fa fa-clock-o"></span> <?php if($donnee_message['date_message'] == $date){echo "Aujourd'hui,".$donnee_message['heure_message'];}else{echo $donnee_message['date_message'].",".$donnee_message['heure_message'];} ?></small></h3>
                                <?php echo html_entity_decode($donnee_message['corps_message']); ?>      
                                
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT FRAME BODY -->
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
        <script type='text/javascript' src='<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-datepicker.js"></script> 
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/settings.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






