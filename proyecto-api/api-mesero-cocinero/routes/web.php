<?php

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
header("Access-Control-Allow-Origin: *");

// ALLOW OPTIONS METHOD
$headers = [
    'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
    'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin'
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-productos', 'ProductoController@get_productos')->name('inicio-sesion');
