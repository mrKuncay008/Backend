<?php

class users extends control {
    public function index() {
        $data['title'] = "User List";
        $data['usr'] = $this->model('users_list')->getAllUsers();
        $this->view('/templates/header', $data);
        $this->view('/users/index' , $data);
        $this->view('/templates/footer');
    }
}