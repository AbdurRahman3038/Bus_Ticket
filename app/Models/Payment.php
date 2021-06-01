<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function userDetails()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function details()
    {
        return $this->hasMany(BookingDetail::class,'booking_id','id');
    }
}
