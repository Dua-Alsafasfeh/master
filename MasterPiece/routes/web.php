<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BusStationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HomeController;
use TCG\Voyager\Facades\Voyager;

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


Route::controller(BusStationController::class)->group(function ()
{
    Route::get('/', 'viewHome');
    // Route::get('/schedule', 'viewSchedule');
    Route::get('/about', 'viewAbout')->name('about');
    Route::get('/contact', 'viewContact');
    Route::get('/gallery', 'viewGallery');
    
    Route::get('/booking', 'viewBooking')->name("booking");
    Route::post('/payment/{trip}', 'storeBokking')->name("storeBokking")->middleware("auth");
    // Route::get('/ticket', 'viewTicket')->name("ticket");
    Route::get('/ticket/tripID/{trip_id}/tripBookingID/{tripBooking}', 'viewTicket_unpaid')->name("unpaidTicket");
    // Route::get('/payment','viewPayment');
    Route::any('/storepayment/tripID/{trip_id}/tripBookingID/{tripBooking}', 'storePayment')->name("payment_details");
    Route::delete('/deleteBooking/{tripBooking}', 'deleteBooking')->name("cancelBooking");
});
Auth::routes();

Route::get('/profile', [HomeController::class, 'index'])->name('profile');
Route::get('/schedule',[ScheduleController::class,'index']);
// Route::get('/schedule/{path}',[ScheduleController::class,'viewPath'])->name('path');

Route::put('/editprofile/{id}', [HomeController::class,'editProfile']);
// Route::put('/editpassword/{id}', [HomeController::class,'editPassword']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contactsend');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
