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

Route::get('/pagetest/{pagename}', [App\Http\Controllers\Frontend\AboutController::class, 'test'])->name('pagetest');

Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\Frontend\HomeController::class, 'check_phone'])->name('check-phone');
Route::post('/home1', [App\Http\Controllers\Frontend\HomeController::class, 'check_user'])->name('check-user');


Route::get('/continue', [App\Http\Controllers\Frontend\HomeController::class, 'home2'])->name('continue');
Route::get('/login', [App\Http\Controllers\Frontend\HomeController::class, 'home3'])->name('login');
Route::get('/reset-password', [App\Http\Controllers\Frontend\HomeController::class, 'home4'])->name('reset-password');
Route::get('/register', [App\Http\Controllers\Frontend\HomeController::class, 'register'])->name('register');
Route::get('/services', [App\Http\Controllers\Frontend\HomeController::class, 'services'])->name('services');
Route::post('/reset-password', [App\Http\Controllers\Frontend\HomeController::class, 'reset_password'])->name('reset');
Route::post('/register-user', [App\Http\Controllers\Frontend\HomeController::class, 'register_user'])->name('register-user');
Route::post('/check-user', [App\Http\Controllers\Frontend\HomeController::class, 'check_user'])->name('check-user');

Route::get('/electricity', [App\Http\Controllers\Frontend\PaymentController::class, 'electricity'])->name('electricity');
Route::get('/mobile', [App\Http\Controllers\Frontend\PaymentController::class, 'mobile'])->name('mobile');
Route::get('/data', [App\Http\Controllers\Frontend\PaymentController::class, 'data'])->name('data');
Route::get('/cable', [App\Http\Controllers\Frontend\PaymentController::class, 'cable'])->name('cable');
Route::get('/gift-card', [App\Http\Controllers\Frontend\PaymentController::class, 'gift_card'])->name('gift-card');
Route::get('/crypto', [App\Http\Controllers\Frontend\PaymentController::class, 'crypto'])->name('crypto');

Route::get('/profile', [App\Http\Controllers\Frontend\PaymentController::class, 'profile'])->name('profile');
Route::get('/reciept', [App\Http\Controllers\Frontend\PaymentController::class, 'reciept'])->name('reciept');

Route::get('/pricing', [App\Http\Controllers\Frontend\PricingController::class, 'index'])->name('pricing');
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/features', [App\Http\Controllers\Frontend\FeaturesController::class, 'index'])->name('features');
Route::get('/faq', [App\Http\Controllers\Frontend\FaqController::class, 'index'])->name('faq');
Route::get('/contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact-us');
Route::get('/how-it-works', [App\Http\Controllers\Frontend\IntroController::class, 'index'])->name('how-it-works');

Route::get('/terms', [App\Http\Controllers\Frontend\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [App\Http\Controllers\Frontend\HomeController::class, 'privacy'])->name('privacy');
Route::get('/transaction-history', [App\Http\Controllers\Frontend\PaymentController::class, 'transaction_history'])->name('transaction-history');

Route::get('/password', [App\Http\Controllers\Frontend\AdminController::class, 'password'])->name('password');
Route::post('/change-password', [App\Http\Controllers\Frontend\AdminController::class, 'change_password'])->name('change-password');

Route::get('/policy', [App\Http\Controllers\Frontend\HomeController::class, 'policy'])->name('policy');
Route::get('/phonenumber', [App\Http\Controllers\Frontend\HomeController::class, 'home1'])->name('phonenumber');

//add features
Route::get('/admin', [App\Http\Controllers\Frontend\AdminController::class, 'index'])->name('admin');
Route::get('/receps', [App\Http\Controllers\Frontend\AdminController::class, 'receps'])->name('receps');
Route::get('/receps1', [App\Http\Controllers\Frontend\AdminController::class, 'receps1'])->name('receps1');

Route::get('/order', [App\Http\Controllers\Frontend\PaymentController::class, 'order'])->name('order');
Route::get('/trans_detail', [App\Http\Controllers\Frontend\AdminController::class, 'trans_detail'])->name('trans_detail');
Route::get('/printable', [App\Http\Controllers\Frontend\AdminController::class, 'printable'])->name('printable');
Route::get('/review', [App\Http\Controllers\Frontend\AdminController::class, 'review'])->name('review');
Route::get('/trans_detail2', [App\Http\Controllers\Frontend\AdminController::class, 'trans_detail2'])->name('trans_detail2');
Route::get('/logo', [App\Http\Controllers\Frontend\AdminController::class, 'logo'])->name('logo');

Route::post('/payment', [App\Http\Controllers\Frontend\PaymentController::class, 'payment'])->name('payment');