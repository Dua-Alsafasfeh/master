<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'person_name',
        'card_num',
        'expiry',
        'cvv',
        'trip_bookings_id',
        'user_id',
        'total_price',
    ];
}
