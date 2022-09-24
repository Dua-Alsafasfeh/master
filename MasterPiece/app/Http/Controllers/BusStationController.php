<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use App\Models\Payment;
use App\Models\TripBooking;
use App\Widgets\TripBookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BusStationController extends Controller
{
    public function viewHome(){
        $cities = City::get();
        return view('userside.home' , compact('cities'));
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

    ///////////////////////////////////////////////////////////// get trip details
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

    ////////////////////////////////////////////////////////// store booking details
    public function  storeBokking(Request $request , Trip $trip ){
        $request->validate([
            "number" => "required|numeric|min:1|not_in:0|max:5"
        ]);
        $number = $request->get("number");
        $price_of_seat = $trip->price;
        $total_cost =  $number * $price_of_seat;
        // dd($total_cost );
        // dd(($trip->bus->size)-($trip->tripBookings()->count()), $number);
        if((($trip->bus->size)-($trip->tripBookings()->count()))< $number){
            return back()->with('no available seat','Sorry! There are not Seats Available.');
        }
        for($i = 0 ; $i < $request->number ; $i++){
            $trip_booking = new TripBooking();
            $trip_booking->trip_id = $trip->id;
            $trip_booking->user_id = auth()->id();
            $trip_booking->num_of_seats = $request->input('number');
            $trip_booking->total_cost = $total_cost;
            $trip_booking->save();
        }
        // dd($trip_booking);
        return view('userside.payment' , compact('trip' , 'number','trip_booking'));

    }
    /////////////////////////////////////////////////////////////////////////payment page
    //payment section
    public function storePayment(Request $request ,$trip_id , $tripBooking){
        // $request->validate([
        //     "person_name" => "required|regex:/^[\pL\s]+$/u|max:255",
        //     "card_num" => "required|digits:16",
        //     "expiry" => "required|after:today",
        //     "cvv" => "required|digits:3",
        // ]);
        // dd($tripBooking);
        $cost = DB::table('trip_bookings')->where('id', $tripBooking)->first();
        $payment = new Payment;
        $payment->person_name = $request->input('person_name');
        $payment->card_num = $request->input('card_num');
        $payment->expiry = $request->input('expiry');
        $payment->cvv = $request->input('cvv');
        $payment->user_id = Auth::user()->id;
        $payment->total_price = $cost->total_cost;
        $payment->trip_bookings_id= $tripBooking;     
        $payment->save();
        
        DB::update('UPDATE trip_bookings set is_payment = 1 WHERE id=?', [$tripBooking]);
        // return back()->with('status','Trip has been Confirmed, and Payment completed successfully.Please print your TICKET');

        // $paid = DB::table('trip_bookings')->select('is_payment')->where('id',$tripBooking)->get();
        // dd($paid);
        $ticket_details = Trip::with(['city_from','city_to'])->where('id',$trip_id)->first();
        $paid = DB::table('trip_bookings')->where('id',$tripBooking)->first();
        return view('userside.ticket' , compact('ticket_details','paid'));
    }
      /////////////////////////////////////////////////////////////////////// ticket page
      //unpaid ticket page
      public function viewTicket_unpaid(Request $request, $trip_id , $tripBooking){
        // return $trip_id;
        $ticket_details = Trip::with(['city_from','city_to'])->where('id',$trip_id)->first();
        $paid = DB::table('trip_bookings')->where('id',$tripBooking)->first();
        // dd($paid->total_cost);
        return view('userside.ticket' , compact('ticket_details','paid'));
    }
    //////////////////////////////////////////////////////////////// cancel Booking
    public function deleteBooking($id){
        DB::table('trip_bookings')->where('id',$id)->delete();
        return redirect('/')->with('deleteBooking','Trip Booking Canceled Successfully.Thank You for Using Our Website!');
    }
}
