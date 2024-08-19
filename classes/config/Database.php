<?php

  class Database {
    private $servername = "localhost";
    private $dbname = "contacts";
    private $username = "raven";
    private $password = "123456";

    protected function connect() {
      try {
        $dns = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
        $conn = new PDO($dns, $this->username, $this->password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
  }

?>