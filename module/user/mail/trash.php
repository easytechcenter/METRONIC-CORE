<?php
include ('../../../inc/header.php'); 
define("PAGE", "Corbeille"); // Nom de la Page
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
                ?>
                <!-- END BREADCRUMB -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-trash-o"></span> Corbeille</h2>
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
                                <a href="inbox.php" class="list-group-item"><span class="fa fa-inbox"></span> Boite de Recéption <span class='badge badge-warning'><?php echo $count_mail; ?></span></a>
                                <a href="sentbox.php" class="list-group-item"><span class="fa fa-rocket"></span> Mail Envoyer <span class="badge badge-info"><?php echo $count_mail_sent; ?></span> </a>
                                <a href="corbeil.php" class="list-group-item active"><span class="fa fa-trash-o"></span> Corbeille <span class="badge badge-danger"><?php echo $count_mail_trash; ?></span></a>                             
                            </div>                        
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                            <div class="panel-body mail">
                            <?php
                            $sql_mail = mysql_query("SELECT * FROM messagerie, boite_corbeil, utilisateur WHERE boite_corbeil.destinataire = utilisateur.iduser AND boite_corbeil.expediteur = '$iduser' ORDER BY messagerie.idmessage DESC")or die(mysql_error());
                            while($donnee_mail = mysql_fetch_array($sql_mail)){
                            ?>
                               <div class="mail-item">
                                    <div class="mail-checkbox">
                                        <a href="sentbox.php?del-mail=Valider&idmessage=<?php echo $donnee_mail['idmessage']; ?>" style="color: red;"><i class="fa fa-times"></i></a>
                                    </div>
                                    <?php
                                    if($donnee_mail['importance'] == 1){
                                    ?>
                                    <div class="mail-star starred">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <?php } ?>
                                    <div class="mail-user"><?php echo $donnee_mail['nom_user']; ?> <?php echo $donnee_mail['prenom_user']; ?></div>                                    
                                    <a href="view.php?idmessage=<?php echo $donnee_mail['idmessage']; ?>&sent=true" class="mail-text"><?php echo $donnee_mail['objet']; ?></a>
                                    <div class="mail-date">
                                        <?php
                                        if($donnee_mail['date_message'] == $date){echo "Aujourd'hui,".$donnee_mail['heure_message'];}else{echo $donnee_mail['date_message'].",".$donnee_mail['heure_message'];}
                                        ?>
                                    </div>
                                </div>
                            <?php } ?>  
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





