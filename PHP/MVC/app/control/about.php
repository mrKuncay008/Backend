<?php

class about extends control{
    public function index($nama, $pekerjaan) { // Method default
        
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        
        $this->view('about/index', $data);
    }

    public function page() {
        $this->view('about/page');
    }
}