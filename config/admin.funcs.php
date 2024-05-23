<?php
class addAdmins extends Database {
    /**
     * addAdmins - Add admin to database
     * Return: Void
     */
    public function addAdmins() {
        if (isset($_POST['button'])) {
            $adminName = $_POST['adminName'];
            $adminPassword = md5($_POST['adminPassword']);
            $adminPasswordAgain = md5($_POST['adminPasswordAgain']);
            $adminEmail = $_POST['adminEmail'];
            
            if (strlen($_POST['adminPassword']) < 5) {
                $_SESSION['pass-short'] = "<div style='color: #FF0000;'>Passwords Must Have More than 5 Characters</div>";
            
            } else {

                /*If passwords doesn't match show error*/
                if ($adminPassword != $adminPasswordAgain) {
                    $_SESSION['pass-didnt-match'] = "<div style='color: #FF0000;'>Passwords Didn't Match</div>";
                } else {
                    $statement = $this->connect()->prepare("INSERT INTO `admins` (adminName, adminEmail, adminPassword) VALUES (:adminName, :adminEmail, :adminPassword)");

                    $statement->execute([
                        ':adminName' => $adminName,
                        ':adminEmail' => $adminEmail,
                        ':adminPassword' => $adminPassword
                    ]);

                    if ($statement) {
                        $_SESSION['add-admin-success'] = "<div style='color: #20914f;'>Admin Added Successfully</div>";
                    } else {
                        $_SESSION['add-admin-fail'] = "<div style='color: #FF0000;'>Failed to Add Admin</div>";
                    }

                    header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
                    exit();
                }
            }
        }
    }
}

class showAdmins extends Database {
    /**
     * showAdmins - Query select Everything from admins
     * Return: $statement
     */
    public function showAdmins() {
        $statement = $this->connect()->prepare("SELECT * FROM `admins`");
        $statement->execute();
        return $statement;
    }
}

class deleteAdmin extends Database {
    /**
     * deleteAdmin - Delete Admin
     * @adminID: Admin ID
     * Return: Void
     */
    public function deleteAdmin($adminID) {
        if (!isset($adminID)) {
            return false;
        }
        
        $statement = $this->connect()->prepare("DELETE FROM `admins` WHERE adminID = :adminID");
        $statement->bindParam(':adminID', $adminID, PDO::PARAM_INT);

        $success = $statement->execute();
            
        if ($success) {
            $_SESSION['delete-admin-success'] = "<div style='color: #20914f;'>Admin Deleted Successfully</div>";
        } else {
            $_SESSION['delete-admin-fail'] = "<div style='color: #FF0000;'>Failed to Delete Admin</div>";
        }

        header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
        exit();
    }
}

class countAdmins extends Database {
    /**
     * getAdminCount - Retrieve the number of admins
     * Return: int - The number of admins
     */
    public function getAdminCount() {
        // Prepare the SQL query to count the number of admins
        $statement = $this->connect()->prepare("SELECT COUNT(*) as adminCount FROM `admins`");
        $statement->execute();

        // Fetch the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        // Return the number of admins
        return $result['adminCount'];
    }
}
?>