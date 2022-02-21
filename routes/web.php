<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('event')
    ->name('event.')
    ->group(function () {
        Route::get('', [EventController::class, 'index'])->name('index');
        Route::get('detail/{slug}', [EventController::class, 'detail'])->name('detail');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// User auth
require __DIR__.'/auth.php';

// Admin All Feature
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){

	Route::namespace('Auth')->middleware('guest:admin')->group(function(){
		// Login
		Route::get('login', 'AuthenticatedSessionController@create')->name('login');
		Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
	});

	Route::middleware('admin')->group(function(){
		Route::get('dashboard', 'HomeController@index')->name('dashboard');
	});

	Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

});