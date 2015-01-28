    <?php
    session_start();
    session_unset();
    include ('inc/config.php');
    $iduser = $_GET['iduser'];
    mysql_query("UPDATE utilisateur SET connect = '0' WHERE iduser = '$iduser'")or die(mysql_error());
    session_destroy();
    header('Location: index.php');
    exit();
    ?>