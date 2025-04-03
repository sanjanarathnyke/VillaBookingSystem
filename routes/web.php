<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
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

// Redirect home to login page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Public Routes (Accessible by any user)
Route::get('single-item', function () {
    return view('Public.singleitem');
})->name('single-item');

Route::get('/contact', function () {
    return view('Public.contact');
})->name('contact');

Route::get('/countries', [CountryController::class, 'showCountries'])->name('show-countries');
Route::get('/country/{id}', [CountryController::class, 'showSingleCountry'])->name('singleitem');
Route::get('/villas', [VillaController::class, 'index'])->name('villas.index');

// Payment Route (Restricted to Logged-in Users)
Route::get('/payment/{id}', [PaymentController::class, 'show'])
    ->middleware('auth')
    ->name('payment');

// Booking Route (Restricted to Logged-in Users)
Route::post('/book-tour', [BookingController::class, 'store'])
    ->middleware('auth')
    ->name('storevalues');


// Authentication Routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register-user');

Route::get('/login', [RegisterController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegisterController::class, 'login'])->name('login-user');

Route::get('/test',function(){
return view('Dashboard.dashboard');
});

