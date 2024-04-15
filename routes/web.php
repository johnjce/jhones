<?php

use Illuminate\Support\Facades\Route;
//rutas de login/registro/remember password, etc
Auth::routes();

//************************************************rutas del frontpage*************************************************//

//rutas sin login
Route::get('/', function () {
    return view('front.frontWeb');
})->name('frontWeb');

//rutas autentificadas

//*********************************************rutas del dashboard/backend********************************************//

//rutas sin login
//test
//
//rutas autentificadas
