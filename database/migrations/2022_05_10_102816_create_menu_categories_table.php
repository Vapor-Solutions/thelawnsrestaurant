<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('menu_categories')->insert([
            [
                'title' => 'Soups'
            ],
            [
                'title' => 'Salads'
            ],
            [
                'title' => 'Sea Food'
            ],
            [
                'title' => 'Veg Starters'
            ],
            [
                'title' => 'Non-Veg Starters'
            ],
            [
                'title' => 'Extra Starters'
            ],
            [
                'title' => 'Sandwitches'
            ],
            [
                'title' => 'Poultry'
            ],
            [
                'title' => 'Pastas'
            ],
            [
                'title' => 'Red Meat'
            ],
            [
                'title' => 'Beef'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_categories');
    }
};
