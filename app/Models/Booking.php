<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }

    public function washPackage()
    {
        return $this->belongsTo(WashPackage::class, 'wash_package_id');
    }
}
