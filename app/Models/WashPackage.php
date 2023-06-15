<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WashPackage extends Model
{
    use HasFactory;

    protected $table = 'wash_packages';

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }
}
