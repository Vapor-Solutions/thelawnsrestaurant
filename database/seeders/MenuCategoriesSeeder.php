<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuCategories = ["Appetizers", "Entrees", "Sides", "Desserts", "Beverages"];

        foreach ($menuCategories as $category) {
            $cat = new MenuCategory();
            $cat->title = $category;
            $cat->image_path = "https://cdn.pixabay.com/photo/2016/12/26/17/28/spaghetti-1932466__340.jpg";
            $cat->save();
        }
    }
}
