<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded= [];

    protected $casts = [
        'seat_number' => 'array',
    ];

    public function details()
    {
        return $this->hasMany(BookingDetail::class,'booking_id','id');
    }
    public function userDetails()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class,'trip_id','id');
    }
}
