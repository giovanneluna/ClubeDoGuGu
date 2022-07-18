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
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    protected $fillable = [
        'block_id',
        'client_id',
        'time',
        'start_time',
        'end_time',
        'total_price',
        'paid_out',
    ];
    protected $casts = [
        'start_time' => 'date:hh:mm',
        'end_time' => 'date:hh:mm'
    ];
}
