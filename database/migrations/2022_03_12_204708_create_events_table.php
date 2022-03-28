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
            $table->foreignId('event_category_id');
            $table->foreign('event_category_id')->references('id')
                ->on('event_categories')->onDelete('cascade');

            $table->foreignId('speaker_id');
            $table->foreign('speaker_id')->references('id')
                ->on('speakers')->onDelete('cascade');

            $table->foreignId('partner_id');
            $table->foreign('partner_id')->references('id')
                ->on('partners')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->string('photo');
            $table->integer('price')->default(0);
            $table->string('link');
            $table->integer('quota')->default(0);
            $table->enum('type', ['paid', 'free'])->default('paid');
            $table->enum('status', ['online', 'offline'])->default('online');
            $table->string('place')->nullable();
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
