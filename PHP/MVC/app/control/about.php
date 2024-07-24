<?php

class about extends control{
    public function index($nama = 'Maspren', $pekerjaan = 'Tukang Bangunan') { // Method default
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['title'] = "About"; // Controler untuk view About
        
        $this->view('/templates/header', $data);
        $this->view('about/index', $data);
        $this->view('/templates/footer');
    }

    public function page() {
        $data['title'] = "Main Pages"; // Controler untuk view Page

        $this->view('/templates/header',$data);
        $this->view('about/page', $data);
        $this->view('/templates/footer');
    }
}