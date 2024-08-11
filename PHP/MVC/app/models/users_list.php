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

    public function addData($data) {
        $query = 'INSERT INTO ' . $this->table .
                " VALUES ('', :firstname, :lastname, :email, :gender)";
        $this->db->query($query);
        $this->db->bind('firstname', $data['firstname']); // di abmbil dari :databaes, data[dari name di html]
        $this->db->bind('lastname', $data['lastname']); // di abmbil dari :databaes, data[dari name di html]
        $this->db->bind('email', $data['email']); // di abmbil dari :databaes, data[dari name di html]
        $this->db->bind('gender', $data['gender']); // di abmbil dari :databaes, data[dari name di html]
        
        $this->db->execute();
    }
}