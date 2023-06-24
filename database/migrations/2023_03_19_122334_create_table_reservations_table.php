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
        Schema::create('table_reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('reservation_date');
            $table->dateTime('reservation_time');
            $table->foreignId('customer_id');
            $table->unsignedSmallInteger('pax');
            $table->dateTime('confirmed_at')->nullable();
            $table->timestamps();
        });

        DB::table('table_reservations')
        ->update(['reservation_time' => DB::raw('TIME(reservation_time)')]);
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_reservations');
    }
};
