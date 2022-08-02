<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';

    protected $fillable  = [
        'name',
        'description',
        'equipment_type_id',
    ];

    public function equipment_stock()
    {
        return $this->hasOne(EquipmentStock::class, 'equipments_id');
    }

    public function sport()
    {
        return $this->hasMany(Sport::class);
    }

    public function equipment_type()
    {
        return $this->belongsTo(EquipmentType::class);
    }
    public function equipment_use()
    {
        return $this->belongsTo(EquipmentUse::class, 'equipment_use');
    }
}
