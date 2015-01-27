<?php
include ('../../../inc/header.php'); 
define("PAGE", "COmposer un Mail"); // Nom de la Page
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
                    <li><a href="#">Boite Mail Interne</a></li>                    
                    <li class="active"><?php echo PAGE; ?></li>
                </ul>
                <?php
                $sql_count_new_mail = mysql_query("SELECT COUNT(idmessage) FROM messagerie WHERE etat_message = '0' AND destinataire = ".$donnees_login['iduser'])or die(mysql_error());
                $count_new_mail = mysql_result($sql_count_new_mail, 0);
                $sql_count_mail_sent = mysql_query("SELECT COUNT(idmessage) FROM messagerie WHERE expediteur = ".$donnees_login['iduser'])or die(mysql_error());
                $count_mail_sent = mysql_result($sql_count_mail_sent, 0);
                ?>
                <!-- END BREADCRUMB -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-inbox"></span> Boite de Reception
                            <?php
                            if($count_new_mail == 0){echo "<small>(0 Mail non lu)</small>";}else{echo "<small>(".$count_new_mail." Mail non lu)</small>";}
                            ?>
                            </h2>
                        </div>                                                                                                    
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                            <div class="list-group border-bottom">
                                <a href="inbox.php" class="list-group-item active"><span class="fa fa-inbox"></span> Boite de Recéption <?php if($count_new_mail == 0){echo "";}else{echo "<span class='badge badge-warning'>".$count_new_mail."</span>";} ?></a>
                                <a href="sentbox.php" class="list-group-item"><span class="fa fa-rocket"></span> Mail Envoyer <span class="badge badge-info"><?php echo $count_mail_sent; ?></span> </a>                            
                            </div>                        
                        </div>
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        <div class="block">
                            <form role="form" class="form-horizontal" action="<?php echo SITE_URL,RACINE; ?>fonction/mail.php" method="POST">
                            <input type="hidden" name="expediteur" value="<?php echo $donnees_login['iduser']; ?>" />
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-danger" name="sent-mail" value="Valider"><span class="fa fa-envelope"></span> Envoyer le message</button>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Expediteur:</label>
                                    <div class="col-md-10">
                                        <p class="form-control-static"><?php echo $donnees_login['nom_user']; ?> <?php echo $donnees_login['prenom_user']; ?></p>
                                    </div>
                                </div>                        
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Destinataire</label>
                                    <div class="col-md-10">                                                                                
                                        <select class="form-control select" data-live-search="true" name="destinataire">
                                        <?php
                                        $sql_user = mysql_query("SELECT * FROM utilisateur WHERE iduser !=".$donnees_login['iduser'])or die(mysql_error());
                                        while($donnee_user = mysql_fetch_array($sql_user)){
                                        ?>
                                            <option value="<?php echo $donnee_user['iduser']; ?>"><?php echo $donnee_user['nom_user']; ?> <?php echo $donnee_user['prenom_user']; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Objet:</label>
                                    <div class="col-md-10">                                        
                                        <input type="text" class="form-control" name="objet"/>                                
                                    </div>                                
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">                            
                                        <textarea class="summernote_email" name="corps_message">                                        
                                        </textarea>                            
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Ce message à-t-il une Importance:</label>
                                    <div class="col-md-5">
                                        <label class="check"><input type="radio" class="iradio" name="importance" value="0"/> Non</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="check"><input type="radio" class="iradio" name="importance" value="1" /> Oui</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-danger btn-lg" name="sent-mail" value="Valider"><span class="fa fa-envelope"></span> Envoyer le message</button>
                                        </div>                                    
                                    </div>
                                </div>
                            </form>
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
        <script type='text/javascript' src='<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/summernote/summernote.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>       
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-select.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/settings.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






