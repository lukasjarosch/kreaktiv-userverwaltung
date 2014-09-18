<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionenHistorie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('positionen_historie', function($t) {
			$t->date('beginn');
			$t->date('ende');
			$t->boolean('kommissarisch')->default(0);
			$t->integer('position_id')->unsigned();
			$t->integer('vereinsperson_id')->unsigned();

			// Foreign keys
			$t->foreign('position_id')->references('id')->on('positionen');
			$t->foreign('vereinsperson_id')->references('id')->on('vereinspersonen');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('positionen_historie');
	}

}
