<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WashPackage;
use App\Models\VehicleType;

class WashPackageController extends Controller
{
    public function index()
    {
        $washPackages = WashPackage::with('vehicleType')->paginate(10);
        return view('admin.wash-packages.index', compact('washPackages'));
    }

    public function create()
    {
        $vehicleTypes = VehicleType::all();
        return view('admin.wash-packages.create', compact('vehicleTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
            'vehicle_type_id' => 'required',
            'description' => 'required',
        ]);

        // save in database
        $washPackage = new WashPackage();
        $washPackage->name = $request->name;
        $washPackage->vehicle_type_id = $request->vehicle_type_id;
        $washPackage->price = $request->price;
        $washPackage->time = $request->time;
        $washPackage->description = $request->description;
        $washPackage->save();

        // redirect to wash packages index page with success-toastr
        return redirect()->route('admin.wash-packages.index')->with('success', 'Wash package added successfully.');
    }

    public function edit($id)
    {
        $washPackage = WashPackage::findOrFail($id);
        $vehicleTypes = VehicleType::all();
        return view('admin.wash-packages.edit', compact('washPackage', 'vehicleTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
            'vehicle_type_id' => 'required',
            'description' => 'required',
        ]);

        // save in database
        $washPackage = WashPackage::findOrFail($id);
        $washPackage->name = $request->name;
        $washPackage->vehicle_type_id = $request->vehicle_type_id;
        $washPackage->price = $request->price;
        $washPackage->time = $request->time;
        $washPackage->description = $request->description;
        $washPackage->save();

        // redirect to wash packages index page with success-toastr
        return redirect()->route('admin.wash-packages.index')->with('success', 'Wash package updated successfully.');
    }

    public function destroy($id)
    {
        $washPackage = WashPackage::findOrFail($id);
        $washPackage->delete();

        // redirect to wash packages index page with success-toastr
        return redirect()->route('admin.wash-packages.index')->with('success', 'Wash package deleted successfully.');
    }
}
