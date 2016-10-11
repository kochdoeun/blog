<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUdCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ud_city', function (Blueprint $table) {
        	$table->increments('city_id');
            $table->integer('state_id');
            $table->string('city');
            $table->string('city_logo');
            $table->integer('city_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ud_city');
    }
}
