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
        $images = [
            "https://media.istockphoto.com/id/481765835/photo/homemade-italian-bruschetta-appetizer.jpg?s=612x612&w=0&k=20&c=20lme_vcpR4R2wfNyAFwvglvSj3mxJU9qel00LqzP3I=",
            "https://thumbs.dreamstime.com/b/restaurant-salmon-entree-plate-against-black-backdrop-36035934.jpg",
            "https://thumbs.dreamstime.com/b/variety-thanksgiving-sides-table-variety-thanksgiving-sides-dinner-table-carrots-mashed-potatoes-sweet-potato-159377064.jpg",
            "https://burst.shopifycdn.com/photos/berry-cheesecake.jpg?width=1200&format=pjpg&exif=1&iptc=1",
            "https://t3.ftcdn.net/jpg/01/59/18/36/360_F_159183621_0YTKAAqAA7GI7DlCBfYJ2wfKbC6Zf30V.jpg"
        ];

        foreach ($menuCategories as $key => $category) {
            $cat = new MenuCategory();
            $cat->title = $category;
            $cat->image_path = $images[$key];
            $cat->save();
        }
    }
}
