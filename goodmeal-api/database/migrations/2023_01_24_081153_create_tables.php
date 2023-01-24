<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->timestampTz('open_at')->nullable();
            $table->timestampTz('close_at')->nullable();
            $table->unsignedDecimal('score')->default(1);
            $table->text('banner_url')->nullable();
            $table->text('logo_url')->nullable();
            $table->enum('delivery_available', ['delivery', 'pickup', 'all'])->default('all');
            $table->unsignedDecimal('delivery_price_from')->nullable();
            $table->unsignedDecimal('delivery_price_tax')->nullable();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('image_url');

            $table->foreignId('id_category');
            $table->foreign('id_category')->references('id')->on('categories');

            $table->timestamps();
        });

        Schema::create('products_stores', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_products');
            $table->foreign('id_products')->references('id')->on('products');

            $table->foreignId('id_store');
            $table->foreign('id_store')->references('id')->on('stores');

            $table->float('price');
            $table->float('discount');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_store');
            $table->foreign('id_store')->references('id')->on('stores');

            $table->unsignedInteger('reference');
            $table->float('total');
            $table->string('delivery_type', 10);
            $table->dateTimeTz('delivery_at');
            $table->unsignedDecimal('delivery_total')->nullable();
            $table->timestamps();
        });

        Schema::create('orders_products', function (Blueprint $table) {
            $table->foreignId('id_order');
            $table->foreign('id_order')->references('id')->on('orders');

            $table->foreignId('id_products');
            $table->foreign('id_products')->references('id')->on('products');

            $table->unsignedInteger('units');
            $table->float('unit_price');
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
        Schema::dropIfExists('products_stores');
        Schema::dropIfExists('orders_products');
        Schema::dropIfExists('products');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('categories');
    }
}
