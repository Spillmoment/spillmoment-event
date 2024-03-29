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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('nik', 16)->nullable()->unique();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->longText('description');
            $table->string('photo', 255)->nullable();
            $table->string('whatsapp', 15);
            $table->string('instagram', 100);
            $table->string('link');
            $table->longText('address')->nullable();
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
        Schema::dropIfExists('vendors');
    }
};
