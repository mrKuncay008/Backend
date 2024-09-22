<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// extends Model
class Post
{
    private static $post_new = [ 
            'header' => 'My Article',
            'author' => 'Masjon',
            'paraf' => '
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos architecto sapiente culpa labore dolore 
                nostrum vitae asperiores dolorum! Nisi nam rem veniam aperiam accusantium voluptatum est illum explicabo! 
                Ex fuga, placeat porro impedit velit animi sed ab dolorum voluptatem, commodi magni expedita voluptates 
                at vero quas sapiente maxime vel veniam officiis rem repudiandae, autem in? Fugit odit, 
                accusantium alias officia numquam ex tempore quasi dolorem officiis, aperiam tempora?
                Incidunt quos nesciunt quaerat blanditiis ducimus libero dolorem dicta ad mollitia beatae.
            '
        
    ];

    public static function all() {
        return self::$post_new;
    }
}
