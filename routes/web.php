<?php

use App\Http\Controllers\AdminController;
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


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('single-item', function () {
    return view('Public.singleitem');
})->name('single-item');

Route::get('/contact', function () {
    return view('Public.contact');
})->name('contact');

Route::get('/countries', [CountryController::class, 'showCountries'])->name('show-countries');
Route::get('/country/{id}', [CountryController::class, 'showSingleCountry'])->name('singleitem');
Route::get('/villas', [VillaController::class, 'index'])->name('villas.index');


Route::get('/payment/{id}', [PaymentController::class, 'show'])
    ->middleware('auth')
    ->name('payment');


Route::post('/book-tour', [BookingController::class, 'store'])
    ->middleware('auth')
    ->name('storevalues');


Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register-user');

Route::get('/login', [RegisterController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegisterController::class, 'login'])->name('login-user');


Route::prefix('dashboard')
    ->middleware(['auth','admin'])
    ->group(function () {
        Route::get('/', [AdminController::class, 'showDashboard'])->name('dashboard');
        Route::get('/villa-bookings', [AdminController::class, 'showVillaBookings'])->name('villa-bookings');
        Route::get('/country-info', [AdminController::class, 'showCountryInfo'])->name('country-info');

        Route::post('/country-store', [DashboardController::class, 'store'])->name('country.store');

        Route::get('/villas', [DashboardController::class, 'create'])->name('villas.create');
        Route::post('/villas-store', [DashboardController::class, 'storeVilla'])->name('villas.store');

        Route::get('/villa-info', [DashboardController::class, 'createvillainfo'])->name('villa-info.create');
        Route::post('/villa-info-store', [DashboardController::class, 'storevillaInfo'])->name('villa-info.store');
    });
