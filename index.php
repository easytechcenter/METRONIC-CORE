<?php
include ('inc/header.php');
$page = "ACCEUIL";
?>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php include ('inc/sidebar.php'); ?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <?php include ('inc/headerbar.php'); ?>
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active"><?php echo $page; ?></li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    
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
        <audio id="audio-alert" src="<?php echo SITE_URL, RACINE,ASSETS; ?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo SITE_URL, RACINE,ASSETS; ?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/actions.js"></script>
        
        <script type="text/javascript" src="<?php echo SITE_URL, RACINE,ASSETS; ?>js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






