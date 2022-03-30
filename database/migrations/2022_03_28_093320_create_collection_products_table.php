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
        Schema::create('collection_products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');

            $table->foreignId('vendor_id');
            $table->foreign('vendor_id')->references('id')
                ->on('vendors')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('link');

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
        Schema::dropIfExists('collection_products');
    }
};
