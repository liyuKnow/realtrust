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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->enum('product_type', ['villa', 'appartment', 'land']); // villa, apartment, land, 
            $table->integer('featured_size');
            $table->integer('discount');
            $table->string('tags');
            $table->string('features');
            $table->boolean('status');
            $table->integer('featured_bedrooms');
            $table->float('price');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('img_3');
            $table->string('video_url');
            $table->enum('offer_type', ['sale', 'rent']); // sale, rent

            $table->foreign('provider_id')->references('id')->on('providers');
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
        Schema::dropIfExists('products');
    }
};
