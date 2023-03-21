<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appetizers = array(
            array("name" => "Mozzarella sticks", "price" => 7.99),
            array("name" => "Chicken wings", "price" => 9.99),
            array("name" => "Bruschetta", "price" => 6.99),
            array("name" => "Nachos", "price" => 8.99),
            array("name" => "Spinach and artichoke dip", "price" => 7.99)
        );

        $entrees = array(
            array("name" => "Steak", "price" => 19.99),
            array("name" => "Chicken Parmesan", "price" => 14.99),
            array("name" => "Salmon", "price" => 18.99),
            array("name" => "Burgers", "price" => 12.99),
            array("name" => "Pasta dishes", "price" => 13.99)
        );

        $sides = array(
            array("name" => "French fries", "price" => 3.99),
            array("name" => "Garlic bread", "price" => 4.99),
            array("name" => "Roasted vegetables", "price" => 5.99),
            array("name" => "Mashed potatoes", "price" => 4.99),
            array("name" => "Onion rings", "price" => 5.99)
        );

        $desserts = array(
            array("name" => "Cheesecake", "price" => 6.99),
            array("name" => "Chocolate cake", "price" => 7.99),
            array("name" => "Ice cream sundae", "price" => 5.99),
            array("name" => "Apple pie", "price" => 6.99),
            array("name" => "Creme brulee", "price" => 8.99)
        );

        $beverages = array(
            array("name" => "Soft drinks", "price" => 2.99),
            array("name" => "Iced tea", "price" => 2.99),
            array("name" => "Lemonade", "price" => 3.99),
            array("name" => "Coffee", "price" => 2.99),
            array("name" => "Beer", "price" => 5.99)
        );



        foreach ($appetizers as $item) {
            $menu = new MenuItem();
            $menu->menu_category_id = 1;
            $menu->title = $item["name"];
            $menu->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            $menu->price = $item["price"] * 100;
            $menu->save();
        }
        foreach ($entrees as $item) {
            $menu = new MenuItem();
            $menu->menu_category_id = 2;
            $menu->title = $item["name"];
            $menu->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            $menu->price = $item["price"] * 100;
            $menu->save();
        }
        foreach ($sides as $item) {
            $menu = new MenuItem();
            $menu->menu_category_id = 3;
            $menu->title = $item["name"];
            $menu->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            $menu->price = $item["price"] * 100;
            $menu->save();
        }
        foreach ($desserts as $item) {
            $menu = new MenuItem();
            $menu->menu_category_id = 4;
            $menu->title = $item["name"];
            $menu->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            $menu->price = $item["price"] * 100;
            $menu->save();
        }
        foreach ($beverages as $item) {
            $menu = new MenuItem();
            $menu->menu_category_id = 5;
            $menu->title = $item["name"];
            $menu->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
            $menu->price = $item["price"] * 100;
            $menu->save();
        }
    }
}
