<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\About;
use App\Models\Dom;
use App\Models\ListInput;
// use Illuminate\Http\Request;

class allControl extends Controller
{
    public function index() {

        return view ('about', [
            'title' => 'About',
            'Abouts' => About::all()
        ]);
        
        // return view ('list', [
        //     'title' => 'List',
        //     'list' => List::all()
        // ]);
    }
    public function post() {
        return view ('post', [
            'title' => 'Post Page',
            'Posts' => Post::all()
        ]);
    }

    public function dom() {
        return view ('dom', [
            'title' => 'Dom',
            'Doms' => Dom::all()
        ]);
    }
   
    public function list() {
        return view ('list', [
            'title' => 'List',
            'Lists' => ListInput::all()
        ]);
    }
}
