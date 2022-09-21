<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Trip;
use App\Models\TripBooking;

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
        // $history = DB::table('trip_bookings')->where('user_id',Auth()->user()->id)->get();
        $history = TripBooking::with(['trip'])->where('user_id',Auth()->user()->id)->get();
        return view('/profile', compact('history'));
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

}
