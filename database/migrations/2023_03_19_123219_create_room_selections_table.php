<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('room_selections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_reservation_id');
            $table->foreignId('room_type_id');
            $table->unsignedSmallInteger('pax');
            $table->text('extras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_selections');
    }
};
