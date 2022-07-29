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
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreignId('schedule_status_id')->constrained('schedules_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            if (Schema::hasColumn('schedules', 'schedule_status_id')) {
                $table->dropForeign(['schedule_status_id']);
                $table->dropColumn('equipment_type_id');
            }
        });
    }
};
