<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::firstOrCreate(['id' => 1], [
            'name' => 'Giovanne de Luna',
            'email' => 'gikalunalticg@gmail.com',
            'cpf' => '12365478910',
            'telephone' => '38998191556',
            'age' => '15',
            'address' => 'Rua do Doka',

        ]);
    }
}
