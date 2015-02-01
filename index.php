<?php 
include ('config/header.php');
//bread
$li_start = "<li><a href='#''>".LOGICIEL."</a></li>";
$li_int1 = "";
$li_int2 = "";
$li_int3 = "";
$li_int4 = "";
$li_end = "";
?>

    <!-- START Body -->
    <body>
        <?php include ('config/headerbar.php'); ?>

        

        <?php
        include ('config/sidebar_left.php');
        include ('config/sidebar_right.php');
        ?>

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Blank / starter</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Page</a></li>
                                <li class="active">Starter</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                        <?php
                        if($sql_connect == FALSE){
                        ?>

                        <?php
                        }
                        ?>
                        <?php
                        if($sql_db == FALSE){
                        ?>
                        
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Page Header -->

                
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="../javascript/vendor.js"></script>
        <script type="text/javascript" src="../javascript/core.js"></script>
        <script type="text/javascript" src="../javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>