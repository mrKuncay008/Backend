<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\about;
// use Illuminate\Http\Request;

class allControl extends Controller
{
    public function index() {
        
        return view ('post', [
            'title' => 'Post Page',
            'Posts' => Post::all()
        ]);

        return view ('about', [
            'title' => 'About',
            'Abouts' => About::all()
        ]);
    }
}
