<?php
    class addAdmins extends Database {
        /**
         * addAdmins - Add admin to database
         * Return: Void
         */
        public function addAdmins() {

            if (isset($_POST['button']) || isset($adminName) || isset($adminEmail) || isset($adminPassword)
                || isset($adminPasswordAgain)) {
                
                $adminName = $_POST['adminName'];
                $adminPassword = md5($_POST['adminPassword']);
                $adminPasswordAgain = md5($_POST['adminPasswordAgain']);
                $adminEmail = $_POST['adminEmail'];
                
                /*If passwords doesnt match show error*/
                if ($adminPassword != $adminPasswordAgain) {
                    $_SESSION['pass-didnt-match'] = "<div style='color: #FF0000;'>Passwords Didn't Match</div>";
                } else {
                    $statement = $this->connect()->prepare("INSERT INTO `admins` SET
                        adminName = :adminName,
                        adminEmail = :adminEmail,
                        adminPassword = :adminPassword
                    ");

                    $statement->execute([
                        ':adminName' => $adminName,
                        ':adminEmail' => $adminEmail,
                        ':adminPassword' => $adminPassword
                    ]);

                    if ($statement) {
                        $_SESSION['add-admin-success'] = "<div style='color: #20914f;'>Admin Added Succesfully</div>";
                    } else {
                        $_SESSION['add-admin-fail'] = "<div style='color: #FF0000;'>Failed to Add Admin</div>";
                    }

                    header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
                    exit();
                }
            }
        }
    }
?>

<?php 
    class showAdmins extends Database {
        /**
         * showAdmins - Query select Evrythin from admins
         * Return: $statement
         */
        public function showAdmins() {
            $statement = $this->connect()->prepare("SELECT * FROM `admins`");
            $statement->execute();
            return $statement;
        }
    }
?>

<?php

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
            
            $statement = $this->connect()->prepare("DELETE FROM `admins` WHERE adminID =:adminID");
            $statement->bindParam(':adminID', $adminID, PDO::PARAM_INT);

            $success = $statement->execute();
                
                
            if ($success) {
                    $_SESSION['delete-admin-success'] = "<div style='color: #20914f;'>Admin Deleted Succesfully</div>";
            } else {
                    $_SESSION['delete-admin-fail'] = "<div style='color: #FF0000;'>Failed to Delete Admin</div>";
            }

            header('Location: http://localhost/Game-Room/adminpanel/partials/admin.php');
            exit();
        }
    }
?>

<?php 

?>
