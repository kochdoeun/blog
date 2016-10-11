<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_phone', function (Blueprint $table) {
            $table->increments('phoneid');
            $table->string('bcode');
            $table->string('phone');
            $table->string('locode');
            $table->integer('phone_type');
            $table->integer('phone_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('b_phone');
    }
}
