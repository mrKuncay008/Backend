<?php

namespace App\Models;

class Dom {
    private static $dom_new = [''];
   
    public static function all() {
        return self::$dom_new;
    }
}