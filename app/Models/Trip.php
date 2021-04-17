<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function tripFromRoute()
    {
    return $this -> belongsTo(Route::class,'route_from_id','id');
    }

    public function tripToRoute()
    {
    return $this -> belongsTo(Route::class,'route_to_id','id');
    }

    public function tripBus()
    {
    return $this -> belongsTo(Bus::class,'bus_id','id');
    }




}
