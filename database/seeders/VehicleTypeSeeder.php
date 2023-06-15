<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
            [
                'name' => 'Regular Size Car',
                'image' => 'template-icon-vehicle-small-car',
            ],
            [
                'name' => 'Medium Size Car',
                'image' => 'template-icon-vehicle-car-mid-size',
            ],
            [
                'name' => 'Compact SUV',
                'image' => 'template-icon-vehicle-suv',
            ],
            [
                'name' => 'Minivan',
                'image' => 'template-icon-vehicle-minivan',
            ],
            [
                'name' => 'Pickup Truck',
                'image' => 'template-icon-vehicle-pickup',
            ],
            [
                'name' => 'Cargo Truck',
                'image' => 'template-icon-vehicle-truck-mid-size',
            ],
        ]);
    }
}
