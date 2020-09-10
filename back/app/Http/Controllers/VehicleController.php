<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function getVehicles(){
        $vehicles = Vehicle::with('vehicleDetail')->get();
        return response()->json(['success' => true, 'message' => 'OK', 'response' => $vehicles]);
    }
}
