<?php

class Db{
    private $servername="localhost";
    private $password="";
    private $username="root";
    private $dbname = "planet";
    private $conn;
  function connectDB(){
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}
//static with this?
