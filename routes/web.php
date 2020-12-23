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

Route::resource('/surverid_db', 'App\Http\Controllers\data_controller');

Route::get('/surverid_db/create' , 'App\Http\Controllers\data_controller@create');

Route::post('/surverid_db/create' , 'App\Http\Controllers\data_controller@store');

Route::get('/surverid_db/inferno/collection' , 'App\Http\Controllers\data_controller@index_collection');

Route::get('/surverid_db/{surverid_db} ' , 'App\Http\Controllers\data_controller@update_fp');

Route::post('/surverid_db/{surverid_db} ' , 'App\Http\Controllers\data_controller@update_fp');

//Form
Route::get('/form' , 'App\Http\Controllers\form_feedback@create');

Route::post('/form' , 'App\Http\Controllers\form_feedback@store');


// Login dan Register
Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index');

//Profile
Route::resource('/profile', 'App\Http\Controllers\user_controller');

//Rule
Route::get('/rule', function () {
    return view('tampilan.Rule');
});

//About Us
Route::get('/about', function () {
    return view('tampilan.About_Us');
});
