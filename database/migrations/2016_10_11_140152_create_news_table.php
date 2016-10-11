<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('nid');
            $table->string('ntitle');
            $table->text('news');
            $table->string('nkey_word');
            $table->string('nrelate_bkey');
            $table->integer('nrelate_country');
            $table->timestamp('npost_date');
            $table->integer('npost_by');
            $table->string('nrefference');
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
        Schema::drop('news');
    }
}
