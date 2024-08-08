<?php

class users_list {
    private $table = 'USER';
    private $db;

    public function __construct() {
        $this->db = new DB; // class model untuk memanggil di database bisa untuk semua metode

    }

    public function getAllUsers() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    } 
}