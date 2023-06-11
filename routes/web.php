<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('welcome');

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::impersonate();

    Route::get('tools/health', HealthCheckResultsController::class)
        ->can('viewHealth');

    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
