<?php 
include_once('../../config/connection.php');
include_once('../../config/ps.funcs.php');
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
            <h2>Edit System</h2>
        </div>        

        <?php
            $systemID = $_GET['systemID'];
            $sql = "SELECT * FROM ps1system WHERE systemID = '$systemID'";

            $connection = mysqli_connect("localhost","root","", "gameroom");

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="board">
            <form action="edit-ps1-system.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="systemID" value="<?php echo $row['systemID']; ?>">
                <label>New System Name: </label><input type="text" name="newSystemName" placeholder="Enter System Name..." required><br>
                <label>New System Price: </label><input type="number" name="newSystemPrice" placeholder="Enter System Price..." required><br>
                <label>New System Condition: </label>
                <select name="newSystemCondition">
                    <option value="Bad">Bad</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                </select><br>
                <label>New System Image: </label><input type="file" name="newSystemImage"><br> <!-- Allow image to be optional -->

                <div class="add-action">
                    <button type="submit" class="btn btn-success" name="button">Edit System</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include_once('footer.php');?>

<?php
    if (isset($_POST['button'])) {
        $newSystemName = $_POST['newSystemName'];
        $newSystemPrice = $_POST['newSystemPrice'];
        $newSystemCondition = $_POST['newSystemCondition'];
        $systemID = $_POST['systemID'];

        // File upload logic for system image
        if ($_FILES['newSystemImage']['size'] > 0) { // Check if a new image is uploaded
            $newSystemImageName = $_FILES['newSystemImage']['name'];
            $newSystemImagePath = "../../assets/sony-image/ps1/" . $newSystemImageName;
            move_uploaded_file($_FILES['newSystemImage']['tmp_name'], $newSystemImagePath);
        } else {
            $newSystemImageName = $row['systemImageName']; // Use existing image name if no new image is uploaded
        }
        
        $sql2 = "UPDATE ps1system SET
            systemName = '$newSystemName',
            systemPrice = '$newSystemPrice',
            systemCondition = '$newSystemCondition',
            systemImageName = '$newSystemImageName'
            WHERE systemID = '$systemID'
        ";

        $result = mysqli_query($connection, $sql2);
        
        if ($result == TRUE) {
            $_SESSION['system-edit-success'] = "<div style='color: #20914f;'>System Edited Successfully</div>";
        } else {
            $_SESSION['system-edit-fail'] = "<div style='color: #FF0000;'>Failed to Edit System</div>";
        }

        header('Location: http://localhost/Game-Room/adminpanel/partials/ps1-system.php');
        exit();
    }
?>
<?php ob_end_flush(); ?>
