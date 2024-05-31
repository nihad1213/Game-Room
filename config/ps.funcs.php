<?php 
class addSystem extends Database {
    /**
     * addSystem - Add System to Database
     * Return: Void
     */
    public function addSystem() {
        if (isset($_POST['button'])) {
            $systemName = $_POST['systemName'];
            $systemCondition = $_POST['systemCondition'];
            $imageName = ""; // Initialize imageName to an empty string
            
            if (isset($_FILES['systemImage']['name']) && !empty($_FILES['systemImage']['name'])) {
                $imageName = $_FILES['systemImage']['name'];
                $sourcePath = $_FILES['systemImage']['tmp_name'];
                $destinationPath = "../../assets/sony-image/ps1/".$imageName;
                $upload = move_uploaded_file($sourcePath, $destinationPath);

                if ($upload == FALSE) {
                    $_SESSION['upload'] = "<div style='color: #FF0000;'>Failed to Upload Image</div>";
                    // Handle upload failure here if needed
                }
            }

            $statement = $this->connect()->prepare("INSERT INTO `ps1system` (systemName, systemCondition, systemImageName) VALUES (:systemName, :systemCondition, :systemImageName)");
            $statement->execute([
                ':systemName' => $systemName,
                ':systemCondition' => $systemCondition,
                ':systemImageName' => $imageName
            ]);

            if ($statement) {
                $_SESSION['add-system-success'] = "<div style='color: #20914f;'>System Added Successfully</div>";
            } else {
                $_SESSION['add-system-fail'] = "<div style='color: #FF0000;'>Failed to Add System</div>";
            }
            
            header('Location: http://localhost/Game-Room/adminpanel/partials/add-ps1-system.php');
            exit();
        }
    }
}
?>
