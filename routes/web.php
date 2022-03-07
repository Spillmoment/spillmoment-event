<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
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
		Route::get('filter', [EventController::class, 'filter'])->name('filter');
		Route::get('detail/{slug}', [EventController::class, 'detail'])->name('detail');
		Route::post('join-event/{event_id}', [EventController::class, 'join'])->name('join');
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

		Route::get('forgot-password', 'PasswordResetLinkController@create')->name('password.request');
		Route::post('forgot-password', 'PasswordResetLinkController@store')->name('password.email');
		Route::get('reset-password/{token}', 'NewPasswordController@create')->name('password.reset');
		Route::post('reset-password', 'NewPasswordController@store')->name('password.update');
		
	});

	Route::middleware('admin')->group(function () {
		Route::post('logout', [AuthenticatedSessionController::class,'destroy'])->name('logout');
		// Route::get('dashboard', 'HomeController@index')->name('dashboard');
		// Dashboard
		Route::get('dashboard', [DashboardControlller::class, 'index'])->name('dashboard');
		// Event
		Route::resource('kategori', KategoriEventController::class)->except(['show']);
		Route::resource('speaker', SpeakerController::class);
		Route::resource('event', AdminEventController::class);
		Route::resource('event-register', EventRegisterControlller::class, ['only' => ['index', 'show']]);
	});

});
