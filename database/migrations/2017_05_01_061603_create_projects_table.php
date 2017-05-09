<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name', 32);
            $table->integer('end_id')->nullable();
            $table->integer('primary_id')->nullable();
            $table->integer('user_id');
            $table->integer('contract_money')->nullable();
            $table->integer('budget')->nullable();
            $table->dateTime('started_day')->nullable();
            $table->dateTime('expected_day')->nullable();
            $table->dateTime('ended_day')->nullable();
            $table->boolean('display_flag')->default(0)->nullable();
            $table->string('note', 2000)->nullable();
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
        Schema::dropIfExists('projects');
    }
}
