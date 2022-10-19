<?php

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

Route::resource('usuarios_reg' , 'App\Http\Controllers\UserController');

Route::get( uri: 'create', action:[App\Http\Controllers\UserController::class, 'create']);

Route::post( uri: 'store', action:[App\Http\Controllers\UserController::class, 'store'])->name( name: 'pages.store');

Route::get( uri: 'edit {user}', action:[App\Http\Controllers\UserController::class, 'edit'])->name( name: 'pages.edit');

Route::put( uri: '{user}', action:[App\Http\Controllers\UserController::class, 'update'])->name( name: 'pages.update');

Route::delete( uri: '{user}', action:[App\Http\Controllers\UserController::class, 'destroy'])->name( name: 'pages.destroy');

Route::post('login', [LoguinController::class, 'login']);

Route::get('salir', [LoguinController::class, 'logout']);

Route::post( uri: 'contacto', action:[App\Http\Controllers\ClienteController::class, 'store'])->name( name: 'pages.contacto');
