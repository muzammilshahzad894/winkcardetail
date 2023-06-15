<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\VehicleType;
use App\Models\WashPackage;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('vehicleType', 'washPackage')->paginate(10);
        return view('admin.bookings.index', compact('bookings'));
    }

    public function editBooking($id)
    {
        $booking = Booking::findOrFail($id);
        $vehicleTypes = VehicleType::all();
        $washPackages = WashPackage::all();
        return view('admin.bookings.edit', compact('booking', 'vehicleTypes', 'washPackages'));
    }

    public function updateBooking(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'second_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'booking_date' => 'required',
            'message' => 'required',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->vehicle_type_id = $request->vehicle_type_id;
        $booking->wash_package_id = $request->wash_package_id;
        $booking->duration = $request->hours . ':' . $request->minutes;
        $booking->booking_date = $request->booking_date;
        $booking->total_price = $request->total_price;
        $booking->first_name = $request->first_name;
        $booking->second_name = $request->second_name;
        $booking->email = $request->email;
        $booking->phone_number = $request->phone_number;
        $booking->vehicle_make = $request->vehicle_make;
        $booking->vehicle_model = $request->vehicle_model;
        $booking->message = $request->message;
        $booking->save();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking updated successfully.'); 
    }

    public function destroyBooking($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();
        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
