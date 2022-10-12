<?php

use Dotenv\Exception\ValidationException;
use App\Http\Controllers\Auth\LoguinController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('fotos', function () {
    return view('pages.fotos');
});

Route::get('ubicacion', function () {
    return view('pages.ubicacion');
});

Route::get('acerca_de', function () {
    return view('pages.acerca_de');
});

Route::get('contacto', function () {
    return view('pages.contacto');
});

Route::view('login','pages.login')->name('login')->middleware('guest');


Route::get('registro', function () {
    return view('pages.registro');
});



Route::view('usuarios_reg' , 'pages.usuarios_reg') ->middleware('auth');

Route::post('login', [LoguinController::class, 'login']);

Route::get('salir', [LoguinController::class, 'logout']);
