<?php
include ('../../../inc/header.php'); 
define("PAGE", "Gestion de la société"); // Nom de la Page
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
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Gestion de la société</h2>
                </div>                   
                <?php
                $sql_societe = mysql_query("SELECT * FROM societe WHERE idsociete = '1'")or die(mysql_error());
                $donnee_societe = mysql_fetch_array($sql_societe);
                

                ?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <?php
                if(isset($_GET['etat_req']) && $_GET['etat_req'] == 'true'){
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-check-circle"></i> <strong>Succès!</strong> La modification de la société est réussi.
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php
                if(isset($_GET['etat_req']) && $_GET['etat_req'] == 'false'){
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-warning"></i> <strong>Erreur!</strong> La modification de la société n'a pas été effectuer.
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                               <form class="form-horizontal" role="form" action="<?php echo SITE_URL,RACINE; ?>/fonction/societe.php" method="POST">
                                    <input type="hidden" name="idsociete" value="<?php echo $donnee_societe['idsociete']; ?>" />
                                    <div class="wizard">

                                        <ul>
                                            <li>
                                                <a href="#step-1">
                                                    <span class="stepNumber">1</span>
                                                    <span class="stepDesc">Etape 1<br /><small>Information Général</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-2">
                                                    <span class="stepNumber">2</span>
                                                    <span class="stepDesc">Etape 2<br /><small>Adresse</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-3">
                                                    <span class="stepNumber">3</span>
                                                    <span class="stepDesc">Etape 3<br /><small>Coordonnée</small></span>                   
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-4">
                                                    <span class="stepNumber">4</span>
                                                    <span class="stepDesc">Etape 4<br /><small>Information professionnel</small></span>                   
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="step-1">   
                                            <h4>Information Général</h4>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Raison Social</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['raison_social']; ?>" name="raison_social" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="step-2">

                                            <h4>Adresse de la société</h4>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Adresse Postal</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['adresse1']; ?>" name="adresse1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Complément d'adresse</label>
                                                <div class="col-md-10">
                                                    <textarea rows="5" class="form-control" name="adresse2"><?php echo $donnee_societe['adresse2']; ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Code Postal</label>
                                                <div class="col-md-3">
                                                    <input type="text" value="<?php echo $donnee_societe['cp']; ?>" name="cp" class="form-control">
                                                </div>
                                                <label class="col-md-2 control-label">Ville</label>
                                                <div class="col-md-5">
                                                    <input type="text" value="<?php echo $donnee_societe['ville']; ?>" name="ville" class="form-control">
                                                </div>
                                            </div>

                                        </div>                      
                                        <div id="step-3">

                                            <h4>Coordonnée</h4>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">N° de Téléphone</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['telephone']; ?>" name="telephone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">N° de FAX</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['fax']; ?>" name="fax" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Adresse Mail</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['mail']; ?>" name="mail" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div id="step-4">

                                            <h4>Information Professionnel</h4>

                                            <?php
                                            if(empty($donnee_societe['siret'])){
                                            ?>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Siret:</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['siret']; ?>" name="siret" class="form-control">
                                                </div>
                                            </div>
                                            <?php
                                            }else{
                                            if(is_siret($donnee_societe['siret']) == 0){
                                            ?>
                                            <div class="form-group has-success has-feedback">
                                                <label class="control-label col-md-2">Siret</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="siret" value="<?php echo $donnee_societe['siret']; ?>" >
                                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <?php
                                            }else{
                                            ?>
                                            <div class="form-group has-error has-feedback">
                                                <label class="control-label col-md-2">Siret</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="siret" value="<?php echo $donnee_societe['siret']; ?>" >
                                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Code APE</label>
                                                <div class="col-md-9">                                                                                
                                                    <select class="form-control select" data-live-search="true" name="ape">
                                                        <?php
                                                        $sql_ape = mysql_query("SELECT * FROM code_ape")or die(mysql_error());
                                                        while($donnee_ape = mysql_fetch_array($sql_ape)){
                                                        ?>
                                                        <option value="<?php echo $donnee_ape['code']; ?>"><?php echo $donnee_ape['code']; ?> - <?php echo $donnee_ape['libelle_ape']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">N° de TVA Intracommunautaire</label>
                                                <div class="col-md-10">
                                                    <input type="text" value="<?php echo $donnee_societe['tva_intra']; ?>" name="tva_intra" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-success btn-lg" name="modif-societe" value="Valider"><i class="fa fa-check"></i> Modifier les informations de votre entreprise</button>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>

                                        </div>                           

                                    </div>
                                </form>
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
        <script type='text/javascript' src='<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/jquery-validation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/settings.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






