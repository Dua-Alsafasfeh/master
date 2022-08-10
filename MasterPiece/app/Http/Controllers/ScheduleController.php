<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Trip::all();
        return view('userside.schedule',compact('schedule'));
    }
    
}
