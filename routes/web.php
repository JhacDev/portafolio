<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController;

Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index']);
Auth::routes([
    'register'=>false,
    'reset'=> false,
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::resources([
        'proyectos' => ProyectoController::class,
        
    ]);
});
