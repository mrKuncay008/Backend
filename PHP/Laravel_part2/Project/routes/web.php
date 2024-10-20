<?php

use App\Http\Controllers\allControl;
// use App\Models\Post; Sudah di direct ke cotroler
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home'
    ]);
});

Route::get('/about', [allControl::class, 'index']);
Route::get('/post', [allControl::class, 'post']);
Route::get('/dom', [allControl::class, 'dom']);
Route::get('/list', [allControl::class, 'list']);
