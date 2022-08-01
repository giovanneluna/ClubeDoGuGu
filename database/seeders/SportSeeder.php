<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{

    public function run()
    {
        Sport::firstOrCreate(['id' => 1], [
            'name' => 'Futebol',
        ]);
    }
}
