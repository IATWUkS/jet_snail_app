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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_cars_id')->unsigned();
            $table->index('brand_cars_id', 'cars_brand_cars_idx');
            $table->foreign('brand_cars_id')->references('id')->on('brand_cars');
            $table->bigInteger('owner_cars_id')->unsigned();
            $table->foreign('owner_cars_id')->references('id')->on('users');
            $table->bigInteger('type_cars_id')->unsigned();
            $table->foreign('type_cars_id')->references('id')->on('type_cars');
            $table->bigInteger('status_cars_id')->unsigned();
            $table->foreign('status_cars_id')->references('id')->on('status_cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
