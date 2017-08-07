<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('work_type_id');
            $table->integer('job_type_id');
            $table->integer('project_id');
            $table->date('date');
            $table->time('start');
            $table->time('end');
            $table->double('rest',2,1);
            $table->double('time',2,1);
            $table->integer('cost');
            $table->text('note');
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
        Schema::dropIfExists('dailies');
    }
}
