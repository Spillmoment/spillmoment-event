<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\{
	DashboardControlller,
	EventController as AdminEventController,
	EventRegisterControlller,
	KategoriEventController,
	PartnerController,
	SpeakerController
};
use App\Http\Controllers\Web\{
	HomeController,
	EventController,
	ProfileController,
	CategoryController,
	ProductController,
	VendorController
};

// User auth
require __DIR__ . '/auth.php';

Route::get('', HomeController::class)
	->name('home');

Route::get('dashboard', [ProfileController::class, 'dashboard'])
	->middleware(['auth'])
	->name('dashboard');

Route::prefix('category')
	->name('category.')
	->group(function () {
		Route::get('', [CategoryController::class, 'index'])->name('index');
		Route::get('detail/{slug}', [CategoryController::class, 'detail'])->name('detail');
	});

Route::prefix('product')
	->name('product.')
	->group(function () {
		Route::get('', [ProductController::class, 'index'])->name('index');
		Route::get('detail/{slug}', [ProductController::class, 'detail'])->name('detail');
	});

Route::prefix('vendor')
	->name('vendor.')
	->group(function () {
		Route::get('', [VendorController::class, 'index'])->name('index');
		Route::get('detail/{slug}', [VendorController::class, 'detail'])->name('detail');
	});

Route::prefix('event')
	->name('event.')
	->group(function () {
		Route::get('', [EventController::class, 'index'])
			->name('index');
		Route::get('filter', [EventController::class, 'filter'])
			->name('filter');
		Route::get('kategori-event', [EventController::class, 'kategoriGetAutocomplete'])
			->name('kategori.getAutocomplte');
		Route::get('partner-event', [EventController::class, 'partnerGetAutocomplete'])
			->name('partner.getAutocomplte');
		Route::get('detail/{slug}', [EventController::class, 'detail'])
			->name('detail');
		Route::post('join-event/{event_id}', [EventController::class, 'join'])
			->name('join');
	});



// Admin All Feature
Route::namespace('Admin')
	->prefix('admin')
	->name('admin.')->group(function () {

		// Authenticate
		Route::namespace('Auth')->middleware('guest:admin')
			->group(function () {
				// Login
				Route::get('login', 'AuthenticatedSessionController@create')
					->name('login');
				Route::post('login', 'AuthenticatedSessionController@store')
					->name('adminlogin');

				Route::get('forgot-password', 'PasswordResetLinkController@create')
					->name('password.request');
				Route::post('forgot-password', 'PasswordResetLinkController@store')
					->name('password.email');
				Route::get('reset-password/{token}', 'NewPasswordController@create')
					->name('password.reset');
				Route::post('reset-password', 'NewPasswordController@store')
					->name('password.update');
			});

		// Admin
		Route::middleware('admin')
			->group(function () {
				Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
					->name('logout');
				// Dashboard
				Route::get('dashboard', [DashboardControlller::class, 'index'])
					->name('dashboard');
				// Event
				Route::resource('kategori', KategoriEventController::class)
					->except(['show']);
				Route::resource('speaker', SpeakerController::class);
				Route::resource('partner', PartnerController::class)
					->except(['show']);
				Route::resource('event', AdminEventController::class);
				// Register Event
				Route::get('register-event', [EventRegisterControlller::class, 'index'])
					->name('register-event.index');
				Route::get('register-event/{id}', [EventRegisterControlller::class, 'show'])
					->name('register-event.show');
				Route::put('confirm-event/{id}/{state}', [EventRegisterControlller::class, 'confirm'])
					->name('confirm-event');
			});
	});
