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