<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;
use App\Models\WashPackage;

class HomeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        $washPackages = WashPackage::with('vehicleType')->get();
        return view('frontend.index', compact('vehicleTypes', 'washPackages'));
    }
}
