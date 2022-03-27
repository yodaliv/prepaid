<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/privacy', [App\Http\Controllers\Frontend\HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [App\Http\Controllers\Frontend\HomeController::class, 'terms'])->name('terms');
Route::get('/policy', [App\Http\Controllers\Frontend\HomeController::class, 'policy'])->name('policy');
Route::get('/how-it-works', [App\Http\Controllers\Frontend\IntroController::class, 'index'])->name('how-it-works');
Route::get('/contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact-us');
