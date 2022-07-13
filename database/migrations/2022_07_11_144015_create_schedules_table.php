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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('time');
            $table->foreignId('client_id');
            $table->foreignId('block_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->float('total_price');
            $table->boolean('paid_out');


            $table->foreignId('block_id')->constrained('blocks');
            // $table->foreignId('users_id');
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
        Schema::dropIfExists('schedules');
    }
};
