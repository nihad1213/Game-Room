<?php 
/*Create Connection with Database*/
class Database {
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;
    private $charSet;
    public function connect() {
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->databaseName = "gameroom";
        $this->charSet = "utf8mb4";

        try {
            $dataSourceName = "mysql:host".$this->serverName.";dbname:".$this->databaseName.";charset=".$this->charSet;
            $pdo = new PDO($dataSourceName, $this->userName, $this->password);
            /**If we have error it shows in website*/    
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        
        } catch (PDOException $e) {
            echo "Connection Failed!".$e->getMessage();
        }

    }
}

?>