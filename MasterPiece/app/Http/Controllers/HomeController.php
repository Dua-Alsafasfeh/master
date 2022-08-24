<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/profile');
    }

    // edit profile 
    public function editProfile(Request $request ,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->update();
        return redirect('/profile')->with('status','Information Updated Successfully');

    }

    //booking history
    // public function bookingHistory(){
    //     $history = DB::table('trip_bookings')
    //     ->join('trips','trip_bookings.trip_id','=','trips.id')
    //     ->join('users','trip_bookings.user_id','=','users.id')
    //     ->select('trip_bookings.*',)

    // }
}
