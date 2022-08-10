<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\TripBooking;
use Illuminate\Http\Request;

class BusStationController extends Controller
{
    public function viewHome(){
        $cities = City::get();
        return view('userside.home' , compact('cities'));
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
    public function viewBooking(Request $request){
        $request->validate([
            "from_id" => "required",
            "to_id" => "required"
        ]);
        $city_from = City::find($request->get("from_id"));
        $city_to = City::find($request->get("to_id"));
        $trips = Trip::with(['tripBookings' , 'bus'])->where("from_id" , $request->get("from_id"))->where("to_id" , $request->get("to_id"))->get();
        return view('userside.booking' , compact("trips" , "city_from" , "city_to"));
    }

    public function  storeBokking(Request $request , Trip $trip){
        $request->validate([
            "number" => "required"
        ]);

        for($i = 0 ; $i < $request->number ; $i++){
            $trip_booking = new TripBooking();
            $trip_booking->trip_id = $trip->id;
            $trip_booking->user_id = auth()->id();
            $trip_booking->save();
        }
        
        return back();
    }
}
