<?php 
include_once('../../config/connection.php');
include_once('../../config/admin.funcs.php');
ob_start();
session_start();
?>
<?php
include_once('header.php');
?>
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
            $adminID = $_GET['adminID'];
            $sql = "SELECT * FROM admins WHERE adminID = '$adminID'";

            $connection = mysqli_connect("localhost","root","", "gameroom");

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="board">
            <form action="edit-admin.php" method="POST">
                <input type="hidden" name="adminID" value="<?php echo $row['adminID']; ?>">
                <label>New Admin Username: </label><input type="text" name="newAdminName" 
                placeholder="Enter Admin Username..." required value="<?php echo $row['adminName'];?>">
                <br>
                <label>New Admin Email: </label><input type="email" name="newAdminEmail" 
                placeholder="Enter Admin Email..." required value="<?php echo $row['adminEmail']; ?>">
                <br>
                <label>New Admin Password: </label><input type="text" name="newAdminPassword" 
                placeholder="Enter Admin Password..." required>
                <br>
                <label>New Admin Password: </label><input type="text" name="newAdminPasswordAgain" 
                placeholder="Enter Admin Password Again..." required>
            
                <div class="add-action">
                    <button type="submit" class="btn btn-success" name="button">Edit Admin</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>

<?php
    if (isset($_POST['button']) || isset($newAdminName) || isset($newAdminEmail) || isset($newAdminPassword) ||
        isset($newAdminPasswordAgain)) {

        $newAdminName = $_POST['newAdminName'];
        $newAdminEmail = $_POST['newAdminEmail'];
        $newAdminPassword = md5($_POST['newAdminPassword']);
        $newAdminPasswordAgain = md5($_POST['newAdminPasswordAgain']);
        $adminID = $_POST['adminID'];

        $sql2 = "UPDATE admins SET
            adminName = '$newAdminName',
            adminEmail = '$newAdminEmail',
            adminPassword = '$newAdminPassword'
            WHERE adminID = '$adminID'
        ";

        $result = mysqli_query($connection, $sql2);

        if ($result == TRUE) {
            $_SESSION['admin-edit-success'] = "<div style='color: #20914f;'>Admin Edited Successfully</div>";
        } else {
            $_SESSION['admin-edit-fail'] = "<div style='color: #FF0000;'>Failed to Edit Admin</div>";
        }

        if ($newAdminPassword != $newAdminPasswordAgain) {
            $_SESSION['pass-didnt-match'] = "<div style='color: #FF0000;'>Passwords Didn't Match</div>";
        }
        
        header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
        exit();
    }
?>
<?php ob_end_flush(); ?>
