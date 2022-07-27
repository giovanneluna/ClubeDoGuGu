<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable  = [
        'block_type',
        'amount',
        'public_amount',
        'is_available',
        'sport_id',
        'local',
    ];


    public function stock_blocks()
    {
        return $this->hasMany(StockBlock::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'schedule_id');
    }

    public function sport()
    {
        return $this->belongsToMany(Sport::class, 'sport_id');
    }
}
