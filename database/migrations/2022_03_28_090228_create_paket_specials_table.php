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
        Schema::create('paket_specials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');

            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')
                ->on('products')->onDelete('cascade');

            $table->foreignId('vendor_id');
            $table->foreign('vendor_id')->references('id')
                ->on('vendors')->onDelete('cascade');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

            $table->string('name', 100);
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('photos')->nullable();
            $table->integer('price')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('stock');
            $table->string('link');
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('paket_specials');
    }
};
