<?php

use App\Http\Controllers\DonorController;
use App\Http\Controllers\PartnerController;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/beneficiaries', function () {
    return view('beneficiaries');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/volunteers', function () {
    return view('volunteers');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/register-partner', function () {
    return view('registerPartner');
});

Route::get('/donate-now', function () {
    return view('donateNow');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::post('/register', [PartnerController::class, 'store']);

Route::post('/donor', [DonorController::class, 'store']);