<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Nosotros', function () {
    return view('nosotros');
});

Route::get('Tienda', function () {
    return view('tienda');
});

Route::get('Contacto', function () {
    return view('contacto');
});
