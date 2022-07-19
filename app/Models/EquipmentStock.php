<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentStock extends Model
{
    use HasFactory;

    public function sport()
    {
        return $this->hasOne(Sport::class);
    }
}
