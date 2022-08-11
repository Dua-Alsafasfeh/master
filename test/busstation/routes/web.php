<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusStationController;
use App\Http\Controllers\scheduleController;
use Illuminate\Support\Facades\Auth;


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
    return view('userside.home');
});


Route::controller(BusStationController::class)->group(function ()
{
    Route::get('/home', 'viewHome');
    Route::get('/schedule', 'viewSchedule');
    Route::get('/about', 'viewAbout')->name('about');
    Route::get('/contact', 'viewContact');
    Route::get('/gallery', 'viewGallery');
    // Route::get('/Register', 'viewRegister');
    // Route::get('/Login', 'viewLogin');
    Route::get('/booking', 'viewBooking');
});
Auth::routes();
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/schedule',[scheduleController::class,'index']);






Route::namespace('Admin')
    ->prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified', 'admin'])
    ->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('locations', 'LocationController')->except(['show']);
        Route::resource('buses', 'BusController')->except(['show']);
        Route::resource('routes', 'RouteController');
        Route::resource('rides', 'RideController');
        Route::resource('bookings', 'BookingController')->except(['show', 'create', 'store']);
        Route::resource('users', 'UserController')->except(['show']);
    });