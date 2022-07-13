<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    protected $fillable = [
        'block_id',
        'day',
        'startTime',
        'endTime',
        'date',
        'priceToPay',
    ];
    protected $casts = [
        'startTime' => 'date:hh:mm',
        'endTime' => 'date:hh:mm'
    ];
}
