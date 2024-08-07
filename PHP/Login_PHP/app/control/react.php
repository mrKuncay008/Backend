<?php

class react extends control {
    public function index() {
        $data['title'] = "PHP Page"; // Controler untuk view index React
        $data['conn'] = $this->model('Mainfunc')->getAllUsers();
        $data['name'] = $this->model('UserModel')->getUser(); // Memanggil parameter dan Function dari models
        
        $this->view('/temp/headreact', $data);
        $this->view('/react/index', $data);
        $this->view('/temp/foot');
    }
}