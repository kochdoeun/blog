<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRateExhangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('rate_exhange', function (Blueprint $table) {
            $table->increments('reid');
            $table->timestamp('date');
            $table->string('country');
            $table->double('from1USD', 15, 8);
            $table->timestamp('regdate');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rate_exhange');
    }
}
