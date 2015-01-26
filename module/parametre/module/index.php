<?php
include ('../../../inc/header.php'); 
define("PAGE", "MODULE"); // Nom de la Page
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
                    <h2><span class="fa fa-arrow-circle-o-left"></span> MODULE</h2>
                </div>                   

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">LISTE DES MODULES</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group accordion">
                                    <?php
                                    $sql_cat_module = mysql_query("SELECT * FROM cat_module WHERE idcatmodule = '1'")or die(mysql_error());
                                    while($cat_module = mysql_fetch_array($sql_cat_module))
                                        {
                                    ?>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#accOneColOne">
                                                        <?php echo $cat_module['libelle_cat_module']; ?>
                                                    </a>
                                                </h4>
                                            </div>                                
                                            <div class="panel-body panel-body-open" id="accOneColOne">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-actions">
                                                        <thead>
                                                            <tr>
                                                                <th width="50">Référence</th>
                                                                <th>Information Module</th>
                                                                <th width="100">Version</th>
                                                                <th width="100"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>  
                                                        <?php
                                                        $sql_module = mysql_query("SELECT * FROM module WHERE cat_module = '1'")or die(mysql_error());
                                                        while($donnee_module = mysql_fetch_array($sql_module))
                                                        {
                                                        ?>                                          
                                                            <tr id="trow_1">
                                                                <td class="text-center"><?php echo $donnee_module['key_dev']; ?></td>
                                                                <td>
                                                                    <strong><?php echo $donnee_module['titre_module']; ?></strong><br>
                                                                    <h5><i><?php echo $donnee_module['short_desc_module']; ?></i></h5>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $version_serveur = file_get_contents("http://vps116895.ovh.net/maj/".$donnee_module['key_dev']."/version.ini");
                                                                    if($donnee_module['version_module'] != $version_serveur){
                                                                    ?>
                                                                    <span class="label label-danger" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Version non mis à jour"><?php echo $donnee_module['version_module']; ?></span>
                                                                    <?php }else{ ?>
                                                                    <span class="label label-success"><?php echo $donnee_module['version_module']; ?></span>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-info" href=""><i class="fa fa-eye"></i> Voir Les Information du Module</a>
                                                                    <?php
                                                                    if($donnee_module['version_module'] != $version_serveur){
                                                                    ?>
                                                                    <a class="btn btn-danger btn-xs" href="">Update</a>
                                                                    <?php } ?>
                                                                </td>  
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                
                                        </div>
                                    <?php } ?>
                                    </div>
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
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/settings.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






