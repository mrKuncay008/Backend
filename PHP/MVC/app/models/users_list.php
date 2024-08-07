<?php

class users_list {
    
    private $dbh; // database handle = variable connection db
    private $stmt;

    public function __construct() {
        $ds = 'mysql:host=localhost;dbname=login'; // var DataServer
        try {
            $this->dbh = new PDO($ds, 'root', ''); // dbh = (localhost&dbname , username, password)
        } catch (PDOExeption $e) {
            die($e->getMessage()); // Jika eror maka akan ada notifikasi
        }
    }

    public function getAllUsers() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM user_details ');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}