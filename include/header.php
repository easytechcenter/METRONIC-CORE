<?php
include ('../config/db.conf.php');
include ('../config/define.php');
include ('../fonction/error.php');
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo LOGICIEL; ?></title>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,900,800,700,600,500,400,300,200' rel='stylesheet' type='text/css'><!-- Google Fonts -->

<!-- Styles -->
<link rel="stylesheet" href="<?php echo SITE,FOLDER,ASSETS; ?>css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
<link href="<?php echo SITE,FOLDER,ASSETS; ?>css/fullcalendar.css" rel="stylesheet" /><!-- Full calendar -->
<link href="<?php echo SITE,FOLDER,ASSETS; ?>css/fullcalendar.print.css" rel="stylesheet" media="print" /><!-- Full Calendar -->
<link href="<?php echo SITE,FOLDER,ASSETS; ?>css/jquery.mCustomScrollbar.css" rel="stylesheet" /><!-- Custom Scroll Bar -->
<link rel="stylesheet" href="<?php echo SITE,FOLDER,ASSETS; ?>font-awesome/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo SITE,FOLDER,ASSETS; ?>css/style.css" type="text/css" /><!-- Style -->

<link rel="stylesheet" href="<?php echo SITE,FOLDER,ASSETS; ?>css/responsive.css" type="text/css" /><!-- Responsive Style -->

<!-- Script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- Jquery -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery.mCustomScrollbar.concat.min.js"></script><!-- Scroll Bar -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script><!-- Circle Chart -->
<script type="text/javascript"  src="<?php echo SITE,FOLDER,ASSETS; ?>js/bootstrap.js"></script><!-- Bootstrap -->
<script type="text/javascript"  src="<?php echo SITE,FOLDER,ASSETS; ?>js/script.js"></script><!-- Script -->
<script type="text/javascript" src="<?php echo SITE,FOLDER,ASSETS; ?>js/tcal.js"></script> <!-- Input Calendar -->
<script type="text/javascript" src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery.sparkline.min.js"></script> <!-- Sparkline -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script> <!-- Google Map -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery-ui.custom.min.js"></script> <!-- Jquery UI Custom -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/fullcalendar.min.js"></script> <!-- Full Calendar -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery.easypiechart.min.js"></script> <!-- Easy Pie Chart -->
<script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script><!-- Sidebar Add Tag -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery.nicescroll.min.js"></script>
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/intro.js"></script>
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/header-line-chart.js"></script>
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/jquery.flot.min.js"></script><!-- Chart -->
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/flot-chart-header.js"></script>
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/flot-jquery-header.js"></script>
<script src="<?php echo SITE,FOLDER,ASSETS; ?>js/side-navigation-tag.js"></script>
</head>