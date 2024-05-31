<?php include_once('../../config/connection.php');?>
<?php include_once('../../config/ps.funcs.php');?>
<?php session_start(); ?>
<?php 
    $object = new addSystem();
    $object->addSystem();
?>
<?php include_once('header.php');?>
<main>
    <?php include_once('side-bar.php');?>

    <div class="main-page">
        <div class="main-page-header">
            <h2>Add Playstation 1 System</h2>
        </div>

        <?php 
            if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if (isset($_SESSION['add-system-success'])) {
                echo $_SESSION['add-system-success'];
                unset($_SESSION['add-system-success']);
            }

            if (isset($_SESSION['add-system-fail'])) {
                echo $_SESSION['add-system-fail'];
                unset($_SESSION['add-system-fail']);
            }
        ?>
        <div class="board">
        <form action="add-ps1-system.php" method="POST" enctype="multipart/form-data">
            <label>System Name: </label><input type="text" name="systemName" placeholder="Enter System Name..." required><br>
            <label>System Condition: </label>
            <select name="systemCondition">
                <option value="Bad">Bad</option>
                <option value="Good">Good</option>
                <option value="Excellent">Excellent</option> <!-- Corrected spelling -->
            </select><br>
            <label>System Image: </label><input type="file" name="systemImage" required><br>

            <div class="add-action">
                <button type="submit" class="btn btn-success" name="button">Add System</button> <!-- Directly inside the form -->
            </div>
        </form>

        </div>
    </div>
</main>
<?php include_once('footer.php');?>