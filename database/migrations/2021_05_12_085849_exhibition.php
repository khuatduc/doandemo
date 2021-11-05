<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exhibition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('exhibitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idImage')->unsigned();
            $table->float('sumScore');
            $table->integer('exhi');
            $table->rememberToken();
            $table->timestamps();
             $table->foreign('idImage')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('exhibitions');
    }
}
