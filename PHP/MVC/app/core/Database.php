<?php

class DB {

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME; 

    private $dbh; // database handle = variable connection db
    private $stmt;

    public function __construct() {
        $ds = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name; // var DataServer
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        try {
            $this->dbh = new PDO($ds, $this->user, $this->pass, $option); // dbh = (localhost&dbname , username, password)
        } catch (PDOException $e) {
            die($e->getMessage()); // Jika eror maka akan ada notifikasi
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                
                default:
                    $type = PDO::PARAM_STR;
                    
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        $this->stmt->execute();
    }

    public function resultSet() { // Untuk menampilkan banyak data
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function resultSingle() { // Untuk menampilkan satupersatu
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}