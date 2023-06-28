<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Errol Kitsiiri',
            'email' => 'test@example.com',
            'role_id' => '1',
            'password' => Hash::make('123456789'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Steve Nyanumba',
            'email' => 'info@thelawnsrestaurante.com',
            'role_id' => '1',
            'password' => Hash::make('123456789'),
        ]);
        $this->call([
            CustomersSeeder::class,
            UsersSeeder::class,
            MenuCategoriesSeeder::class,
            MenuItemsSeeder::class,
            TestimonialsSeeder::class,
            RoomsSeeder::class,
            RoomReservationsSeeder::class,
            RoomTypesSeeder::class,
        ]);
    }
}
