<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Testimonial;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        foreach (Customer::all() as $customer) {
            $testimonial = new Testimonial();
            $testimonial->customer_id = $customer->id;
            $testimonial->customer_image_path = "https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=".Str::slug($testimonial->customer->name);
            $testimonial->rating = rand(3, 5);
            $testimonial->description = $faker->realText;
            $testimonial->save();
        }
    }
}
