<?php include_once('connection.php');?>
<?php 
class showSubs extends Database {
    /**
     * showSubs - Show Subscribers
     * Return: statement
     */
    public function showSubs() {
        $statement = $this->connect()->prepare("SELECT * FROM `subscribers`");
        $statement->execute();
        return $statement;
    }
}
?>
<?php
class countSubs extends Database {
    /**
     * getAdminCount - Retrieve the number of admins
     * Return: int - The number of admins
     */
    public function getSubCount() {
        // Prepare the SQL query to count the number of admins
        $statement = $this->connect()->prepare("SELECT COUNT(*) as subCount FROM `subscribers`");
        $statement->execute();

        // Fetch the result
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        // Return the number of admins
        return $result['subCount'];
    }
}