<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVereinspersonenAddPersonId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vereinspersonen', function($t) {
			$t->foreign('person_id')->references('id')->on('personen'); 
			$t->integer('person_id')->unsigned(); 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vereinspersonen', function($t) {
			$t->dropForeign('person_id');
			$t->dropColumn('person_id');
		});
	}

}
