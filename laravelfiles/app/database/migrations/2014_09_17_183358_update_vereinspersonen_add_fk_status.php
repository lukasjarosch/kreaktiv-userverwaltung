<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVereinspersonenAddFkStatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vereinspersonen', function($t) {
			$t->integer('vereinsstatus_id')->unsigned();
			$t->foreign('vereinsstatus_id')->references('id')->on('vereinsstatus');
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
			$t->dropForeign('vereinsstatus_id');
			$t->dropColumn('vereinsstatus_id');
		});
	}

}
