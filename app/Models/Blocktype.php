<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blocktype extends Model
{
    use HasFactory;

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function block()
    {
        return $this->hasMany(Block::class);
    }
}
