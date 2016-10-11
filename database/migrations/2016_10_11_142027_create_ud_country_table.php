<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUdCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ud_country', function (Blueprint $table) {
        	$table->increments('co_id');
            $table->string('iso2');
            $table->string('short_name');
            $table->string('long_name');
            $table->string('iso3');
            $table->string('numcode');
            $table->string('un_member');
            $table->string('calling_code');
            $table->string('cctld');
            $table->string('capital');
            $table->string('currency');
            $table->string('king');
            $table->string('president');
            $table->string('primanister');
            $table->string('population');
            $table->string('size');
            $table->text('description');
            $table->integer('status');
        });
        
        $this->insertStaff();
    }
    
    private function insertStaff()
    {
    	DB::table('ud_country')->insert(
	        array(
	          'iso2' => 'AF',
	          'short_name' => 'Afghanistan',
	          'long_name' => 'Islamic Republic of Afghanistan',
	          'iso3' => 'AFG',
	          'numcode' => '004',
	          'un_member' => 'yes',
	          'calling_code' => '93',
	          'cctld' => '.af',
	          'capital' => 'name@domain.com',
	          'currency' => 'name@domain.com',
	          'king' => 'name@domain.com',
	          'president' => 'name@domain.com',
	          'primanister' => 'name@domain.com',
	          'primanister' => 'name@domain.com',
	          'population' => 'name@domain.com',
	          'size' => 'name@domain.com',
	          'description' => 'name@domain.com',
	          'status' => 0
	        )
    	);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ud_country');
    }
}
