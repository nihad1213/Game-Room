<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>

<?php include_once('header.php'); ?>    
<main>
    <div class="container">
    <?php include_once('side-bar.php'); ?>

    <?php 
        $object = new countAdmins;
        $adminCount = $object->getAdminCount();
    ?>
    <div class="main">
        <div class="sections">
            <div class="section">
                <h2><?php echo $adminCount; ?></h2>
                <p>Admins</p>
            </div>

            <div class="section">
                <h2>Admins</h2>
                <p>Number of Admins</p>
            </div>

            <div class="section">
                <h2>Admins</h2>
                <p>Number of Admins</p>
            </div>

            <div class="section">
                <h2>Admins</h2>
                <p>Number of Admins</p>
            </div>

            <div class="section">
                <h2>Admins</h2>
                <p>Number of Admins</p>
            </div>
        </div>
    </div>
    </div>
</main>

<?php include_once('footer.php'); ?>
