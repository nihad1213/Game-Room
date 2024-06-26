<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>
<?php session_start(); ?>
<?php 
    $object = new addAdmins;
    echo $object -> addAdmins();
?>
<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Add Admin</h2>
        </div>

        <div>
            <?php 
                if (isset($_SESSION['pass-didnt-match'])) {
                    echo $_SESSION['pass-didnt-match'];
                    unset($_SESSION['pass-didnt-match']);
                }

                if (isset($_SESSION['pass-short'])) {
                    echo $_SESSION['pass-short'];
                    unset($_SESSION['pass-short']);
                }

                session_destroy();
            ?>
        </div>

        <div class="board">
            <form action="add-admin.php" method="POST">
                <label>Admin Username: </label><input type="text" name="adminName" 
                placeholder="Enter Admin Username..." required>
                <br>
                <label>Admin Email: </label><input type="email" name="adminEmail" 
                placeholder="Enter Admin Email..." required>
                <br>
                <label>Admin Password: </label><input type="password" name="adminPassword" 
                placeholder="Enter Admin Password..." required>
                <br>
                <label>Admin Password: </label><input type="password" name="adminPasswordAgain" 
                placeholder="Enter Admin Password Again..." required>
            
                <div class="add-action">
                    <a href="add-admin.php">
                        <button type="submit" class="btn btn-success" name="button">Add Admin</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>