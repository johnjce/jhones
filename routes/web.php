<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;

//rutas de login/registro/remember password, etc
Auth::routes();

//************************************************rutas del frontpage*************************************************//

//rutas sin login
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact');

//rutas autentificadas

//*********************************************rutas del dashboard/backend********************************************//
