<?php

namespace Database\Seeders;

use App\Models\Church;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Church::create([
            'name' => 'Buenas Nuevas',
            'address' => 'San Jose, CA 95134',
        ]);
        Church::create([
            'name' => 'Fuerte clamor',
            'address' => 'Av, Triunfo 122343',
        ]);
    }
}
