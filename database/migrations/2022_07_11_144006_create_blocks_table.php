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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->char('block_type');
            // 'camelCase'
            // 'snick_case'
            // 'PascalCase'
            $table->float('price');
            $table->foreignId('sport_id')->constrained('sports');
            $table->integer('public_amount');
            $table->boolean('is_available');
            $table->string('local');
            $table->integer('amount');
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
        Schema::dropIfExists('blocks');
    }
};
