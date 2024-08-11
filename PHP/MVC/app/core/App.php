<?php

class App {
    protected $control = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
    // Controler
        if ( is_null($url) ) {

            $url[0] = $this->control;
        }

        if (file_exists('../app/control/').$url[0].'.php') {
            $this->control = $url[0];
            unset($url[0]);
            // echo var_dump($url).'<br>'; // cek array
        }
        require_once __DIR__. '/../control/' . $this->control .'.php';
        $this->control = new $this->control;

        //method
        if (isset($url[1])) {
            if (method_exists($this->control, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //params
        if (!empty($url)) {
            $this->params = array_values($url);
            // echo var_dump($url).'<br>'; // cek array
        }
        // Menjalankan Controler
        call_user_func_array([$this->control, $this->method],$this->params);
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