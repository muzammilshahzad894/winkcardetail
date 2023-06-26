<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesMenu;
use App\Models\VehicleType;
use App\Models\WashPackage;

class ServicesMenuController extends Controller
{
    public function index()
    {
        $servicesMenus = ServicesMenu::with(['vehicleType', 'washPackage'])->paginate(10);
        return view('admin.services-menu.index', compact('servicesMenus'));
    }

    public function create()
    {
        $vehicleTypes = VehicleType::all();
        $washPackages = WashPackage::all();
        return view('admin.services-menu.create', compact('vehicleTypes', 'washPackages'));
    }

    public function store(Request $request)
    {
        // name, price, tiem, vehicle_type_id, wash_package_id are required
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
            'vehicle_type_id' => 'required',
            'wash_package_id' => 'required',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'time.required' => 'Time is required',
            'vehicle_type_id.required' => 'Vehicle type is required',
            'wash_package_id.required' => 'Wash package is required',
        ]);

        $servicesMenu = new ServicesMenu();
        $servicesMenu->name = $request->name;
        $servicesMenu->price = $request->price;
        $servicesMenu->time = $request->time;
        $servicesMenu->vehicle_type_id = $request->vehicle_type_id;
        $servicesMenu->wash_package_id = $request->wash_package_id;
        if ($request->description) {
            $servicesMenu->description = $request->description;
        }

        $servicesMenu->save();

        return redirect()->route('admin.services-menu.index')->with('success', 'Services menu created successfully');
    }

    public function edit($id)
    {
        $servicesMenu = ServicesMenu::find($id);
        $vehicleTypes = VehicleType::all();
        $washPackages = WashPackage::all();
        return view('admin.services-menu.edit', compact('servicesMenu', 'vehicleTypes', 'washPackages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
            'vehicle_type_id' => 'required',
            'wash_package_id' => 'required',
        ], [
            'name.required' => 'Name is required',
            'price.required' => 'Price is required',
            'time.required' => 'Time is required',
            'vehicle_type_id.required' => 'Vehicle type is required',
            'wash_package_id.required' => 'Wash package is required',
        ]);

        $servicesMenu = ServicesMenu::find($id);
        $servicesMenu->name = $request->name;
        $servicesMenu->price = $request->price;
        $servicesMenu->time = $request->time;
        $servicesMenu->vehicle_type_id = $request->vehicle_type_id;
        $servicesMenu->wash_package_id = $request->wash_package_id;
        if ($request->description) {
            $servicesMenu->description = $request->description;
        }

        $servicesMenu->save();

        return redirect()->route('admin.services-menu.index')->with('success', 'Services menu updated successfully');
    }

    public function destroy($id)
    {
        $servicesMenu = ServicesMenu::find($id);
        $servicesMenu->delete();

        return redirect()->route('admin.services-menu.index')->with('success', 'Services menu deleted successfully');
    }
}
