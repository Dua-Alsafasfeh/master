<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusStationController extends Controller
{
    public function viewHome(){
        return view('userside.home');
    }
    public function viewSchedule(){
        return view('userside.schedule');
    }
    public function viewAbout(){
        return view('userside.about');
    }
    public function viewContact(){
        return view('userside.contact');
    }
    public function viewGallery(){
        return view('userside.gallery');
    }
    public function viewRegister(){
        return view('auth.register');
    }
    public function viewLogin(){
        return view('auth.login');
    }
    public function viewBooking(){
        return view('userside.booking');
    }
    

}
