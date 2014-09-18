<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVereinspersonenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vereinspersonen', function($t) {
			$t->increments('id');
			$t->string('studiengang');
			$t->integer('semester')->unsigned();
			$t->text('berufsausbildung');
			$t->text('berufserfahrung');
			$t->string('relevante_interessen');
			$t->string('dokumenten_link');
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vereinspersonen');
	}

}
