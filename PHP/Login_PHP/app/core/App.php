<?php

class App {
   protected $control = 'login';
   protected $method = 'index';
   protected $par = [];

   public function __construct() {
    $url = $this->parseURL();
    // controler
    if (is_null($url)) {
        $url[0] = $this->control;
    }

    if (file_exists('../app/control/').$url[0].'.php') {
        $this->control = $url[0];
    }

    require_once '../app/control/'.$this->control.'.php';
    $this->control = new $this->control;

    // method
    if (isset($url[1])) {
        if (method_exists($this->control, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }
    }
    //parameter
    if (!empty($url)) {
        $this->par = array_values($url);
        // echo var_dump($url).'<br>'; // cek array
    }
    // Menjalankan Controler
    call_user_func_array([$this->control, $this->method],$this->par);

   }

    public function parseURL() {

        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
