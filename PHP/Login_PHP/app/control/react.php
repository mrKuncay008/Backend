<?php

class react extends control {
    public function index() {
        $data['title'] = "React-Js Page"; // Controler untuk view index React
        $this->view('/temp/headreact', $data);
        $this->view('/react/index');
        $this->view('/temp/foot');
    }
}