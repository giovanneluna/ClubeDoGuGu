<?php

namespace Database\Seeders;

use App\Models\ScheduleStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleStatusSeeder extends Seeder
{
    public function run()
    {
        ScheduleStatus::firstOrCreate(['id' => 1], ['status' => 'Agendado']);
        ScheduleStatus::firstOrCreate(['id' => 2], ['status' => 'Cancelado']);
        ScheduleStatus::firstOrCreate(['id' => 3], ['status' => 'Finalizado']);
    }
}
