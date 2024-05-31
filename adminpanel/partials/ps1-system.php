<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/ps.funcs.php');?>
<?php session_start();?>

<?php 
    
?>

<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Playstation 1 Systems</h2>
        </div>

        <div class="action">
            <a href="add-ps1-system.php">
                <button type="button" class="btn btn-success">Add PS1 System</button>
            </a>
        </div>

        <div class="board">
            <table>
                <tr>
                    <th>System ID</th>
                    <th>System Name</th>
                    <th>System Condition</th>
                    <th>System Image</th>
                    <th>Actions</th>
                </tr>
                
                <tr>
                    <?php
                        if ($statement) {
                            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <td><strong><?php ?></strong></td>
                    <td><?php ?></td>
                    <td><?php ?></td>
                    <td></td>
                    <td>
                        <a href="delete-ps1-system.php>">
                            <button type="button" class="btn btn-danger">Delete Admin</button> 
                        </a>
                    </td>
                    
                    <td>
                        <a href="edit-ps1-system.php">
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