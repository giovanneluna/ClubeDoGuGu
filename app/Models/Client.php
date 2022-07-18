<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'telephone',
        'age',
        'address',

    ];
}
