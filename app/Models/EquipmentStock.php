<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'quantity',

    ];

    public function sport()
    {
        return $this->hasOne(Sport::class);
    }
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
