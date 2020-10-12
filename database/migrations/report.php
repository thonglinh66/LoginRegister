<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username_emp');
            $table->string('username_tech');
            $table->string('title');
            $table->string('address');
            $table->string('description');
            $table->interger('email');
            $table->string('image');
            $table->date('createreport');
            $table->date('solve');
            $table->date('completed');
            $table->string('solution');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
