<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('date');
            $table->string('schedule', 300);
            $table->string('result', 300);
            $table->string('share', 500);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week_schedules');
    }
}
