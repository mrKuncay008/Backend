<?php

class login extends control {

    public function index() {
        $data['title'] = "Login Page"; // Controler untuk view index Login
        // $data['nama'] = $this->model('UserModel')->getUser();
        
        $this->view('/temp/head', $data);
        $this->view('/login/index');
        $this->view('/temp/foot');
    }
}