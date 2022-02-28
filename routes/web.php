<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardControlller;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\EventRegisterControlller;
use App\Http\Controllers\Admin\KategoriEventController;
use App\Http\Controllers\Admin\SpeakerController;

// User auth
require __DIR__ . '/auth.php';

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

// Admin All Feature
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

	Route::namespace('Auth')->middleware('guest:admin')->group(function () {
		// Login
		Route::get('login', 'AuthenticatedSessionController@create')->name('login');
		Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
	});

	Route::middleware('admin')->group(function () {
		Route::get('dashboard', 'HomeController@index')->name('dashboard');
	});

	Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

	// Dashboard
	Route::get('dashboard', [DashboardControlller::class, 'index'])->name('dashboard');
	// Event
	Route::resource('kategori', KategoriEventController::class)->except(['show']);
	Route::resource('speaker', SpeakerController::class);
	Route::resource('events', AdminEventController::class);
	Route::resource('event-register', EventRegisterControlller::class, ['only' => ['index', 'show']]);
});
