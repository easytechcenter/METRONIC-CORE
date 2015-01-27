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
                function is_siret($siret)
                    {
                        if (strlen($siret) != 14) return 1; // le SIRET doit contenir 14 caractères
                        if (!is_numeric($siret)) return 2; // le SIRET ne doit contenir que des chiffres

                        // on prend chaque chiffre un par un
                        // si son index (position dans la chaîne en commence à 0 au premier caractère) est pair
                        // on double sa valeur et si cette dernière est supérieure à 9, on lui retranche 9
                        // on ajoute cette valeur à la somme totale

                        for ($index = 0; $index < 14; $index ++)
                        {
                            $number = (int) $siret[$index];
                            if (($index % 2) == 0) { if (($number *= 2) > 9) $number -= 9; }
                            $sum += $number;
                        }

                        // le numéro est valide si la somme des chiffres est multiple de 10
                        if (($sum % 10) != 0) return 3; else return 0;      
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
                                        if(is_siret($donnee_societe['siret']) == 0){
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

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






