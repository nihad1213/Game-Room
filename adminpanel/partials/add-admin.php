<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/functions.php');?>
<?php 
    $object = new Database;
    $object->connect();
?>
<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Add Admin</h2>
        </div>

        <div class="board">
            <form action="add-admin.php">
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
            </form>
        

            <div class="add-action">
                <a href="add-admin.php">
                    <button type="button" class="btn btn-success" name="button">Add Admin</button>
                </a>
            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>