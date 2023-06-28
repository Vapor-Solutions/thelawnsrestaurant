<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roomTypes = [
            [
                'title' => 'Standard Room',
                'rate' => 100.00,
                'pax' => 2,
            ],
            [
                'title' => 'Deluxe Room',
                'rate' => 150.00,
                'pax' => 3,
            ],
            [
                'title' => 'Suite Room',
                'rate' => 200.00,
                'pax' => 4,
            ],
        ];

        foreach ($roomTypes as $roomType) {
            RoomType::create($roomType);
        }
    }
}
