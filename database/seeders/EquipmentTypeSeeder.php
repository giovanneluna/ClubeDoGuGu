<?php

namespace Database\Seeders;

use App\Models\EquipmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentTypeSeeder extends Seeder
{
    public function run()
    {
        EquipmentType::firstOrCreate(['id' => 1], ['name' => 'Futebol']);
        EquipmentType::firstOrCreate(['id' => 2], ['name' => 'Volei']);
        EquipmentType::firstOrCreate(['id' => 3], ['name' => 'Basquete']);
        EquipmentType::firstOrCreate(['id' => 4], ['name' => 'Peteca']);
        EquipmentType::firstOrCreate(['id' => 5], ['name' => 'Badminton']);
        EquipmentType::firstOrCreate(['id' => 6], ['name' => 'GuguBall']);
    }
}
