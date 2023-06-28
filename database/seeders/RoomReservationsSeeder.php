<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Room;
use App\Models\RoomReservation;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();
        $customers = Customer::all();

        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now()->addDays(30);

        foreach ($rooms as $room) {
            $checkIn = $this->generateRandomDateTime($startDate, $endDate);
            $checkOut = $this->generateRandomDateTime($checkIn, $endDate);
            $customer = $customers->random();

            RoomReservation::create([
                'room_id' => $room->id,
                'customer_id' => rand(1, 30),
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'rate' => rand(4500, 7500)
            ]);
        }
    }


    private function generateRandomDateTime($start, $end)
    {
        $timestamp = mt_rand($start->timestamp, $end->timestamp);

        return Carbon::createFromTimestamp($timestamp);
    }
}
