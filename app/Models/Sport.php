<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blocktype()
    {
        return $this->hasOne(Blocktype::class);
    }

    protected $fillable = [
        'name',
        'capacity',
        'equipment',
        'totalTime',
        'value',

    ];
}
