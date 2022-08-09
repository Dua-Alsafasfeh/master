<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $table ='schedules';
    protected $fillable = ['trip','days','trip_schedule','price','path','num_seats'];
}
