<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;



    public function stock_blocks()
    {
        return $this->hasMany(StockBlock::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class);
    }

    public function sport()
    {
        return $this->hasMany(Sport::class);
    }
    protected $fillable  = [
        'block_type',
        'price',
        'amount',
        'public_amount',
        'is_available',
        'local',
    ];
}
