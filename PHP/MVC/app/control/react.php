<?php

class react extends control {
    public function index() {
        $data['title'] = "React-Js Page"; // Controler untuk view index React
        $this->view('/templates/header', $data);
        $this->view('/react/index');
        $this->view('/templates/footer');
    }
}