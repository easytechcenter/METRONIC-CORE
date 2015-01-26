    <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo SITE_URL,RACINE,ASSETS; ?>"><?php echo LOGICIEL; ?></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo SITE_URL,RACINE,ASSETS; ?>img/user/<?php echo $donnees_login['login']; ?>.png" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo SITE_URL,RACINE,ASSETS; ?>img/user/<?php echo $donnees_login['login']; ?>.png" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo $donnees_login['nom_user']; ?> <?php echo $donnees_login['prenom_user']; ?></div>
                                <div class="profile-data-title"><?php echo $donnees_login['poste']; ?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo $rootsite; ?>module/user/profil.php" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?php echo $rootsite; ?>module/user/inbox.php" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="active">
                        <a href="<?php echo SITE_URL,RACINE; ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Accueil</span></a>                        
                    </li>
                    <?php
                    $sql_module_metronic = mysql_query("SELECT * FROM module WHERE ref_dev = '58445'")or die(mysql_error());
                    $donnee_module_metronic = mysql_fetch_array($sql_module_metronic);
                    if($donnee_module_metronic['etat_module'] == '1'){
                    ?>                    
                    <li class="xn-openable">
                        <a href="#">
                            <span class="fa fa-cogs"></span> 
                            <span class="xn-text">Paramétrage</span>
                        </a>
                        <ul>
                             <li>
                                <a href="<?php echo SITE_URL,RACINE; ?>module/parametre/societe/">
                                    <span class="fa fa-building-o"></span> Gestion de la société
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo SITE_URL,RACINE; ?>module/parametre/user/">
                                    <span class="fa fa-users"></span> Gestion des Utilisateurs
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo SITE_URL,RACINE; ?>module/parametre/update/">
                                    <span class="fa fa-download"></span> Mise à jour
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo SITE_URL,RACINE; ?>module/parametre/module/">
                                    <span class="glyphicon glyphicon-th"></span> Gestion des modules
                                </a>
                            </li>

                        </ul>
                    </li>
                    <?php } ?>                                                         
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->