<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    public function equipment_stock()
    {
        return $this->hasOne(EquipmentStock::class);
    }
    protected $table = 'equipments';

    protected $fillable  = [
        'name',
        'description'
    ];
}
