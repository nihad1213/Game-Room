<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/ps.funcs.php');?>
<?php session_start();?>

<?php 
    $object = new deleteSystem($systemID);
    $systemID = $_GET['systemID'] ?? null;
    $success = $object -> deleteSystem($systemID);
    if ($success) {
        header('Location: http://localhost/Game-Room/adminpanel/partials/ps1-system.php');
        exit();
    } else {
        //ERROR
    }
?>