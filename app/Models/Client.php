<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'telephone',
        'age',
        'address',

    ];

    public function schedule()
    {
        return $this->hasMany(Schedule::class, 'schedule_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
