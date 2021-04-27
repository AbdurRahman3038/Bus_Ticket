<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function tripFromLocation()
    {
    return $this -> belongsTo(Location::class,'location_from_id','id');
    }

    public function tripToLocation()
    {
    return $this -> belongsTo(Location::class,'location_to_id','id');
    }

    public function tripBus()
    {
    return $this -> belongsTo(Bus::class,'bus_id','id');
    }




}
