<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AgresorController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\ReporteController;


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
})->middleware('auth');



Route::get('/Test', function () {
    return view('test/test');
});

Route::get('/TiposViolencia', function () {
    return view('tipos/tipos');
});
Route::get('/Denuncia', function () {
    return view('denuncia/denuncia');
});

Route::get('/confirmacion', function () {
    return view('denuncia/confirma');
});

Route::get('/Login', function () {
    return view('login/login');
})->middleware('guest');

Route::post('post-login', [LoginController::class, 'login']);

Route::post('post-logout', [LoginController::class, 'logout']);

Route::get('/send-email', [MailController::class,'sendEmail']);

Route::resource('/agresor',AgresorController::class);

Route::resource('/denuncia',DenunciaController::class,[MailController::class,'sendEmail']);
Route::resource('/denuncia',DenunciaController::class);

Route::resource('/Consultoria',ReporteController::class);

Route::get('pdf', [ReporteController::class, 'pdf'])->name('pdf');
