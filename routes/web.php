<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VillaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('single-item',function(){
    return view('Public.singleitem');
})->name('single-item');

// Route::get('/destiantion',function(){
//     return view('public.itempath');
// })->name('itempath');

Route::get('/contact',function(){
    return view('Public.contact');
})->name('contact');

// Route::get('/villas',function(){
//     return view('Public.villa-list');
// })->name('villas');

Route::get('/countries',[CountryController::class,'showCountries'])->name('show-countries');

Route::get('/country/{id}', [CountryController::class, 'showSingleCountry'])->name('single-country');

Route::get('/villas', [VillaController::class, 'index'])->name('villas.index');

// Route::get('/payment',function(){
//     return view('Public.payment');
// })->name('payment');

Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment');

Route::post('/book-tour', [BookingController::class, 'store'])->name('storevalues');
