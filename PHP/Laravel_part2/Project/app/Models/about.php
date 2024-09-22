<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// extends Model
class About {
    private static $about_new = [
        'name'=> 'Masjon',
        'email'=> 'Masjon@gmail.com',
        'image'=> '/img/info-perfil.png',
    ];

    public static function all() {
        return self::$about_new;
    }
}
