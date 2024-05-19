<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/admin.funcs.php');?>
<?php session_start();?>

<?php 
    $object = new showAdmins;
    $statement = $object->showAdmins();
?>

<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Admin</h2>
        </div>

        <div>
            <?php 
                if (isset($_SESSION['add-admin-success'])) {
                    echo $_SESSION['add-admin-success'];
                    unset($_SESSION['add-admin-success']);
                }
                if (isset($_SESSION['add-admin-fail'])) {
                    echo $_SESSION['add-admin-fail'];
                    unset($_SESSION['add-admin-fail']);
                }
                if (isset($_SESSION['delete-admin-success'])) {
                    echo $_SESSION['delete-admin-success'];
                    unset($_SESSION['delete-admin-success']);
                }
                if (isset($_SESSION['delete-admin-fail'])) {
                    echo $_SESSION['delete-admin-fail'];
                    unset($_SESSION['delete-admin-fail']);
                }

                session_destroy();
            ?>
        </div>

        <div class="action">
            <a href="add-admin.php">
                <button type="button" class="btn btn-success">Add Admin</button>
            </a>
        </div>

        <div class="board">
            <table>
                <tr>
                    <th>Admin ID</th>
                    <th>Admin Username</th>
                    <th>Admin Email</th>
                    <th>Actions</th>
                </tr>
                
                <tr>
                    <?php
                        if ($statement) {
                            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <td><strong><?php echo $row['adminID'] ?></strong></td>
                    <td><?php echo $row['adminName'] ?></td>
                    <td><?php echo $row['adminEmail'] ?></td>
                    <td>
                        <a href="delete-admin.php?adminID=<?php echo $row['adminID'];?>">
                            <button type="button" class="btn btn-danger">Delete Admin</button> 
                        </a>
                    </td>
                    
                    <td>
                        <a href="edit-admin.php?adminID=<?php echo $row['adminID']; ?>">
                            <button type="button" class="btn btn-warning">Edit Admin</button>
                        </a>
                    </td>
                </tr>
                    <?php 
                            }
                        }
                    ?>
            </table>
        </div>
    </div>

</main>
<?php include_once('footer.php');?>