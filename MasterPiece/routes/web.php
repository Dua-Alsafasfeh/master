<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BusStationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;

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


// Route::get('/', function () {
//     return view('userside.home');
// });


Route::controller(App\Http\Controllers\BusStationController::class)->group(function ()
{
    Route::get('/', 'viewHome');
    Route::get('/schedule', 'viewSchedule');
    Route::get('/about', 'viewAbout')->name('about');
    Route::get('/contact', 'viewContact');
    Route::get('/gallery', 'viewGallery');
    // Route::get('/Register', 'viewRegister');
    // Route::get('/Login', 'viewLogin');
    Route::get('/booking', 'viewBooking')->name("booking");
    Route::post('/booking/{trip}', 'storeBokking')->name("storeBokking")->middleware("auth");
    Route::get('/ticket', 'viewTicket');
    Route::post('/storepayment/{id}', 'storePayment');
});
Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/schedule',[App\Http\Controllers\ScheduleController::class,'index']);

Route::put('/editprofile/{id}', [HomeController::class,'editProfile']);
// Route::put('/editpassword/{id}', [HomeController::class,'editPassword']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contactsend');