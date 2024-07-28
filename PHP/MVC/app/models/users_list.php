<?php

class users_list {
    
    private $dbh;
    private $stmt;

    public function __construct() {
        $ds = 'mysql:host=localhost;dbname=login';
        try {
            $this->dbh = new PDO($ds, 'root', '');
        } catch (PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function getAllUsers() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM user_details ');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}