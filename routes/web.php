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
        Route::get('detail', [EventController::class, 'detail'])->name('detail');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
