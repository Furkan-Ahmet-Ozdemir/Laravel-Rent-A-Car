<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('slug',100);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->float('price')->nullable();
            $table->integer('baggage')->nullable();
            $table->integer('passenger');
            $table->string('car_type');
            $table->string('brand_name');
            $table->string('model_name');
            $table->string('fuel_type')->nullable();
            $table->string('transmission_type')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('status',5)->nullable()->nullable()->default('False');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
