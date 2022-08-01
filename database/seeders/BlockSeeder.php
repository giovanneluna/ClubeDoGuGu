<?php

namespace Database\Seeders;

use App\Models\Block;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    public function run()
    {
        Block::firstOrCreate(['id' => 1], [
            'block_type' => 'QuadraA',
            'is_available' => '1',
            'public_amount' => '100',
            'local' => 'Primeira Quadra do Clube',
            'amount' => '20',


        ]);
    }
}
