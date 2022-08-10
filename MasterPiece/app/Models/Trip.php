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
}
