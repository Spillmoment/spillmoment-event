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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_category_id')->constrained();
            $table->foreignId('speaker_id')->constrained();
            $table->foreignId('partner_id')->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->string('photo');
            $table->integer('price')->default(0);
            $table->string('link');
            $table->string('partner');
            $table->integer('quota')->default(0);
            $table->enum('type', ['paid', 'free'])->default('paid');
            $table->enum('status', ['online', 'offline'])->default('online');
            $table->string('place');
            $table->date('event_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('started', ['0', '1']);
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
        Schema::dropIfExists('events');
    }
};
