<?php

use Illuminate\Support\Facades\Route;
//rutas de login/registro/remember password, etc
Auth::routes();

//************************************************rutas del frontpage*************************************************//

//rutas sin login
Route::get('/', function () {
    return view('frontWeb');
})->name('frontWeb');

//rutas autentificadas

//*********************************************rutas del dashboard/backend********************************************//

//rutas sin login

//rutas autentificadas
Route::group(['middleware' => 'auth'], function () {

	Route::get('table-list', function () {
		return view('dashboard.pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('dashboard.pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('dashboard.pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('dashboard.pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('dashboard.pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('dashboard.pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('dashboard.pages.upgrade');
	})->name('upgrade');

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
    Route::put('/profile/password', [App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');
});
