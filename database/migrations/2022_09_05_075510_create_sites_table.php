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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->string('name');
            $table->string('name_amh');
            $table->string('img_1');
            $table->string('img_2');
            $table->string('img_3');
            $table->string('video_url');
            $table->string('features');
            $table->enum('product_type', ['ቪላ ቤት', 'አፓርትመንት ቤቶች', 'ዱፕሌክስ አፓርታማዎች', 'መሬት']); // villa, apartment, land,
            $table->integer('floors');
            $table->integer('delivery');
            $table->integer('featured_bedrooms')->nullable();
            $table->integer('featured_size')->nullable();
            $table->integer('houses_per_floor')->nullable();
            $table->float('price')->nullable();
            $table->float('shop_price')->nullable();

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
        Schema::dropIfExists('sites');
    }
};
