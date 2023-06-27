<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $floors = ['A', 'B', 'C', 'D', 'E'];
        $roomsPerFloor = 5;

        for ($floorIndex = 0; $floorIndex < count($floors); $floorIndex++) {
            $floor = $floors[$floorIndex];

            for ($roomNumber = 1; $roomNumber <= $roomsPerFloor; $roomNumber++) {
                $roomName = $floor . str_pad($roomNumber, 2, '0', STR_PAD_LEFT);

                Room::create([
                    'room_number' => $roomName,
                    'room_type_id' => rand(1, 3),
                ]);
            }
        }
    }
}
