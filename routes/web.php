<?php

use App\Http\Controllers\EnviosController;
use App\Http\Controllers\loginController;
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
//Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('home');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/acerca-de-nosotros', function () {
    return view('acercaDeNosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/rastreos', function(){
    return view('rastreos');
});

Route::get('/envios', function(){
    return view('envios');
});

Route::post('/envios', [EnviosController::class, 'EnviarCorreo']);

//});
//------------------Login de Usuario---------------------//
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [loginController::class, 'login'])->name('login');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

//-------------------------------------------------------//