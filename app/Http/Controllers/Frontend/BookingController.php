<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;
use App\Models\WashPackage;
use App\Models\ServicesMenu;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        $washPackages = WashPackage::with('vehicleType')->get();
        // get services menu using first item id of vehicle types and wash packages if exists
        if(count($vehicleTypes) > 0 && count($washPackages) > 0) {
            $servicesMenus = ServicesMenu::with('vehicleType', 'washPackage')
                ->where('vehicle_type_id', $vehicleTypes[0]->id)
                ->where('wash_package_id', $washPackages[0]->id)
                ->get();
        } else {
            $servicesMenus = [];
        }
        return view('frontend.booking', compact('vehicleTypes', 'washPackages', 'servicesMenus'));
    }

    public function filteredServicesMenu(Request $request)
    {
        $vehicleTypeId = $request->vehicle_type_id;
        $washPackageId = $request->wash_package_id;
        $servicesMenus = ServicesMenu::with('vehicleType', 'washPackage')
            ->where('vehicle_type_id', $vehicleTypeId)
            ->where('wash_package_id', $washPackageId)
            ->get();
        $res = view('frontend.ajax.service-menu-ajax', compact('servicesMenus'))->render();
        return response()->json(['html' => $res]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'booking_date' => 'required',
            'message' => 'required',
        ]);

        $booking = new Booking();
        $booking->vehicle_type_id = $request->vehicle_type_id;
        $booking->wash_package_id = $request->wash_package_id;
        $booking->services_menu_id = $request->services_menu_id[0];
        $booking->duration = $request->duration;
        $booking->total_price = $request->total_price;
        $booking->first_name = $request->first_name;
        $booking->second_name = $request->second_name;
        $booking->email = $request->email;
        $booking->phone_number = $request->phone_number;
        $booking->vehicle_make = $request->vehicle_make ?? null;
        $booking->vehicle_model = $request->vehicle_model ?? null;
        $booking->booking_date = $request->booking_date ?? null;
        $booking->message = $request->message ?? null;
        $booking->save();

        return redirect()->route('booking')->with('success-toastr', 'Booking created successfully.');
    }
}
