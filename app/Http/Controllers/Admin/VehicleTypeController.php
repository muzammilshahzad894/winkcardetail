<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;

class VehicleTypeController extends Controller
{
    public function index()
    {
        $vehicleTypes = VehicleType::paginate(10);
        return view('admin.vehicle-types.index', compact('vehicleTypes'));
    }

    public function create()
    {
        return view('admin.vehicle-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:vehicle_types,name',
            'image' => 'required',
        ]);

        // save in database
        $vehicleType = new VehicleType();
        $vehicleType->name = $request->name;
        $vehicleType->image = $request->image;
        $vehicleType->save();

        // redirect to vehicle types index page with success-toastr
        return redirect()->route('admin.vehicle-types.index')->with('success', 'Vehicle type added successfully.');
    }

    public function edit($id)
    {
        $vehicleType = VehicleType::findOrFail($id);
        return view('admin.vehicle-types.edit', compact('vehicleType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:vehicle_types,name,' . $id,
        ]);

        // save in database
        $vehicleType = VehicleType::findOrFail($id);
        $vehicleType->name = $request->name;
        $vehicleType->image = $request->image ?? $vehicleType->image;
        $vehicleType->save();

        // redirect to vehicle types index page with success-toastr
        return redirect()->route('admin.vehicle-types.index')->with('success', 'Vehicle type updated successfully.');
    }

    public function destroy($id)
    {
        $vehicleType = VehicleType::findOrFail($id);
        $vehicleType->delete();

        // redirect to vehicle types index page with success-toastr
        return redirect()->route('admin.vehicle-types.index')->with('success', 'Vehicle type deleted successfully.');
    }
}
