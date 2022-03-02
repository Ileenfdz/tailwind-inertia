<?php

use App\Http\Controllers\ModalController;
use App\Http\Controllers\PruebasController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('pruebas', [PruebasController::class, 'index'])->name('pruebas')->middleware(['auth:sanctum', 'verified']);
Route::get('modal', [ModalController::class, 'index'])->name('modal')->middleware(['auth:sanctum', 'verified']);
Route::get('buttons', [ButtonsController::class,'index'])->name('buttons')->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
