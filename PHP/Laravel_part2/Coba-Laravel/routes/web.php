<?php

use App\Http\Controllers\RegionalController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RegionalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/regional', [RegionalController::class, 'index'])-> name('regional.index');
Route::get('/regional/create', [RegionalController::class, 'create'])-> name('regional.create');

Route::post('/regional', [RegionalController::class, 'store'])-> name('regional.store');