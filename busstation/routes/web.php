<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusStationController;
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
    Route::get('/Home', 'viewHome');
    Route::get('/Schedule', 'viewSchedule');
    Route::get('/About', 'viewAbout');
    Route::get('/Contact', 'viewContact');
    Route::get('/Gallery', 'viewGallery');
    Route::get('/Register', 'viewRegister');
    Route::get('/Login', 'viewLogin');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

