<!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <?php
                    $sql_count_new_mail = mysql_query("SELECT COUNT(idboitereception) FROM  boite_reception WHERE etat_message = '0' AND destinataire = '$iduser'")or die(mysql_error());
                    $count_new_mail = mysql_result($sql_count_new_mail, 0);
                    ?>
                    <!-- MESSAGES -->
                    <?php
                    if($count_new_mail == 0){echo "";}else{
                    ?>
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-envelope"></span></a>
                        <div class="informer informer-success"><?php echo $count_new_mail; ?></div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-envelope"></span> Messagerie Interne</h3>                                
                                <div class="pull-right">
                                    <span class="label label-success"><?php echo $count_new_mail; ?> Nouveau Message</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <?php
                            $sql_mail = mysql_query("SELECT * FROM boite_reception, utilisateur WHERE boite_reception.expediteur = utilisateur.iduser AND boite_reception.destinataire = '$iduser'")or die(mysql_error());
                            while($donnee_mail = mysql_fetch_array($sql_mail)){
                            ?>
                                <a href="#" class="list-group-item">
                                    <img src="<?php echo SITE_URL,RACINE; ?>assets/img/user/<?php echo $donnee_mail['login']; ?>.png" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title"><?php echo $donnee_mail['nom_user']; ?> <?php echo $donnee_mail['prenom_user']; ?></span>
                                    <p><?php echo $donnee_mail['objet']; ?></p>
                                </a>
                            <?php } ?>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="<?php echo SITE_URL,RACINE; ?>module/user/mail/inbox.php">Voir tous les messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <?php } ?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <!-- <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li> -->
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->