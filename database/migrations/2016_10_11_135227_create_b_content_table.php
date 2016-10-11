<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_content', function (Blueprint $table) {
            $table->increments('bcid');
            $table->string('bcode');
            $table->string('bc_code');
            $table->string('bc_image');
            $table->text('content');
            $table->integer('bc_type');
            $table->timestamp('bc_last_udt');
            $table->integer('rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('b_content');
    }
}
