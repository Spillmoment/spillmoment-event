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
        Schema::create('collection_pakets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('paket_special_id');
            $table->foreign('paket_special_id')->references('id')
                ->on('paket_specials')->onDelete('cascade');

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
        Schema::dropIfExists('collection_pakets');
    }
};
