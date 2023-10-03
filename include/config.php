<?php

class Database {

    //Local Environment
    private $host = 'localhost';
    private $port = '5432';
    private $username = 'postgres';
    private $password = 'root';
    private $dbname = 'nmp_dr';

    //Production Environment
//    private $host = 'LOL';
//    private $port = 'LOL';
//    private $dbname = 'LOL';
//    private $username = 'LOL';
//    private $password = 'LOL';

    private $conn;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    private function getConnection(){
        try {
            $this->conn = new PDO(
                "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn;
        } catch (PDOException $exception){
            die("Database Connection Failed: ".$exception->getMessage());
        }
    }

    public function select($query, $params = []){

        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception){
            die("Database Error: ".$exception->getMessage());
        }

    }

    public function insert($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function update($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function delete($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

}
