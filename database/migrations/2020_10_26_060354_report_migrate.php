<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReportMigrate extends Migration
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
            $table->string('username_tech')->nullable();
            $table->string('title');
            $table->string('address');
            $table->string('description');
            $table->integer('status');
            $table->string('image')->nullable();
            $table->dateTime('createreport')->nullable();
            $table->dateTime('solve')->nullable();
            $table->dateTime('completed')->nullable();
            $table->string('solution')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
