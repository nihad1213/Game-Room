<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/ps.funcs.php');?>
<?php session_start();?>

<?php 
    $object = new showSystems;
    $statement = $object->showSystem();
?>

<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Playstation 1 Systems</h2>
        </div>

        <?php 
            if (isset($_SESSION['add-system-success'])) {
                echo $_SESSION['add-system-success'];
                unset($_SESSION['add-system-success']);
            }

            if (isset($_SESSION['add-system-fail'])) {
                echo $_SESSION['add-system-fail'];
                unset($_SESSION['add-system-fail']);
            }

            if (isset($_SESSION['delete-system-success'])) {
                echo $_SESSION['delete-system-success'];
                unset($_SESSION['delete-system-success']);
            }
            
            if (isset($_SESSION['delete-system-fail'])) {
                echo $_SESSION['delete-system-fail'];
                unset($_SESSION['delete-system-fail']);
            }
            
        ?>

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
                    <th>System Price</th>
                    <th>System Condition</th>
                    <th>System Image</th>
                    <th>Actions</th>
                </tr>
                
                <tr>
                    <?php
                        if ($statement) {
                            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <td><strong><?php echo $row['systemID'];?></strong></td>
                    <td><?php echo $row['systemName']; ?></td>
                    <td><?php echo $row['systemPrice']; ?></td>
                    <td><?php echo $row['systemCondition']; ?></td>
                    <td>
                        <?php 
                            if ($row['systemImageName'] != '0') {
                        ?>
                             <img style="width: 100px" src="<?php echo "http://localhost/Game-Room/";?>assets/sony-image/ps1/<?php echo $row['systemImageName'];?>">
                        <?php 
                            }
                        ?>
                    </td>
                    <td>
                        <a href="delete-ps1-system.php?systemID=<?php echo $row['systemID']; ?>">
                            <button type="button" class="btn btn-danger">Delete System</button> 
                        </a>
                    </td>
                    
                    <td>
                        <a href="edit-ps1-system.php?systemID=<?php echo $row['systemID']; ?>">
                            <button type="button" class="btn btn-warning">Edit System</button>
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