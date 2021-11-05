<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Score extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idImage')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->integer('idBudget')->unsigned();
            $table->float('score');
            $table->timestamps();
            $table->foreign('idImage')->references('id')->on('images');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idBudget')->references('id')->on('budgets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
