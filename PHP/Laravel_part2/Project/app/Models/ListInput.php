<?php

namespace App\Models;

class ListInput {
    private static $list_new = [''];
   
    public static function all() {
        return self::$list_new;
    }
}