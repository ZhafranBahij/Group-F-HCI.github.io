<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('tampilan.LandingPage');
});

// Route::get('/', 'App\Http\Controllers\data_controller@create');

Route::get('/index', 'App\Http\Controllers\data_controller@index');

Route::resource('/surverid_db', 'App\Http\Controllers\data_controller');

Route::get('/surverid_db/create' , 'App\Http\Controllers\data_controller@create');

Route::post('/surverid_db/create' , 'App\Http\Controllers\data_controller@store');

Route::get('/surverid_db/inferno/collection' , 'App\Http\Controllers\data_controller@index_collection');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login dan Register

Route::post('/register', 'App\Http\Controllers\orlogin_controller@store' );