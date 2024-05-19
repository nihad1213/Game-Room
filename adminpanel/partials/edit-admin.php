<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>
<?php session_start(); ?>

<?php
    
?>

<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Edit Admin</h2>
        </div>

        <div>
            <?php 
                if (isset($_SESSION['pass-didnt-match'])) {
                    echo $_SESSION['pass-didnt-match'];
                    unset($_SESSION['pass-didnt-match']);
                }
            ?>
        </div>     

        <?php 
            
        ?>
        
        <div class="board">
            <form action="add-admin.php" method="POST">
                <input type="hidden" name="adminID" value="<?php echo $adminID; ?>">
                <label>Admin Username: </label><input type="text" name="adminName" 
                placeholder="Enter Admin Username..." required value="<?php echo $row['adminName']?>">
                <br>
                <label>Admin Email: </label><input type="email" name="adminEmail" 
                placeholder="Enter Admin Email..." required value="<?php ?>">
                <br>
                <label>Admin Password: </label><input type="password" name="adminPassword" 
                placeholder="Enter Admin Password..." required value="<?php ?>">
                <br>
                <label>Admin Password: </label><input type="password" name="adminPasswordAgain" 
                placeholder="Enter Admin Password Again..." required value="<?php ?>">
            
                <div class="add-action">
                    <a href="add-admin.php">
                        <button type="submit" class="btn btn-success" name="button">Edit Admin</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>