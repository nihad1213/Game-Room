<?php 
class addSystem extends Database {
    /**
     * addSystem - Add System to Database
     * Return: Void
     */
    public function addSystem() {
        if (isset($_POST['button'])) {
            $systemName = $_POST['systemName'];
            $systemPrice = $_POST['systemPrice'];
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

            $statement = $this->connect()->prepare("INSERT INTO `ps1system` (systemName, systemPrice, systemCondition, systemImageName) VALUES (:systemName, :systemPrice, :systemCondition, :systemImageName)");
            $statement->execute([
                ':systemName' => $systemName,
                ':systemPrice' => $systemPrice,
                ':systemCondition' => $systemCondition,
                ':systemImageName' => $imageName
            ]);

            if ($statement) {
                $_SESSION['add-system-success'] = "<div style='color: #20914f;'>System Added Successfully</div>";
            } else {
                $_SESSION['add-system-fail'] = "<div style='color: #FF0000;'>Failed to Add System</div>";
            }
            
            header('Location: http://localhost/Game-Room/adminpanel/partials/ps1-system.php');
            exit();
        }
    }
}
?>


<?php 
    class showSystems extends Database {
        /**
         * showSystem - Show Systems in Page
         * Return: array
         */
        public function showSystem() {
            $start = 0;
            $records = $this->connect()->prepare("SELECT * FROM `ps1system`");
            $records->execute(); // Execute the query
            $numberOfRows = $records->rowCount(); // Count the number of rows

            $pages = ceil($numberOfRows / 12);

            if (isset($_GET['page-nr'])) {
                $page = $_GET['page-nr'] - 1; 
                $start  = $page * 12;
            }

            $statement = $this->connect()->prepare("SELECT * FROM `ps1system` LIMIT $start, 12");
            $statement->execute(); // Execute the query
            return array("statement" => $statement, "pages" => $pages); // Return statement and pages count
        }
    }
?>

<?php 
class deleteSystem extends Database {
    /**
     * deleteAdmin - Delete Admin
     * @SystemID: System ID
     * Return: Void
     */
    public function deleteSystem($systemID) {
        if (!isset($systemID)) {
            return false;
        }
        
        $statement = $this->connect()->prepare("DELETE FROM `ps1system` WHERE systemID = :systemID");
        $statement->bindParam(':systemID', $systemID, PDO::PARAM_INT);

        $success = $statement->execute();
            
        if ($success) {
            $_SESSION['delete-system-success'] = "<div style='color: #20914f;'>Admin Deleted Successfully</div>";
        } else {
            $_SESSION['delete-system-fail'] = "<div style='color: #FF0000;'>Failed to Delete Admin</div>";
        }

        header('Location: http://localhost/Game-Room/adminpanel/partials/ps1-system.php');
        exit();
    }
}
?>