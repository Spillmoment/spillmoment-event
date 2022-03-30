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

            $table->foreignId('category_id')->constrained()
                ->onDelete('cascade');

            $table->foreignId('vendor_id')->constrained()
                ->onDelete('cascade');

            $table->string('code', 50)->unique();
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
        Schema::dropIfExists('products');
    }
};
