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
Route::get('/pricing', [App\Http\Controllers\Frontend\PricingController::class, 'index'])->name('pricing');
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/features', [App\Http\Controllers\Frontend\FeaturesController::class, 'index'])->name('features');
Route::get('/faq', [App\Http\Controllers\Frontend\FaqController::class, 'index'])->name('faq');
Route::get('/electricity', [App\Http\Controllers\Frontend\PaymentController::class, 'electricity'])->name('electricity');
Route::get('/mobile', [App\Http\Controllers\Frontend\PaymentController::class, 'mobile'])->name('mobile');
Route::get('/data', [App\Http\Controllers\Frontend\PaymentController::class, 'data'])->name('data');
Route::get('/cable', [App\Http\Controllers\Frontend\PaymentController::class, 'cable'])->name('cable');
Route::get('/gift-card', [App\Http\Controllers\Frontend\PaymentController::class, 'gift_card'])->name('gift-card');
Route::get('/password', [App\Http\Controllers\Frontend\PaymentController::class, 'password'])->name('password');
Route::get('/profile', [App\Http\Controllers\Frontend\PaymentController::class, 'profile'])->name('profile');
Route::get('/crypto', [App\Http\Controllers\Frontend\PaymentController::class, 'crypto'])->name('crypto');
Route::get('/transaction-history', [App\Http\Controllers\Frontend\PaymentController::class, 'transaction_history'])->name('transaction-history');
<<<<<<< HEAD
Route::get('/reciept', [App\Http\Controllers\Frontend\PaymentController::class, 'reciept'])->name('reciept');
//add features
Route::get('/home1', [App\Http\Controllers\Frontend\HomeController::class, 'home1'])->name('home1');
Route::get('/continue', [App\Http\Controllers\Frontend\HomeController::class, 'home2'])->name('home2');
Route::get('/login', [App\Http\Controllers\Frontend\HomeController::class, 'home3'])->name('home3');
Route::get('/resetpassword', [App\Http\Controllers\Frontend\HomeController::class, 'home4'])->name('home4');
Route::get('/register', [App\Http\Controllers\Frontend\HomeController::class, 'register'])->name('register');
=======
//add features
Route::get('/home1', [App\Http\Controllers\Frontend\HomeController::class, 'home1'])->name('home1');
Route::get('/home2', [App\Http\Controllers\Frontend\HomeController::class, 'home2'])->name('home2');
Route::get('/home3', [App\Http\Controllers\Frontend\HomeController::class, 'home3'])->name('home3');
Route::get('/home4', [App\Http\Controllers\Frontend\HomeController::class, 'home4'])->name('home4');
Route::get('/home5', [App\Http\Controllers\Frontend\HomeController::class, 'home5'])->name('home5');
>>>>>>> e0e559b5b84997868a22ea8b06599ebdd2307ea5
