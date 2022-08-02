<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentUse extends Model
{
    use HasFactory;

    public function equipments()
    {
        return $this->hasOne(Equipment::class, 'equipment_id');
    }
}
