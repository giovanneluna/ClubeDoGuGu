<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function equipment_stock()
    {
        return $this->belongsTo(EquipmentStock::class);
    }

    protected $fillable = [
        'name',
        'equipment'

    ];
}
