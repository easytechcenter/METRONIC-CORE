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
                //Verif siret
                // SIRET de Google France
                $siret = $donnee_societe['siret'];
                 
                // On ne garde que les chiffres
                $siret = preg_replace("/[^\d]+/", '', $siret);
                 
                // SIRET
                print "SIRET : " . $siret;
                if(checkLuhn($siret)) print " OK<br>"; else print " NOK<br>";
                 
                // SIREN
                print "SIREN : " . $siren = nSIREN($siret);
                if(checkLuhn($siren)) print " OK<br>"; else print " NOK<br>";
                 
                // N° TVA
                print "N° TVA : " . nTVA($siren) . "<br>";
                 
                // Vérification avec la méthode de Luhn
                function checkLuhn($val) {
                    $len = strlen($val);
                    $total = 0;
                    for ($i = 1; $i <= $len; $i++) {
                        $chiffre = substr($val,-$i,1);
                        if($i % 2 == 0) {
                            $total += 2 * $chiffre;
                            if((2 * $chiffre) >= 10) $total -= 9;
                            }
                        else $total += $chiffre;
                        }
                        if($total % 10 == 0) return true; else return false;
                    }
                 
                // SIREN = 9 premiers chiffres du SIRET
                function nSIREN($siret) {
                    return substr($siret,0,9);
                    }
                 
                // N°TVA = FR + clé + SIREN
                function nTVA($siren) {
                    return "FR" . (( 12 + 3 * ( $siren % 97 ) ) % 97 ) . $siren;
                    }

                ?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <form role="form" action="<?php echo SITE_URL,RACINE; ?>/inc/script/parametrage.php" method="POST">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Information Général</h3>
                                    </div>
                                    <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Raison Social</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon">Rs</span>
                                                    <input type="text" class="form-control" name="raison_social" value="<?php echo $donnee_societe['raison_social']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Adresse</h3>
                                    </div>
                                    <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Adresse</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                                    <input type="text" class="form-control" name="adresse1" value="<?php echo $donnee_societe['adresse1']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Complément d'adresse</label>
                                            <div class="col-md-10">
                                                <textarea rows="5" class="form-control" name="adresse2" value="<?php echo $donnee_societe['adresse2']; ?>"></textarea>
                                            </div>
                                        </div>
                                        <br>
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
                                        <br>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Coordonnée</h3>
                                    </div>
                                    <div class="panel-body">  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Téléphone</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input type="text" class="form-control" name="telephone" value="<?php echo $donnee_societe['telephone']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Fax</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                                                    <input type="text" class="form-control" name="fax" value="<?php echo $donnee_societe['fax']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" name="mail" value="<?php echo $donnee_societe['mail']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Information professionnel</h3>
                                    </div>
                                    <div class="panel-body">  
                                        <?php
                                        if(checkLuhn($siret)){
                                        ?>
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label">Siret</label>
                                            <input type="text" class="form-control" name="siret" value="<?php echo $donnee_societe['siret']; ?>">
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="form-group has-error has-feedback">
                                            <label class="control-label">Siret</label>
                                            <input type="text" class="form-control" data-placement="top" data-toggle="tooltip" data-original-title="Mauvais Siret">
                                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        </div>
                                        <?php } ?>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Code APE</label>
                                            <div class="col-md-9">                                                                                
                                                <select class="form-control select" data-live-search="true" name="ape" value="<?php echo $donnee_societe['ape']; ?>">
                                                    <?php
                                                    $sql_ape = mysql_query("SELECT * FROM code_ape")or die(mysql_error());
                                                    while($donne_ape = mysql_fetch_array($sql_ape)){
                                                    ?>
                                                    <option value="<?php echo $donne_ape['code']; ?>"><?php echo $donne_ape['code']; ?> - <?php echo $donne_ape['libelle_ape']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">TVA INTRA</label>
                                            <div class="col-md-10">
                                                <div class="input-group">                                            
                                                    <span class="input-group-addon">TVA</span>
                                                    <input type="text" class="form-control" name="tva_intra" value="<?php echo $donnee_societe['tva_intra']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
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






