<?php

class login extends control {

    public function index() {
        $data['title'] = "Login Page"; // Controler untuk view index Login
        
        $this->view('/temp/head', $data);
        $this->view('/login/index');
        $this->view('/temp/foot');
    }
}