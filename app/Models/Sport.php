<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{


    use HasFactory;

    protected $table = 'sports';
    protected $fillable = [
        'name',
        'equipments_id',
        'equipment_quantity',
        'sports_id',
    ];

    public function block()
    {
        return $this->hasMany(Block::class, 'block_id');
    }

    public function equipment_stock()
    {
        return $this->belongsTo(EquipmentStock::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipments_id');
    }
}
