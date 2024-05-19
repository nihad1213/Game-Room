<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>
<?php session_start(); ?>



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

        <div class="board">
            <form action="add-admin.php" method="POST">
                <input type="hidden" name="AdminID" value="<?php  ?>">
                <label>New Admin Username: </label><input type="text" name="adminName" 
                placeholder="Enter Admin Username..." value="<?php  ?>">
                <br>
                <label>New Admin Email: </label><input type="email" name="newAdminEmail" 
                placeholder="Enter Admin Email..." value="<?php ?>">
                <br>
                <label>New Admin Password: </label><input type="text" name="newAdminPassword" 
                placeholder="Enter Admin Password...">
                <br>
                <label>New Admin Password: </label><input type="text" name="newAdminPasswordAgain" 
                placeholder="Enter Admin Password Again...">
            
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