<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\Payment;
use App\Models\TripBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // get trip details
    public function viewBooking(Request $request){
        $request->validate([
            "from_id" => "required",
            "to_id" => "required"
        ]);
        if($request->get("from_id") == $request->get("to_id")){
        return back()->with('city_error','Please Choose Correct Data!');
    }
        $city_from = City::find($request->get("from_id"));
        $city_to = City::find($request->get("to_id"));
        $trips = Trip::with(['tripBookings' , 'bus'])->where("from_id" , $request->get("from_id"))->where("to_id" , $request->get("to_id"))->get();
        return view('userside.booking' , compact("trips" , "city_from" , "city_to"));
    }

    // store booking details
    public function  storeBokking(Request $request , Trip $trip ){
        $request->validate([
            "number" => "required|numeric|min:1|not_in:0|max:5"
        ]);

        // for($i = 0 ; $i < $request->number ; $i++){
        //     $trip_booking = new TripBooking();
        //     $trip_booking->trip_id = $trip->id;
        //     $trip_booking->user_id = auth()->id();
        //     $trip_booking->save();
        // }
        // $user_id=Auth::user()->id;
        // return back();
        $number = $request->get("number");

        return view('userside.ticket' , compact('trip' , 'number'));

    }

    // ticket page
    public function viewTicket(){

        return view('userside.ticket');
    }

    //payment section
    public function storePayment(Request $request){
        $request->validate([
            'person_name' =>'required|string|max:255',
            'card_num' => 'required|max:16',
            'expiry' =>'required|after:today',
            'cvv' => 'required|integer|max:3'
        ]);

        $payment = new Payment;
        $payment->person_name = $request->input('person_name');
        $payment->card_num = $request->input('card_num');
        $payment->expiry = $request->input('expiry');
        $payment->cvv = $request->input('cvv');
        $payment->user_id = Auth::user()->id;
        
        // $payment->trip_id = $trip_id;
        $payment->total_price = $request->input('price');
        $payment->trip_id= $request->input('trip_id');
        $payment->save();
        return redirect()->back()->with('status','Trip has been Confirmed, and Payment completed successfully');
    }
}
