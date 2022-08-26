<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table = 'trips';
    // protected $fillable = ['']

    public function tripBookings(){
        return $this->HasMany(TripBooking::class);
    }
    
    public function bus(){
        return $this->belongsTo(Bus::class);
    }

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    public function city_from(){
        return $this->belongsTo(City::class , "from_id");
    }

    public function city_to(){
        return $this->belongsTo(City::class , "to_id");
    }
    
}
