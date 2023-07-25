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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('deal_id');
            $table->integer('filter_id');
            $table->integer('amenity_id');
            $table->integer('style_id');
            $table->integer('neighbor_id');
            $table->integer('room_id');
            $table->string('title');
            $table->string('banner');
            $table->string('type');
            $table->string('city');
            $table->string('region');
            $table->integer('price');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
