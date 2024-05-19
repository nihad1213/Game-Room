<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>
<?php session_start();?>

<?php 
    $object = new deleteAdmin($adminID);
    $adminID = $_GET['adminID'] ?? null;
    $success = $object -> deleteAdmin($adminID);
    if ($success) {
        header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
        exit();
    } else {
        //ERROR
    }
?>
