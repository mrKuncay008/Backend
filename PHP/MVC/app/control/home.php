<?php

class home extends control {
    public function index() {
        $data['title'] = "Home"; // Controler untuk view index Home  
        $data['nama'] = $this->model('UserModel')->getUser();
        
        $this->view('/templates/header', $data);
        $this->view('/home/index', $data);
        $this->view('/templates/footer');
    }
}