<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'block_id',
        'client_id',
        'time',
        'endTime',
        'date',
        'total_price',
        'paid_out',
        'schedule_status_id',
    ];
    protected $casts = [
        'start_time' => 'date:hh:mm',
        'end_time' => 'date:hh:mm'
    ];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function schedule_status()
    {
        return $this->belongsTo(ScheduleStatus::class, 'schedule_status_id');
    }
}
