<?php

use Illuminate\Support\Facades\Route;

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
    return view('principal/pagprincipal');
});

Route::get('/Consultoria', function () {
    return view('consultoria/consultoria');
});
Route::get('/Test', function () {
    return view('test/test');
});
Route::get('/TiposViolencia', function () {
    return view('tipos/tipos');
});
Route::get('/Denuncia', function () {
    return view('denuncia/denuncia');
});
Route::get('/Login', function () {
    return view('login/login');
});

