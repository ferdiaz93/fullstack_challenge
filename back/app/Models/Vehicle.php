<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "tbl_vehicle";

    public function vehicleDetail(){
        return $this->hasMany('App\Models\VehicleDetail','vehicle_id');
    }

}
