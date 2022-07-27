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
        return $this->hasMany(Client::class, 'client_id');
    }

    protected $fillable = [
        'block_id',
        'client_id',
        'time',
        'date',
        'total_price',
        'paid_out',
    ];
    protected $casts = [
        'start_time' => 'date:hh:mm',
        'end_time' => 'date:hh:mm'
    ];
}
