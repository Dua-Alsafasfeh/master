<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;
    protected $table = 'buses';
    protected $fillable = ['bus_num','num_seats','driver_phone','driver_name'];
}
