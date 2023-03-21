<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        DB::table('permissions')->insert([
            [
                'title'=>"Create Users",
            ],
            [
                'title'=>"View Users",
            ],
            [
                'title'=>"Edit Users",
            ],
            [
                'title'=>"Delete Users",
            ],
            [
                'title'=>"Create Customers",
            ],
            [
                'title'=>"View Customers",
            ],
            [
                'title'=>"Edit Customers",
            ],
            [
                'title'=>"Delete Customers",
            ],
            [
                'title'=>"Create Currencies",
            ],
            [
                'title'=>"View Currencies",
            ],
            [
                'title'=>"Edit Currencies",
            ],
            [
                'title'=>"Delete Currencies",
            ],
            [
                'title'=>"Create Menu Categories",
            ],
            [
                'title'=>"View Menu Categories",
            ],
            [
                'title'=>"Edit Menu Categories",
            ],
            [
                'title'=>"Delete Menu Categories",
            ],
            [
                'title'=>"Create Menu Items",
            ],
            [
                'title'=>"View Menu Items",
            ],
            [
                'title'=>"Edit Menu Items",
            ],
            [
                'title'=>"Delete Menu Items",
            ],
            [
                'title'=>"Create Testimonials",
            ],
            [
                'title'=>"View Testimonials",
            ],
            [
                'title'=>"Edit Testimonials",
            ],
            [
                'title'=>"Delete Testimonials",
            ],
            [
                'title'=>"Create Table Reservations",
            ],
            [
                'title'=>"View Table Reservations",
            ],
            [
                'title'=>"Edit Table Reservations",
            ],
            [
                'title'=>"Delete Table Reservations",
            ],
            [
                'title'=>"Create Room Types",
            ],
            [
                'title'=>"View Room Types",
            ],
            [
                'title'=>"Edit Room Types",
            ],
            [
                'title'=>"Delete Room Types",
            ],
            [
                'title'=>"Create Room Reservations",
            ],
            [
                'title'=>"View Room Reservations",
            ],
            [
                'title'=>"Edit Room Reservations",
            ],
            [
                'title'=>"Delete Room Reservations",
            ],
            [
                'title'=>"Create Room Selections",
            ],
            [
                'title'=>"View Room Selections",
            ],
            [
                'title'=>"Edit Room Selections",
            ],
            [
                'title'=>"Delete Room Selections",
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
