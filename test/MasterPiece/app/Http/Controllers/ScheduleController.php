<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        // $schedule = DB::table('trips')
        // ->join('cities','trips.from_id','=','cities.id')
        // ->join('drivers','trips.driver_id','=','drivers.id')
        // ->join('buses','trips.bus_id','=','buses.id')
        // // ->select('trips.*','cities.city_name as city_from','drivers.driver_name','drivers.phone_number','buses.size','trips.price')
        // ->get();
        $schedule = Trip::with(['bus' , "driver" , "city_from" , "city_to"])->get();
        // $schedule = Trip::all();
        return view('userside.schedule',compact('schedule'));
    }
    
}
