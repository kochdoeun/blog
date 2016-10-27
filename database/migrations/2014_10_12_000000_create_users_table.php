<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
			$table->integer('btype_id');
			$table->string('bcode');
			$table->string('bname');
			$table->string('bwebsite');
			$table->string('bemail');
			$table->string('babout');
			$table->string('blogo');
			$table->string('bphone');
			$table->string('bkeywords');
			$table->string('bcontact_person');
			$table->string('bmanager_name');
			$table->string('bnumber_of_staff');
			$table->string('bwork_day_time');
			$table->timestamp('bregister_date');
			$table->timestamp('blast_update');
			$table->string('user_phone');
			$table->timestamp('user_last_login');
			$table->integer('branking');
			$table->integer('brating');
			$table->integer('bvisit');
			$table->integer('bstatus');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
