<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('site_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('sub_city_id');
            $table->integer('woreda');
            $table->string('description');

            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('sub_city_id')->references('id')->on('subcities');
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
        Schema::dropIfExists('locations');
    }
};
