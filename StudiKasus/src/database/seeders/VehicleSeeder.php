<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::firstOrCreate([
            'name' => 'Toyota Avanza',
            'type' => 'Mobil',
            'license_plate' => 'B 1234 ABC',
            'price' => 200000000
]);

    }
}
