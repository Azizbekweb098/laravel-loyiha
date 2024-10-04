<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\SitrController;

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

Route::get('/', [SitrController::class, 'index'])->name('index');
Route::get('media', [SitrController::class, 'media'])->name('media');
Route::get('about', [SitrController::class, 'about'])->name('about');
Route::get('contact', [SitrController::class, 'contact'])->name('contact');

Route::get('/media-detal', [SitrController::class, 'mediaD'])->name('mediaD');

