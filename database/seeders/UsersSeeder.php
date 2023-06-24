<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 30; $i++) {
            $user =  new User();
            $user->role_id = 2;
            $user->name = $faker->name;
            $user->email = Str::slug($user->name).'@gmail.com';
            $user->password = Hash::make('1234567890');
            $user->save();
        }
    }
}
