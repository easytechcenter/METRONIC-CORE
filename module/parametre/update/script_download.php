<?php
include ('../../../inc/header.php'); 
define("PAGE", "MISE A JOUR"); // Nom de la Page
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
                    <li><a href="#">Link</a></li>                    
                    <li class="active"><?php echo PAGE; ?></li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> MISE A JOUR METRONIC</h2>
                </div>                   
                <?php
                    $version_latest = $_GET['version_latest'];

	                $sql_maj = mysql_query("SELECT * FROM module WHERE key_dev = '58445'")or die(mysql_error());
	                $donnee_maj = mysql_fetch_array($sql_maj);

	                mysql_connect("localhost", "root", "1992maxime")or die(mysql_error());
	                mysql_select_db("maj_programme");
	                $sql_select_metronic = mysql_query("SELECT * FROM metronic WHERE key_dev = '58445' AND version_latest = '$version_latest'")or die(mysql_error());
	                $select_metronic = mysql_fetch_array($sql_select_metronic);

	                mysql_connect("localhost", "root", "1992maxime")or die(mysql_error());
	                mysql_select_db("metronic");
                ?>
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                        //Téléchargement de la mise à jour
                        $temp = "../../../temp";
                        $serveur = $select_metronic['link'];

                        $conn_ftp = ftp_connect("vps116895.ovh.net", "22");
                        $login_ftp = ftp_login($conn_ftp, "root", "3KmJlMG2");
                        $down_maj = ftp_get($conn_ftp, $temp, $serveur, FTP_BINARY);
                        ftp_close($conn_ftp);

                        //extraction de l'archive
                        $zip = new ZipArchive();

                        $ouverture_zip = $zip->open('../../../temp/'.$version_latest.'.zip');
                        $extraction = $zip->extractTo('../../../temp/'.$version_latest.'', '../../../temp/'.$version_latest);

                        //Mise à jour de l'instruction SQL
                        $sql_file = file_get_contents("../../../temp".$version_latest."/maj.sql");
                        $plit_sql = explode("\n");
                        foreach ($plit_sql as $req){
                            $sql_maj = mysql_query($req);
                        }

                        $maj = copy('../../../temp/'.$version_latest.'', '../../../../metronic/');


                        ?>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div style="text-align: center;"><i class="fa fa-download fa-5x"></i></div>
                                    <div class="col-md-9">
                                    	<h2>Note de mise à jour <?php echo $select_metronic['version_latest']; ?></h2><br>
                                    	<p><?php echo $select_metronic['desc_maj']; ?></p>
                                    </div>
                                    <div class="col-md-3">
                                    	<table style="width: 100%">
                                            <tr>
                                                <td>Dossier Local:</td>
                                                <td>
                                                <?php
                                                    if($temp == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Le fichier n\'existe pas ou est protéger en écriture'>Erreur</span>";}
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dossier Serveur:</td>
                                                <td>
                                                <?php
                                                    if($serveur == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Le fichier n\'existe pas ou est protéger en écriture'>Erreur</span>";}
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Connexion au serveur FTP</td>
                                                <td>
                                                    <?php
                                                    if($conn_ftp == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Connexion au serveur FTP impossible'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Connexion au serveur FTP</td>
                                                <td>
                                                    <?php
                                                    if($login_ftp == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Vérifier les identifiants et le mot de passe FTP'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Transaction du serveur vers le fichier local</td>
                                                <td>
                                                    <?php
                                                    if($down_maj == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible de télécharger la mise à jour'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ouverture de la mise à jour</td>
                                                <td>
                                                    <?php
                                                    if($ouverture_zip == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible d\'ouvrir l\'archive'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extraction de la mise à jour</td>
                                                <td>
                                                    <?php
                                                    if($extraction == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible d\'extraire l\'archive'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fichier SQL</td>
                                                <td>
                                                    <?php
                                                    if($sql_file == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible de trouvez le fichier sql de mise à jour'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mise à jour de la BDD</td>
                                                <td>
                                                    <?php
                                                    if($sql_maj == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible de mettre à jour la base de donnée'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Système Mise à jour</td>
                                                <td>
                                                    <?php
                                                    if($maj == TRUE){echo "<span class='label label-success label-form'>Succès</span>";}else{echo "<span class='label label-danger label-form' title='' data-placement='top' data-toggle='tooltip' data-original-title='Impossible de télécharger la mise à jour.'>Erreur</span>";}
                                                    ?>
                                                </td>
                                            </tr>
                                        </table>
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

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL,RACINE,ASSETS; ?>js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






