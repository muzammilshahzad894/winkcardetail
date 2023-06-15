<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesMenu extends Model
{
    use HasFactory;

    protected $table = 'services_menus';

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function washPackage()
    {
        return $this->belongsTo(WashPackage::class);
    }
}
