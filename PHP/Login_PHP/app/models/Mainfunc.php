<?php

class Mainfunc {
    private $dbh; // database handle = variable connection db
    private $stmt;

    public function __construct() { // Function Koneksi
        $ds = 'mysql:host=localhost;dbname=Project_002B2'; // var DataServer
        try {
            $this->dbh = new PDO($ds, 'root', '0343Ahub6453@'); // dbh = (localhost&dbname , username, password)
        } catch (PDOExeption $e) {
            die($e->getMessage()); // Jika eror maka akan ada notifikasi
        }
    }
    public function getAllUsers() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM USERS');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}