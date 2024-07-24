<?php

class home extends control {
    public function index() {
        $data['title'] = "Home"; // Controler untuk view index Home
        $this->view('/templates/header', $data);
        $this->view('/home/index');
        $this->view('/templates/footer');
    }
}