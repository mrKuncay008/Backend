<?php

class register extends control {

    public function index() {
        $data['title'] = "Register First !"; // Controler untuk view index Login
        // $data['nama'] = $this->model('UserModel')->getUser();
        
        $this->view('/temp/headregis', $data);
        $this->view('/register/index');
    }
}