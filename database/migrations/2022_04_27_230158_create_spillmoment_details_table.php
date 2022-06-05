<?php

use App\Models\Spillmoment;
use App\Models\Vendor;
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
        Schema::create('spillmoment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Spillmoment::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Vendor::class)->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('price');
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
        Schema::dropIfExists('spillmoment_details');
    }
};
